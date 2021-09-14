<div class="friends d-flex flex-wrap mt-4" style="gap: 20px;">
    @foreach($users as $user)
        <div class="firend card">
            <div class="card-body m-2 d-flex flex-column align-items-center">
                <img width="100" height="100" style="border-radius: 50%;"
                     @if($user->image)
                     src="{{asset('storage/images/users/'.$user->image)}}"
                     @elseif($user->gender === "male")
                     src="{{asset('img/profile/male.png')}}"
                     @elseif($user->gender === "female")
                     src="{{asset('img/profile/female.png')}}"
                     @else
                     src="{{asset('img/profile/default.png')}}"
                     @endif
                     alt="User Image">
                <strong class="friend-name m-2"
                        style="font-size: 1rem;font-weight:600;color:rgb(242, 137, 56);">{{$user->name}}</strong>

                @if(Auth::user()->hasSentFriendRequestTo($user))
                    <button type="button"
                            class="btn btn-sm btn-success js_friend-add">
                        Requested
                    </button>
                @else
                    <button wire:click="addToFriend({{ $user->id }})" type="button"
                            class="btn btn-sm btn-success js_friend-add">
                        <i class="fa fa-user-plus mr-2"></i>
                        <span id="friendship-status-{{$user->id}}">
                                    Add Friend
                                </span>
                    </button>

                @endif
            </div>
        </div>
    @endforeach
</div>



