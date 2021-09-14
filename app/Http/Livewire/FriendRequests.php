<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FriendRequests extends Component
{
    public function render()
    {
        $getFriendRequests = Auth::user()->getFriendRequests();
        $friendRequests = [];
        foreach ($getFriendRequests as $key => $getFriendRequest) {
            $senderUser = User::find($getFriendRequest->sender_id);
            $friendRequests[$key]['id'] = $senderUser->id;
            $friendRequests[$key]['name'] = $senderUser->name;
            $friendRequests[$key]['username'] = $senderUser->username;
            $friendRequests[$key]['image'] = $senderUser->image;
            $friendRequests[$key]['gender'] = $senderUser->gender;
            $friendRequests[$key]['mutual'] = Auth::user()->getMutualFriendsCount($senderUser);
        }

        return view('livewire.friend-requests', compact('friendRequests'));
    }

    public function acceptRequest($id)
    {

        try {
            $user = User::find(Auth::id());
            $sender = User::find($id);
            if (!$sender) {
                $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'User not found!']);
            } else {
                if ($user->acceptFriendRequest($sender)) {
                    $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Request accepted!']);

                } else {
                    $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Request has been not accepted!']);
                }
            }
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function declineRequest($id)
    {

        try {
            $user = User::find(Auth::id());
            $sender = User::find($id);
            if (!$sender) {
                $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'User not found!']);
            } else {
                if ($user->denyFriendRequest($sender)) {
                    $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Request declined!']);

                } else {
                    $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Request has been not declined!']);
                }
            }
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
