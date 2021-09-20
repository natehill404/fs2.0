<div {{--wire:poll.5000ms--}}>

    <div class="row">
        <div class="chatbox chatbox22 ch0 {{$user->id ?? 'd-none'}}">
            <div class="chatbox__title justify-content-between ">
                <div>
                    <h5 class="{{@$user->active_status == '0' ? 'inactive-status-chat' : ''}}">
                        <div class="chat-img"><img src="{{$user->avatar_image ?? ''}}" alt="profile"/></div>
                        <a href="javascript:void(0);">{{$user->name ?? ''}}</a>
                    </h5>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <span class="mr-3"><i class="fa fa-video-camera text-white"></i></span>
                    <span class="mr-2"><i class="fa fa-phone text-white"></i></span>
                    <span class="ct0">-</span>
                    <span class="chatbox__title__close ctl0">
                             <svg viewBox="0 0 12 12" width="12px" height="12px">
                               <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>
                               <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>
                             </svg>
                        </span>
                </div>
            </div>

            <div class="chatbox__body">
                {{-- <ul class="text-center">
                     <li><a href="#"> 21/03/2021</a></li>
                 </ul>--}}
                @forelse($allMessages as $message)
                    @if($message['viewType'] == 'default')
                        <div class="chatbox__body__message chatbox__body__message--left">
                            <div class="chatbox_timing">
                                <ul>
                                    <li><a href="#"> {{$message['time']}}</a></li>
                                </ul>
                            </div>
                            <img src="{{$user->avatar_image}}" alt="Picture">
                            <div class="clearfix"></div>
                            <div class="ul_section_full">
                                <ul class="ul_msg">
                                    <!-- <li><strong>Person Name</strong></li> -->
                                    <li>{!! ($message['message'] == null && $message['attachment'] != null && @$message['attachment'][2] != 'file') ? $message['attachment'][1] : nl2br($message['message']) !!}
                                        @if(@$message['attachment'][2] == 'file')
                                            <a href="{{ route(config('chatify.attachments.download_route_name'),['fileName'=>$message['attachment'][0]]) }}"
                                               style="color: #ffffff" class="file-download">
                                                <span class="fas fa-file"></span> {{$message['attachment'][1]}}</a>
                                        @endif
                                    </li>
                                    @if(@$message['attachment'][2] == 'image')
                                        <div>
                                            <div class="message-card">
                                                <div class="image-file chat-image"
                                                     style="width: 190px; height: 108px;background-size: cover;
                                                         background-repeat: no-repeat;
                                                         background-position: center center;background-image: url('{{ asset('storage/'.config('chatify.attachments.folder').'/'.$message['attachment'][0]) }}')">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </ul>
                                <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                                <i class="fa fa-ellipsis-h cursor-pointer"></i>
                                <div class="clearfix"></div>
                                <ul class="ul_msg2">
                                    <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                    <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    @endif
                    @if($message['viewType'] == 'sender')
                        <div class="chatbox__body__message chatbox__body__message--right">
                            <div class="chatbox_timing">
                                <ul>
                                    <li><a href="#">{{$message['time']}}</a></li>
                                </ul>
                            </div>
                            <img src="{{Auth::user()->avatar_image}}" alt="Picture">
                            <div class="clearfix"></div>
                            <div class="ul_section_full">
                                <ul class="ul_msg">
                                    <!-- <li><strong>Person Name</strong></li> -->
                                    <li>{!! ($message['message'] == null && $message['attachment'] != null && @$message['attachment'][2] != 'file') ? $message['attachment'][1] : nl2br($message['message']) !!}
                                        @if(@$message['attachment'][2] == 'file')
                                            <a href="{{ route(config('chatify.attachments.download_route_name'),['fileName'=>$message['attachment'][0]]) }}"
                                               style="color: #ffffff" class="file-download">
                                                <span class="fas fa-file"></span> {{$message['attachment'][1]}}</a>
                                        @endif
                                    </li>
                                    @if(@$message['attachment'][2] == 'image')
                                        <div>
                                            <div class="message-card">
                                                <div class="image-file chat-image"
                                                     style="width: 190px; height: 108px;background-size: cover;
                                                         background-repeat: no-repeat;
                                                         background-position: center center;background-image: url('{{ asset('storage/'.config('chatify.attachments.folder').'/'.$message['attachment'][0]) }}')">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </ul>
                                <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                                <i class="fa fa-ellipsis-h cursor-pointer"></i>
                                <div class="clearfix"></div>
                                <ul class="ul_msg2">
                                    <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                    <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse
            </div>
            <div class="panel-footer">
                <form wire:submit.prevent="sendMessage('{{$user->id ?? ''}}')">

                    <div class="input-group align-items-center">

                        <div class="file-upload">
                            <label for="file-input">
                                <i class="fa fa-paperclip"></i>
                            </label>

                            <input id="file-input" accept="image/*, .txt, .rar, .zip" type="file" wire:model="attachment"/>
                        </div>
                        <input id="btn-input" type="text" class="form-control input-sm chat_set_height"
                               wire:model="text"
                               placeholder="Type your message here..." tabindex="0" dir="ltr" spellcheck="false"
                               autocomplete="off" autocorrect="off" autocapitalize="off" contenteditable="true"/>
                        <span>
                            <button class="btn bt_bg btn-sm" id="btn-chat" type="submit">Send</button>
                        </span>

                    </div>
                </form>

            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('livewire:showChatWidget', function () {
                jQuery("div.chatbox__body").scrollTop(jQuery("div.chatbox__body")[0].scrollHeight);
            })
        </script>
    @endpush
</div>

