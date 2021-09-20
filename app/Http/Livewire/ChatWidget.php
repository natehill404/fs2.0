<?php

namespace App\Http\Livewire;

use App\Models\User;
use Chatify\Facades\ChatifyMessenger as Chatify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class ChatWidget extends Component
{
    use WithFileUploads;

    public $allMessages = [];
    public $user = null;
    public $messageSent = false;
    public $text;
    public $attachment;
    public $friend;
    public $friendId;

    protected $listeners = ['showChatWidget' => 'fetchLatestMessages'];


    public function fetchLatestMessages($friend)
    {
        $this->user = User::find($friend);

        $query = Chatify::fetchMessagesQuery($this->user->id)->orderBy('created_at', 'asc')->get();

        // if there is a messages
        $messages = [];
        if (count($query) > 0) {
            foreach ($query as $message) {
                array_push($messages, Chatify::fetchMessage($message->id));
            }

        }
        $this->allMessages = $messages;
    }

    public function render()
    {
        return view('livewire.chat-widget', ['allMessages' => $this->allMessages, 'user' => $this->user, 'messageSent' => $this->messageSent]);
    }

    public function sendMessage($friendId)
    {
        // default variables
        $error = (object)[
            'status' => 0,
            'message' => null
        ];
        $attachment = null;
        $attachment_title = null;

        // if there is attachment [file]
        if (!is_null($this->attachment)){
            // allowed extensions
            $allowed_images = Chatify::getAllowedImages();
            $allowed_files  = Chatify::getAllowedFiles();
            $allowed        = array_merge($allowed_images, $allowed_files);

            $file = $this->attachment;
            // if size less than 150MB
            if ($file->getSize() < 150000000) {
                if (in_array($file->getClientOriginalExtension(), $allowed)) {
                    // get attachment name
                    $attachment_title = $file->getClientOriginalName();
                    // upload attachment and store the new name
                    $attachment = Str::uuid() . "." . $file->getClientOriginalExtension();
                    $file->storeAs("public/" . config('chatify.attachments.folder'), $attachment);
                } else {
                    $error->status = 1;
                    $error->message = "File extension not allowed!";
                }
            } else {
                $error->status = 1;
                $error->message = "File extension not allowed!";
            }
        }

        if (!$error->status) {
            // send to database
            $messageID = mt_rand(9, 999999999) + time();
            Chatify::newMessage([
                'id' => $messageID,
                'type' => 'user',
                'from_id' => Auth::user()->id,
                'to_id' => $friendId,
                'body' => htmlentities(trim($this->text), ENT_QUOTES, 'UTF-8'),
                'attachment' => ($attachment) ? json_encode((object)[
                    'new_name' => $attachment,
                    'old_name' => htmlentities(trim($attachment_title), ENT_QUOTES, 'UTF-8'),
                ]) : null,
            ]);

            // fetch message to send it with the response
            $messageData = Chatify::fetchMessage($messageID);

            // send to user using pusher
            Chatify::push('private-chatify', 'messaging', [
                'from_id' => Auth::user()->id,
                'to_id' => $friendId,
                'message' => Chatify::messageCard($messageData, 'default')
            ]);

            $this->fetchLatestMessages($friendId);
            $this->resetInputFields();
        }


    }

    public function resetInputFields()
    {
        $this->text = '';
        $this->attachment = null;
    }

}
