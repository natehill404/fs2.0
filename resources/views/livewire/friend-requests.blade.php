<div class="simplebar-content" style="padding: 0px;" wire:poll.10000ms>
    @if(count($friendRequests) > 0)
        @foreach($friendRequests as $friendRequest)

            <div class="dropdown-box-list-item">
                <div class="user-status request">
                    <a class="user-status-avatar" href="{{route('profile.details',$friendRequest['username'])}}">
                        <div class="user-avatar small no-outline">
                            <div class="user-avatar-content">
                                <img
                                    @if($friendRequest['image'])
                                    src="{{asset('storage/images/users/'.$friendRequest['image'])}}"
                                    @elseif($friendRequest['gender'] === "male")
                                    src="{{asset('img/profile/male.png')}}"
                                    @elseif($friendRequest['gender'] === "female")
                                    src="{{asset('img/profile/female.png')}}"
                                    @else
                                    src="{{asset('img/profile/default.png')}}"
                                    @endif
                                    style="width: 30px; height: 32px; position: relative;">
                                <canvas width="30" height="32"
                                        style="position: absolute; top: 0px; left: 0px;"></canvas>
                            </div>
                        </div>
                    </a>
                    <p class="user-status-title">
                        <a class="bold"
                           href="{{route('profile.details',$friendRequest['username'])}}">{{$friendRequest['name']}}</a></p>
                    <p class="user-status-text">
                        {{$friendRequest['mutual']}} friends in common</p>
                    <div class="action-request-list"
                         id="request-action-{{$friendRequest['id']}}">
                        <div class="action-request accept"
                             wire:click="acceptRequest('{{$friendRequest['id']}}')">
                            <svg
                                class="action-request-icon icon-add-friend">
                                <use xlink:href="#svg-add-friend"></use>
                            </svg>
                        </div>

                        <div class="action-request decline"
                             wire:click="declineRequest('{{$friendRequest['id']}}')">
                            <svg
                                class="action-request-icon icon-remove-friend">
                                <use xlink:href="#svg-remove-friend"></use>
                            </svg>
                        </div>
                    </div>
                    <p class="mt-3"
                       id="request-action-response-{{$friendRequest['id']}}"></p>
                </div>
            </div>
        @endforeach
    @else
        <p class="dropdown-box-list-item">Not any pending requests.</p>
    @endif

</div>
