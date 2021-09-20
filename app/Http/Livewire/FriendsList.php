<?php

namespace App\Http\Livewire;

use App\Models\User;
use Chatify\Facades\ChatifyMessenger as Chatify;
use Livewire\Component;

class FriendsList extends Component
{
    public $friends;
    public $friendId;

    public function mount()
    {
        $this->friends = auth()->user()->getFriends();

    }
    public function openChatBox($friend)
    {
        $this->emit('showChatWidget', $friend);
    }
    public function render()
    {
        return view('livewire.friends-list');
    }
}
