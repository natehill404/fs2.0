<div>
    <aside id="chat-widget-messages" class="chat-widget closed sidebar right">
        <div class="chat-widget-messages" data-simplebar>
            @foreach($friends as $friend)
                <div class="chat-widget-message" wire:click="openChatBox('{{$friend->id}}')">
                    <div class="user-status">
                        <div class="user-status-avatar">
                            <div class="user-avatar small no-outline {{$friend->active_status == '1' ? 'online' : ''}}">
                                <div class="user-avatar-content">
                                    <img src="{{$friend->avatar_image}}" alt>
                                </div>
                            </div>
                        </div>
                        <p class="user-status-title"><span class="bold">{{$friend->name}}</span></p>
                        {{--<p class="user-status-text small">Can you stream the new game?</p>--}}
                        {{-- <p class="user-status-timestamp floaty">2hrs</p>--}}
                    </div>
                </div>
            @endforeach
        </div>
        {{--<form class="chat-widget-form">
            <div class="interactive-input small">
                <input type="text" id="chat-widget-search" name="chat_widget_search"
                       placeholder="Search Messages...">
                <div class="interactive-input-icon-wrap">
                    <svg class="interactive-input-icon icon-magnifying-glass">
                        <use xlink:href="#svg-magnifying-glass"></use>
                    </svg>
                </div>
                <div class="interactive-input-action">
                    <svg class="interactive-input-action-icon icon-cross-thin">
                        <use xlink:href="#svg-cross-thin"></use>
                    </svg>
                </div>
            </div>
        </form>--}}
        <div class="chat-widget-button">
            <div class="chat-widget-button-icon">
                <div class="burger-icon">
                    <div class="burger-icon-bar"></div>
                    <div class="burger-icon-bar"></div>
                    <div class="burger-icon-bar"></div>
                </div>
            </div>
            <p class="chat-widget-button-text">Messages / Chat</p>
        </div>
    </aside>
</div>
