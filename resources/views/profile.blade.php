@extends('layouts.app')

@section('content')

    <!-- FLOATY BAR -->
    <aside class="floaty-bar">
        <!-- BAR ACTIONS -->
        <div class="bar-actions">
            <!-- PROGRESS STAT -->
            <div class="progress-stat">
                <!-- BAR PROGRESS WRAP -->
                <div class="bar-progress-wrap">
                    <!-- BAR PROGRESS INFO -->
                    <p class="bar-progress-info">Next: <span class="bar-progress-text"></span></p>
                    <!-- /BAR PROGRESS INFO -->
                </div>
                <!-- /BAR PROGRESS WRAP -->

                <!-- PROGRESS STAT BAR -->
                <div id="logged-user-level-cp" class="progress-stat-bar"></div>
                <!-- /PROGRESS STAT BAR -->
            </div>
            <!-- /PROGRESS STAT -->
        </div>
        <!-- /BAR ACTIONS -->

        <!-- BAR ACTIONS -->
        <div class="bar-actions">
            <!-- ACTION LIST -->
            <div class="action-list dark">
                <!-- ACTION LIST ITEM -->
                <a class="action-list-item" href="#">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-shopping-bag">
                        <use xlink:href="#svg-shopping-bag"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->

                <!-- ACTION LIST ITEM -->
                <a class="action-list-item" href="#">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-friend">
                        <use xlink:href="#svg-friend"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->

                <!-- ACTION LIST ITEM -->
                <a class="action-list-item" href="#">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-messages">
                        <use xlink:href="#svg-messages"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->

                <!-- ACTION LIST ITEM -->
                <a class="action-list-item unread" href="#">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-notification">
                        <use xlink:href="#svg-notification"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->
            </div>
            <!-- /ACTION LIST -->

            <!-- ACTION ITEM WRAP -->
            <a class="action-item-wrap" href="#">
                <!-- ACTION ITEM -->
                <div class="action-item dark">
                    <!-- ACTION ITEM ICON -->
                    <svg class="action-item-icon icon-settings">
                        <use xlink:href="#svg-settings"></use>
                    </svg>
                    <!-- /ACTION ITEM ICON -->
                </div>
                <!-- /ACTION ITEM -->
            </a>
            <!-- /ACTION ITEM WRAP -->
        </div>
        <!-- /BAR ACTIONS -->
    </aside>
    <!-- /FLOATY BAR -->

    <!-- CONTENT GRID -->
    <div class="content-grid m-auto">
        <!-- PROFILE HEADER -->
        <div class="profile-header">
            <!-- PROFILE HEADER COVER -->
            <figure class="profile-header-cover liquid"
                    style="background: url('img/profile/fs-cover.png') center center / cover no-repeat;">
                <img src="{{asset('img/profile/fs-cover.png')}}" alt="cover-01" style="display: none;">
            </figure>
            <!-- /PROFILE HEADER COVER -->

            <!-- PROFILE HEADER INFO -->
            <div class="profile-header-info">
                <!-- USER SHORT DESCRIPTION -->
                <div class="user-short-description big">
                    <!-- USER SHORT DESCRIPTION AVATAR -->
                    <a class="user-short-description-avatar user-avatar big" href="#">

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            @if(Auth::user()->image)
                                <img src="{{Auth::user()->avatar_image}}" alt="profile"/>
                            @elseif(Auth::user()->gender === "male")
                                <img src="{{asset('img/profile/male.png')}}" alt="profile"/>
                            @elseif(Auth::user()->gender === "female")
                                <img src="{{asset('img/profile/female.png')}}" alt="profile"/>
                            @else
                                <img src="{{Auth::user()->avatar_image}}" alt="profile"/>
                            @endif

                        </div>
                        <!-- /USER AVATAR CONTENT -->

                    </a>
                    <!-- /USER SHORT DESCRIPTION AVATAR -->

                    <!-- USER SHORT DESCRIPTION AVATAR -->
                    <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium"
                       href="#">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-120-132"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            @if(Auth::user()->image)
                                <div class="hexagon-image-82-90"
                                     data-src="{{asset('storage/images/users/'.Auth::user()->image)}}"></div>
                            @elseif(Auth::user()->gender === "male")
                                <div class="hexagon-image-82-90" data-src="{{asset('img/profile/male.png')}}"></div>
                            @elseif(Auth::user()->gender === "female")
                                <div class="hexagon-image-82-90" data-src="{{asset('img/profile/female.png')}}"></div>
                            @else
                                <div class="hexagon-image-82-90" data-src="{{asset('img/profile/default.png')}}"></div>
                        @endif

                        <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->

                        <!-- USER AVATAR PROGRESS -->
                        <div class="user-avatar-progress">
                            <!-- HEXAGON -->
                            <div class="hexagon-progress-100-110"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS -->

                        <!-- USER AVATAR PROGRESS BORDER -->
                        <div class="user-avatar-progress-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-border-100-110"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS BORDER -->

                        <!-- USER AVATAR BADGE -->
                        <div class="user-avatar-badge">
                            <!-- USER AVATAR BADGE BORDER -->
                            <div class="user-avatar-badge-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-32-36"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE BORDER -->

                            <!-- USER AVATAR BADGE CONTENT -->
                            <div class="user-avatar-badge-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-dark-26-28"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE CONTENT -->

                            <!-- USER AVATAR BADGE TEXT -->
                            <p class="user-avatar-badge-text">24</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                        </div>
                        <!-- /USER AVATAR BADGE -->
                    </a>
                    <!-- /USER SHORT DESCRIPTION AVATAR -->

                    <!-- USER SHORT DESCRIPTION TITLE -->
                    <p class="user-short-description-title"><a href="#">{{Auth::user()->name}}</a></p>
                    <!-- /USER SHORT DESCRIPTION TITLE -->

                    <!-- USER SHORT DESCRIPTION TEXT -->
                    <p class="user-short-description-text"><a href="#">I am a Tech Lover</a></p>
                    <!-- /USER SHORT DESCRIPTION TEXT -->
                </div>
                <!-- /USER SHORT DESCRIPTION -->

                <!-- PROFILE HEADER INFO ACTIONS -->
            {{--<div class="profile-header-info-actions">
                <!-- PROFILE HEADER INFO ACTION -->
                <p class="profile-header-info-action button secondary"><span class="hide-text-mobile">Add</span>
                    Friend +</p>
                <!-- /PROFILE HEADER INFO ACTION -->

                <!-- PROFILE HEADER INFO ACTION -->
                <p class="profile-header-info-action button primary"><span class="hide-text-mobile">Send</span>
                    Message</p>
                <!-- /PROFILE HEADER INFO ACTION -->
            </div>--}}
            <!-- /PROFILE HEADER INFO ACTIONS -->
            </div>
            <!-- /PROFILE HEADER INFO -->
        </div>
        <!-- /PROFILE HEADER -->

        <!-- SECTION NAVIGATION -->
        <nav class="section-navigation">
            <!-- SECTION MENU -->
            <div id="section-navigation-slider" class="section-menu">
                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item active" href="{{route('profile')}}">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-profile">
                        <use xlink:href="#svg-profile"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">About</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="{{route('home')}}">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-timeline">
                        <use xlink:href="#svg-timeline"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Timeline</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-friend">
                        <use xlink:href="#svg-friend"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Friends</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-group">
                        <use xlink:href="#svg-group"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Groups</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-photos">
                        <use xlink:href="#svg-photos"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Photos</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-videos">
                        <use xlink:href="#svg-videos"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Videos</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-badges">
                        <use xlink:href="#svg-badges"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Badges</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-streams">
                        <use xlink:href="#svg-streams"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Streams</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-blog-posts">
                        <use xlink:href="#svg-blog-posts"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Blog</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-forum">
                        <use xlink:href="#svg-forum"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Forum</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->

                <!-- SECTION MENU ITEM -->
                <a class="section-menu-item" href="#">
                    <!-- SECTION MENU ITEM ICON -->
                    <svg class="section-menu-item-icon icon-store">
                        <use xlink:href="#svg-store"></use>
                    </svg>
                    <!-- /SECTION MENU ITEM ICON -->

                    <!-- SECTION MENU ITEM TEXT -->
                    <p class="section-menu-item-text">Store</p>
                    <!-- /SECTION MENU ITEM TEXT -->
                </a>
                <!-- /SECTION MENU ITEM -->
            </div>
            <!-- /SECTION MENU -->

            <!-- SLIDER CONTROLS -->
            <div id="section-navigation-slider-controls" class="slider-controls">
                <!-- SLIDER CONTROL -->
                <div class="slider-control left">
                    <!-- SLIDER CONTROL ICON -->
                    <svg class="slider-control-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /SLIDER CONTROL ICON -->
                </div>
                <!-- /SLIDER CONTROL -->

                <!-- SLIDER CONTROL -->
                <div class="slider-control right">
                    <!-- SLIDER CONTROL ICON -->
                    <svg class="slider-control-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /SLIDER CONTROL ICON -->
                </div>
                <!-- /SLIDER CONTROL -->
            </div>
            <!-- /SLIDER CONTROLS -->
        </nav>
        <!-- /SECTION NAVIGATION -->

        <!-- GRID -->
        <div class="grid grid-3-6-3 mobile-prefer-content">
            <!-- GRID COLUMN -->
            <div class="grid-column">
                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">About Me</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- PARAGRAPH -->
                        <p class="paragraph">Hi! My name is {{Auth::user()->name}} but some people may know me as
                            GameHuntress! I have a
                            Twitch channel where I stream, play and review all the newest games.</p>
                        <!-- /PARAGRAPH -->

                        <!-- INFORMATION LINE LIST -->
                        <div class="information-line-list">
                            <!-- INFORMATION LINE -->
                            <div class="information-line">
                                <!-- INFORMATION LINE TITLE -->
                                <p class="information-line-title">Joined</p>
                                <!-- /INFORMATION LINE TITLE -->

                                <!-- INFORMATION LINE TEXT -->
                                <p class="information-line-text">March 26th, 2017</p>
                                <!-- /INFORMATION LINE TEXT -->
                            </div>
                            <!-- /INFORMATION LINE -->

                            <!-- INFORMATION LINE -->
                            <div class="information-line">
                                <!-- INFORMATION LINE TITLE -->
                                <p class="information-line-title">City</p>
                                <!-- /INFORMATION LINE TITLE -->

                                <!-- INFORMATION LINE TEXT -->
                                <p class="information-line-text">Los Angeles, California</p>
                                <!-- /INFORMATION LINE TEXT -->
                            </div>
                            <!-- /INFORMATION LINE -->

                            <!-- INFORMATION LINE -->
                            <div class="information-line">
                                <!-- INFORMATION LINE TITLE -->
                                <p class="information-line-title">Country</p>
                                <!-- /INFORMATION LINE TITLE -->

                                <!-- INFORMATION LINE TEXT -->
                                <p class="information-line-text">United States</p>
                                <!-- /INFORMATION LINE TEXT -->
                            </div>
                            <!-- /INFORMATION LINE -->

                            <!-- INFORMATION LINE -->
                            <div class="information-line">
                                <!-- INFORMATION LINE TITLE -->
                                <p class="information-line-title">Age</p>
                                <!-- /INFORMATION LINE TITLE -->

                                <!-- INFORMATION LINE TEXT -->
                                <p class="information-line-text">32 Years</p>
                                <!-- /INFORMATION LINE TEXT -->
                            </div>
                            <!-- /INFORMATION LINE -->

                            <!-- INFORMATION LINE -->
                            <div class="information-line">
                                <!-- INFORMATION LINE TITLE -->
                                <p class="information-line-title">Web</p>
                                <!-- /INFORMATION LINE TITLE -->

                                <!-- INFORMATION LINE TEXT -->
                                <p class="information-line-text"><a href="#">I am a Tech Lover</a></p>
                                <!-- /INFORMATION LINE TEXT -->
                            </div>
                            <!-- /INFORMATION LINE -->
                        </div>
                        <!-- /INFORMATION LINE LIST -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Personal Info</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- INFORMATION LINE LIST -->
                        <div class="information-line-list">
                            <!-- INFORMATION LINE -->
                            <div class="information-line">
                                <!-- INFORMATION LINE TITLE -->
                                <p class="information-line-title">Email</p>
                                <!-- /INFORMATION LINE TITLE -->

                                <!-- INFORMATION LINE TEXT -->
                                <p class="information-line-text">{{Auth::user()->email}}</p>
                                <!-- /INFORMATION LINE TEXT -->
                            </div>
                            <!-- /INFORMATION LINE -->

                            <!-- INFORMATION LINE -->
                            <div class="information-line">
                                <!-- INFORMATION LINE TITLE -->
                                <p class="information-line-title">Birthday</p>
                                <!-- /INFORMATION LINE TITLE -->

                                <!-- INFORMATION LINE TEXT -->
                                <p class="information-line-text">August 24th, 1987</p>
                                <!-- /INFORMATION LINE TEXT -->
                            </div>
                            <!-- /INFORMATION LINE -->

                            <!-- INFORMATION LINE -->
                            <div class="information-line">
                                <!-- INFORMATION LINE TITLE -->
                                <p class="information-line-title">Occupation</p>
                                <!-- /INFORMATION LINE TITLE -->

                                <!-- INFORMATION LINE TEXT -->
                                <p class="information-line-text">Costume Designer</p>
                                <!-- /INFORMATION LINE TEXT -->
                            </div>
                            <!-- /INFORMATION LINE -->

                            <!-- INFORMATION LINE -->
                            <div class="information-line">
                                <!-- INFORMATION LINE TITLE -->
                                <p class="information-line-title">Status</p>
                                <!-- /INFORMATION LINE TITLE -->

                                <!-- INFORMATION LINE TEXT -->
                                <p class="information-line-text">In a Relationship</p>
                                <!-- /INFORMATION LINE TEXT -->
                            </div>
                            <!-- /INFORMATION LINE -->

                            <!-- INFORMATION LINE -->
                            <div class="information-line">
                                <!-- INFORMATION LINE TITLE -->
                                <p class="information-line-title">Birthplace</p>
                                <!-- /INFORMATION LINE TITLE -->

                                <!-- INFORMATION LINE TEXT -->
                                <p class="information-line-text">Long Island, New York United States</p>
                                <!-- /INFORMATION LINE TEXT -->
                            </div>
                            <!-- /INFORMATION LINE -->

                            <!-- INFORMATION LINE -->
                            <div class="information-line">
                                <!-- INFORMATION LINE TITLE -->
                                <p class="information-line-title">Ps ID</p>
                                <!-- /INFORMATION LINE TITLE -->

                                <!-- INFORMATION LINE TEXT -->
                                <p class="information-line-text">da_GHuntress</p>
                                <!-- /INFORMATION LINE TEXT -->
                            </div>
                            <!-- /INFORMATION LINE -->

                            <!-- INFORMATION LINE -->
                            <div class="information-line">
                                <!-- INFORMATION LINE TITLE -->
                                <p class="information-line-title">Xb ID</p>
                                <!-- /INFORMATION LINE TITLE -->

                                <!-- INFORMATION LINE TEXT -->
                                <p class="information-line-text">GameHuntress89</p>
                                <!-- /INFORMATION LINE TEXT -->
                            </div>
                            <!-- /INFORMATION LINE -->
                        </div>
                        <!-- /INFORMATION LINE LIST -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->
            </div>
            <!-- /GRID COLUMN -->

            <!-- GRID COLUMN -->
            <div class="grid-column">
                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Interests</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- INFORMATION BLOCK LIST -->
                        <div class="information-block-list">
                            <!-- INFORMATION BLOCK -->
                            <div class="information-block">
                                <!-- INFORMATION BLOCK TITLE -->
                                <p class="information-block-title">Favourite TV Shows</p>
                                <!-- /INFORMATION BLOCK TITLE -->

                                <!-- INFORMATION BLOCK TEXT -->
                                <p class="information-block-text">Breaking Good, RedDevil, People of Interest, The
                                    Running Dead, Found, American Guy, The Last Windbender, Game of Wars.</p>
                                <!-- /INFORMATION BLOCK TEXT -->
                            </div>
                            <!-- /INFORMATION BLOCK -->

                            <!-- INFORMATION BLOCK -->
                            <div class="information-block">
                                <!-- INFORMATION BLOCK TITLE -->
                                <p class="information-block-title">Favourite Music Bands / Artists</p>
                                <!-- /INFORMATION BLOCK TITLE -->

                                <!-- INFORMATION BLOCK TEXT -->
                                <p class="information-block-text">Iron Maid, DC/AC, Megablow, Kung Fighters, System of a
                                    Revenge, Rammstown.</p>
                                <!-- /INFORMATION BLOCK TEXT -->
                            </div>
                            <!-- /INFORMATION BLOCK -->

                            <!-- INFORMATION BLOCK -->
                            <div class="information-block">
                                <!-- INFORMATION BLOCK TITLE -->
                                <p class="information-block-title">Favourite Movies</p>
                                <!-- /INFORMATION BLOCK TITLE -->

                                <!-- INFORMATION BLOCK TEXT -->
                                <p class="information-block-text">The Revengers Saga, The Scarred Wizard and the Fire
                                    Crown, Crime Squad, Metal Man, The Dark Rider, Watchers, The Impossible Heist.</p>
                                <!-- /INFORMATION BLOCK TEXT -->
                            </div>
                            <!-- /INFORMATION BLOCK -->

                            <!-- INFORMATION BLOCK -->
                            <div class="information-block">
                                <!-- INFORMATION BLOCK TITLE -->
                                <p class="information-block-title">Favourite Books</p>
                                <!-- /INFORMATION BLOCK TITLE -->

                                <!-- INFORMATION BLOCK TEXT -->
                                <p class="information-block-text">The Crime of the Century, Egiptian Mythology 101, The
                                    Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and
                                    Water.</p>
                                <!-- /INFORMATION BLOCK TEXT -->
                            </div>
                            <!-- /INFORMATION BLOCK -->

                            <!-- INFORMATION BLOCK -->
                            <div class="information-block">
                                <!-- INFORMATION BLOCK TITLE -->
                                <p class="information-block-title">Favourite Games</p>
                                <!-- /INFORMATION BLOCK TITLE -->

                                <!-- INFORMATION BLOCK TEXT -->
                                <p class="information-block-text">The First of Us, Assassin’s Squad, Dark Assylum,
                                    NMAK16, Last Cause 4, Grand Snatch Auto.</p>
                                <!-- /INFORMATION BLOCK TEXT -->
                            </div>
                            <!-- /INFORMATION BLOCK -->
                        </div>
                        <!-- /INFORMATION BLOCK LIST -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Jobs &amp; Education</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- TIMELINE INFORMATION LIST -->
                        <div class="timeline-information-list">
                            <!-- TIMELINE INFORMATION -->
                            <div class="timeline-information">
                                <!-- TIMELINE INFORMATION TITLE -->
                                <p class="timeline-information-title">Lead Costume Designer</p>
                                <!-- /TIMELINE INFORMATION TITLE -->

                                <!-- TIMELINE INFORMATION DATE -->
                                <p class="timeline-information-date">2015 - NOW</p>
                                <!-- /TIMELINE INFORMATION DATE -->

                                <!-- TIMELINE INFORMATION TEXT -->
                                <p class="timeline-information-text">Lead Costume Designer for the "Amazzo Costumes"
                                    agency. I'm in charge of a ten person group, overseeing all the proyects and talking
                                    to potential clients. I also handle some face to face interviews for new
                                    candidates.</p>
                                <!-- /TIMELINE INFORMATION TEXT -->
                            </div>
                            <!-- /TIMELINE INFORMATION -->

                            <!-- TIMELINE INFORMATION -->
                            <div class="timeline-information">
                                <!-- TIMELINE INFORMATION TITLE -->
                                <p class="timeline-information-title">Costume Designer</p>
                                <!-- /TIMELINE INFORMATION TITLE -->

                                <!-- TIMELINE INFORMATION DATE -->
                                <p class="timeline-information-date">2013 - 2015</p>
                                <!-- /TIMELINE INFORMATION DATE -->

                                <!-- TIMELINE INFORMATION TEXT -->
                                <p class="timeline-information-text">Costume Designer for the "Jenny Taylors" agency.
                                    Was in charge of working side by side with the best designers in order to complete
                                    and perfect orders.</p>
                                <!-- /TIMELINE INFORMATION TEXT -->
                            </div>
                            <!-- /TIMELINE INFORMATION -->

                            <!-- TIMELINE INFORMATION -->
                            <div class="timeline-information">
                                <!-- TIMELINE INFORMATION TITLE -->
                                <p class="timeline-information-title">Designer Intern</p>
                                <!-- /TIMELINE INFORMATION TITLE -->

                                <!-- TIMELINE INFORMATION DATE -->
                                <p class="timeline-information-date">2012 - 2013</p>
                                <!-- /TIMELINE INFORMATION DATE -->

                                <!-- TIMELINE INFORMATION TEXT -->
                                <p class="timeline-information-text">Intern for the "Jenny Taylors" agency. Was in
                                    charge of the communication with the clients and day-to-day chores.</p>
                                <!-- /TIMELINE INFORMATION TEXT -->
                            </div>
                            <!-- /TIMELINE INFORMATION -->

                            <!-- TIMELINE INFORMATION -->
                            <div class="timeline-information">
                                <!-- TIMELINE INFORMATION TITLE -->
                                <p class="timeline-information-title">The Antique College of Design</p>
                                <!-- /TIMELINE INFORMATION TITLE -->

                                <!-- TIMELINE INFORMATION DATE -->
                                <p class="timeline-information-date">2007 - 2012</p>
                                <!-- /TIMELINE INFORMATION DATE -->

                                <!-- TIMELINE INFORMATION TEXT -->
                                <p class="timeline-information-text">Bachelor of Costume Design in the Antique College.
                                    It was a five years intensive career, plus a course about Cosplays. Average: A+</p>
                                <!-- /TIMELINE INFORMATION TEXT -->
                            </div>
                            <!-- /TIMELINE INFORMATION -->
                        </div>
                        <!-- /TIMELINE INFORMATION LIST -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->
            </div>
            <!-- /GRID COLUMN -->

            <!-- GRID COLUMN -->
            <div class="grid-column">
                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- PROGRESS ARC SUMMARY -->
                    <div class="progress-arc-summary">
                        <!-- PROGRESS ARC WRAP -->
                        <div class="progress-arc-wrap">
                            <!-- PROGRESS ARC -->
                            <div class="progress-arc">
                                <canvas id="profile-completion-chart"></canvas>
                            </div>
                            <!-- PROGRESS ARC -->

                            <!-- PROGRESS ARC INFO -->
                            <div class="progress-arc-info">
                                <!-- PROGRESS ARC TITLE -->
                                <p class="progress-arc-title">59%</p>
                                <!-- /PROGRESS ARC TITLE -->
                            </div>
                            <!-- /PROGRESS ARC INFO -->
                        </div>
                        <!-- /PROGRESS ARC WRAP -->

                        <!-- PROGRESS ARC SUMMARY INFO -->
                        <div class="progress-arc-summary-info">
                            <!-- PROGRESS ARC SUMMARY TITLE -->
                            <p class="progress-arc-summary-title">Profile Completion</p>
                            <!-- /PROGRESS ARC SUMMARY TITLE -->

                            <!-- PROGRESS ARC SUMMARY TITLE -->
                            <p class="progress-arc-summary-subtitle">Sean David</p>
                            <!-- /PROGRESS ARC SUMMARY TITLE -->

                            <!-- PROGRESS ARC SUMMARY TITLE -->
                            <p class="progress-arc-summary-text">Complete your profile by filling profile info fields,
                                completing quests &amp; unlocking badges</p>
                            <!-- /PROGRESS ARC SUMMARY TITLE -->
                        </div>
                        <!-- /PROGRESS ARC SUMMARY INFO -->
                    </div>
                    <!-- /PROGRESS ARC SUMMARY -->

                    <!-- ACHIEVEMENT STATUS LIST -->
                    <div class="achievement-status-list">
                        <!-- ACHIEVEMENT STATUS -->
                        <div class="achievement-status">
                            <!-- ACHIEVEMENT STATUS PROGRESS -->
                            <p class="achievement-status-progress">11/30</p>
                            <!-- /ACHIEVEMENT STATUS PROGRESS -->

                            <!-- ACHIEVEMENT STATUS INFO -->
                            <div class="achievement-status-info">
                                <!-- ACHIEVEMENT STATUS TITLE -->
                                <p class="achievement-status-title">Quests</p>
                                <!-- /ACHIEVEMENT STATUS TITLE -->

                                <!-- ACHIEVEMENT STATUS TEXT -->
                                <p class="achievement-status-text">Completed</p>
                                <!-- /ACHIEVEMENT STATUS TEXT -->
                            </div>
                            <!-- /ACHIEVEMENT STATUS INFO -->

                            <!-- ACHIEVEMENT STATUS IMAGE -->
                            <img class="achievement-status-image" src="{{asset('img/badge/completedq-s.png')}}"
                                 alt="bdage-completedq-s">
                            <!-- /ACHIEVEMENT STATUS IMAGE -->
                        </div>
                        <!-- /ACHIEVEMENT STATUS -->

                        <!-- ACHIEVEMENT STATUS -->
                        <div class="achievement-status">
                            <!-- ACHIEVEMENT STATUS PROGRESS -->
                            <p class="achievement-status-progress">22/46</p>
                            <!-- /ACHIEVEMENT STATUS PROGRESS -->

                            <!-- ACHIEVEMENT STATUS INFO -->
                            <div class="achievement-status-info">
                                <!-- ACHIEVEMENT STATUS TITLE -->
                                <p class="achievement-status-title">Badges</p>
                                <!-- /ACHIEVEMENT STATUS TITLE -->

                                <!-- ACHIEVEMENT STATUS TEXT -->
                                <p class="achievement-status-text">Unlocked</p>
                                <!-- /ACHIEVEMENT STATUS TEXT -->
                            </div>
                            <!-- /ACHIEVEMENT STATUS INFO -->

                            <!-- ACHIEVEMENT STATUS IMAGE -->
                            <img class="achievement-status-image" src="{{asset('img/badge/unlocked-badge.png')}}"
                                 alt="bdage-unlocked-badge">
                            <!-- /ACHIEVEMENT STATUS IMAGE -->
                        </div>
                        <!-- /ACHIEVEMENT STATUS -->
                    </div>
                    <!-- /ACHIEVEMENT STATUS LIST -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">More Stats</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- STAT BLOCK LIST -->
                        <div class="stat-block-list">
                            <!-- STAT BLOCK -->
                            <div class="stat-block">
                                <!-- STAT BLOCK DECORATION -->
                                <div class="stat-block-decoration">
                                    <!-- STAT BLOCK DECORATION ICON -->
                                    <svg class="stat-block-decoration-icon icon-friend">
                                        <use xlink:href="#svg-friend"></use>
                                    </svg>
                                    <!-- /STAT BLOCK DECORATION ICON -->
                                </div>
                                <!-- /STAT BLOCK DECORATION -->

                                <!-- STAT BLOCK INFO -->
                                <div class="stat-block-info">
                                    <!-- STAT BLOCK TITLE -->
                                    <p class="stat-block-title">Last friend added</p>
                                    <!-- /STAT BLOCK TITLE -->

                                    <!-- STAT BLOCK TEXT -->
                                    <p class="stat-block-text">5 Days Ago</p>
                                    <!-- /STAT BLOCK TEXT -->
                                </div>
                                <!-- /STAT BLOCK INFO -->
                            </div>
                            <!-- /STAT BLOCK -->

                            <!-- STAT BLOCK -->
                            <div class="stat-block">
                                <!-- STAT BLOCK DECORATION -->
                                <div class="stat-block-decoration">
                                    <!-- STAT BLOCK DECORATION ICON -->
                                    <svg class="stat-block-decoration-icon icon-status">
                                        <use xlink:href="#svg-status"></use>
                                    </svg>
                                    <!-- /STAT BLOCK DECORATION ICON -->
                                </div>
                                <!-- /STAT BLOCK DECORATION -->

                                <!-- STAT BLOCK INFO -->
                                <div class="stat-block-info">
                                    <!-- STAT BLOCK TITLE -->
                                    <p class="stat-block-title">Last post update</p>
                                    <!-- /STAT BLOCK TITLE -->

                                    <!-- STAT BLOCK TEXT -->
                                    <p class="stat-block-text">1 Day Ago</p>
                                    <!-- /STAT BLOCK TEXT -->
                                </div>
                                <!-- /STAT BLOCK INFO -->
                            </div>
                            <!-- /STAT BLOCK -->

                            <!-- STAT BLOCK -->
                            <div class="stat-block">
                                <!-- STAT BLOCK DECORATION -->
                                <div class="stat-block-decoration">
                                    <!-- STAT BLOCK DECORATION ICON -->
                                    <svg class="stat-block-decoration-icon icon-comment">
                                        <use xlink:href="#svg-comment"></use>
                                    </svg>
                                    <!-- /STAT BLOCK DECORATION ICON -->
                                </div>
                                <!-- /STAT BLOCK DECORATION -->

                                <!-- STAT BLOCK INFO -->
                                <div class="stat-block-info">
                                    <!-- STAT BLOCK TITLE -->
                                    <p class="stat-block-title">Most commented post</p>
                                    <!-- /STAT BLOCK TITLE -->

                                    <!-- STAT BLOCK TEXT -->
                                    <p class="stat-block-text">56 Comments</p>
                                    <!-- /STAT BLOCK TEXT -->
                                </div>
                                <!-- /STAT BLOCK INFO -->
                            </div>
                            <!-- /STAT BLOCK -->

                            <!-- STAT BLOCK -->
                            <div class="stat-block">
                                <!-- STAT BLOCK DECORATION -->
                                <div class="stat-block-decoration">
                                    <!-- STAT BLOCK DECORATION ICON -->
                                    <svg class="stat-block-decoration-icon icon-thumbs-up">
                                        <use xlink:href="#svg-thumbs-up"></use>
                                    </svg>
                                    <!-- /STAT BLOCK DECORATION ICON -->
                                </div>
                                <!-- /STAT BLOCK DECORATION -->

                                <!-- STAT BLOCK INFO -->
                                <div class="stat-block-info">
                                    <!-- STAT BLOCK TITLE -->
                                    <p class="stat-block-title">Most liked post</p>
                                    <!-- /STAT BLOCK TITLE -->

                                    <!-- STAT BLOCK TEXT -->
                                    <p class="stat-block-text">904 Likes</p>
                                    <!-- /STAT BLOCK TEXT -->
                                </div>
                                <!-- /STAT BLOCK INFO -->
                            </div>
                            <!-- /STAT BLOCK -->
                        </div>
                        <!-- /STAT BLOCK LIST -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->

    <!-- POPUP VIDEO -->
    <div class="popup-video">
        <!-- POPUP CLOSE BUTTON -->
        <div class="popup-close-button popup-video-trigger">
            <!-- POPUP CLOSE BUTTON ICON -->
            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>
            <!-- /POPUP CLOSE BUTTON ICON -->
        </div>
        <!-- /POPUP CLOSE BUTTON -->

        <!-- IFRAME WRAP -->
        <div class="iframe-wrap">
            <iframe src="https://www.youtube.com/embed/6ErE27RNLDQ?start=200" allowfullscreen></iframe>
        </div>
        <!-- /IFRAME WRAP -->
    </div>
    <!-- /POPUP VIDEO -->

    <!-- POPUP PICTURE -->
    <div class="popup-picture">
        <!-- POPUP CLOSE BUTTON -->
        <div class="popup-close-button popup-picture-trigger">
            <!-- POPUP CLOSE BUTTON ICON -->
            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>
            <!-- /POPUP CLOSE BUTTON ICON -->
        </div>
        <!-- /POPUP CLOSE BUTTON -->

        <!-- WIDGET BOX -->
        <div class="widget-box no-padding">
            <!-- WIDGET BOX SCROLLABLE -->
            <div class="widget-box-scrollable" data-simplebar>
                <!-- WIDGET BOX SETTINGS -->
                <div class="widget-box-settings">
                    <!-- POST SETTINGS WRAP -->
                    <div class="post-settings-wrap">
                        <!-- POST SETTINGS -->
                        <div class="post-settings widget-box-post-settings-dropdown-trigger">
                            <!-- POST SETTINGS ICON -->
                            <svg class="post-settings-icon icon-more-dots">
                                <use xlink:href="#svg-more-dots"></use>
                            </svg>
                            <!-- /POST SETTINGS ICON -->
                        </div>
                        <!-- /POST SETTINGS -->

                        <!-- SIMPLE DROPDOWN -->
                        <div class="simple-dropdown widget-box-post-settings-dropdown">
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Edit Post</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Delete Post</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Make it Featured</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Report Post</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Report Author</p>
                            <!-- /SIMPLE DROPDOWN LINK -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /POST SETTINGS WRAP -->
                </div>
                <!-- /WIDGET BOX SETTINGS -->

                <!-- WIDGET BOX STATUS -->
                <div class="widget-box-status">
                    <!-- WIDGET BOX STATUS CONTENT -->
                    <div class="widget-box-status-content">
                        <!-- USER STATUS -->
                        <div class="user-status">
                            <!-- USER STATUS AVATAR -->
                            <a class="user-status-avatar" href="#">
                                <!-- USER AVATAR -->
                                <div class="user-avatar small no-outline">
                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-30-32"
                                             data-src="{{asset('storage/images/users/'.auth()->user()->image)}}"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->

                                    <!-- USER AVATAR PROGRESS -->
                                    <div class="user-avatar-progress">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-progress-40-44"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR PROGRESS -->

                                    <!-- USER AVATAR PROGRESS BORDER -->
                                    <div class="user-avatar-progress-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-border-40-44"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR PROGRESS BORDER -->

                                    <!-- USER AVATAR BADGE -->
                                    <div class="user-avatar-badge">
                                        <!-- USER AVATAR BADGE BORDER -->
                                        <div class="user-avatar-badge-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-22-24"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR BADGE BORDER -->

                                        <!-- USER AVATAR BADGE CONTENT -->
                                        <div class="user-avatar-badge-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-dark-16-18"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR BADGE CONTENT -->

                                        <!-- USER AVATAR BADGE TEXT -->
                                        <p class="user-avatar-badge-text">24</p>
                                        <!-- /USER AVATAR BADGE TEXT -->
                                    </div>
                                    <!-- /USER AVATAR BADGE -->
                                </div>
                                <!-- /USER AVATAR -->
                            </a>
                            <!-- /USER STATUS AVATAR -->

                            <!-- USER STATUS TITLE -->
                            <p class="user-status-title medium"><a class="bold" href="#">Sean
                                    David</a></p>
                            <!-- /USER STATUS TITLE -->

                            <!-- USER STATUS TEXT -->
                            <p class="user-status-text small">29 minutes ago</p>
                            <!-- /USER STATUS TEXT -->
                        </div>
                        <!-- /USER STATUS -->

                        <!-- WIDGET BOX STATUS TEXT -->
                        <p class="widget-box-status-text">Here's a sneak peek of the official box cover art for <a
                                href="#">Machine Wasteland II</a>! Remember that I'll be having a stream showing a
                            preview tommorrow at 9PM PCT!</p>
                        <!-- /WIDGET BOX STATUS TEXT -->

                        <!-- TAG LIST -->
                        <div class="tag-list">
                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="#">Cover</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="#">Preview</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="#">Art</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="#">Machine</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="#">Wasteland</a>
                            <!-- /TAG ITEM -->
                        </div>
                        <!-- /TAG LIST -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                 src="{{asset('img/reaction/love.png')}}" alt="reaction-love">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                                                     src="{{asset('img/reaction/love.png')}}"
                                                                                     alt="reaction-love"> <span
                                                        class="bold">Love</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Destroy Dex</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">The Green Goo</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Bearded Wonder</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sandra Strange</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Matt Parker</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">James Murdock</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><span class="bold">and 14 more...</span>
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                 src="{{asset('img/reaction/wow.png')}}" alt="reaction-wow">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                                                     src="{{asset('img/reaction/wow.png')}}"
                                                                                     alt="reaction-wow"> <span
                                                        class="bold">Wow</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Jett Spiegel</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                 src="{{asset('img/reaction/like.png')}}" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                                                     src="{{asset('img/reaction/like.png')}}"
                                                                                     alt="reaction-like"> <span
                                                        class="bold">Like</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Neko Bebop</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Nick Grissom</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sarah Diamond</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">24</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->

                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link">13 Comments</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">0 Shares</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /WIDGET BOX STATUS CONTENT -->
                </div>
                <!-- /WIDGET BOX STATUS -->

                <!-- POST OPTIONS -->
                <div class="post-options">
                    <!-- POST OPTION WRAP -->
                    <div class="post-option-wrap">
                        <!-- POST OPTION -->
                        <div class="post-option no-text reaction-options-dropdown-trigger">
                            <!-- POST OPTION ICON -->
                            <svg class="post-option-icon icon-thumbs-up">
                                <use xlink:href="#svg-thumbs-up"></use>
                            </svg>
                            <!-- /POST OPTION ICON -->
                        </div>
                        <!-- /POST OPTION -->

                        <!-- REACTION OPTIONS -->
                        <div class="reaction-options small reaction-options-dropdown">
                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Like">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="{{asset('img/reaction/like.png')}}"
                                     alt="reaction-like">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Love">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="{{asset('img/reaction/love.png')}}"
                                     alt="reaction-love">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="{{asset('img/reaction/dislike.png')}}"
                                     alt="reaction-dislike">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="{{asset('img/reaction/happy.png')}}"
                                     alt="reaction-happy">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="{{asset('img/reaction/funny.png')}}"
                                     alt="reaction-funny">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="{{asset('img/reaction/wow.png')}}"
                                     alt="reaction-wow">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="{{asset('img/reaction/angry.png')}}"
                                     alt="reaction-angry">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="{{asset('img/reaction/sad.png')}}"
                                     alt="reaction-sad">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->
                        </div>
                        <!-- /REACTION OPTIONS -->
                    </div>
                    <!-- /POST OPTION WRAP -->

                    <!-- POST OPTION -->
                    <div class="post-option no-text active">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-comment">
                            <use xlink:href="#svg-comment"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->
                    </div>
                    <!-- /POST OPTION -->

                    <!-- POST OPTION -->
                    <div class="post-option no-text">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-share">
                            <use xlink:href="#svg-share"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->
                    </div>
                    <!-- /POST OPTION -->
                </div>
                <!-- /POST OPTIONS -->

                <!-- POST COMMENT LIST -->
                <div class="post-comment-list">
                    <!-- POST COMMENT -->
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="#">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="{{asset('img/avatar/05.jpg')}}"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- USER AVATAR PROGRESS -->
                            <div class="user-avatar-progress">
                                <!-- HEXAGON -->
                                <div class="hexagon-progress-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS -->

                            <!-- USER AVATAR PROGRESS BORDER -->
                            <div class="user-avatar-progress-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-border-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS BORDER -->

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">12</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author" href="#">Neko
                                Bebop</a>It's always a pleasure to do this streams with you! If we have at least half
                            the fun than last time it will be an incredible success!</p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list small">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                 src="{{asset('img/reaction/happy.png')}}" alt="reaction-happy">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                                                     src="{{asset('img/reaction/happy.png')}}"
                                                                                     alt="reaction-happy"> <span
                                                        class="bold">Happy</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Marcus Jhonson</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                 src="{{asset('img/reaction/like.png')}}" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                                                     src="{{asset('img/reaction/like.png')}}"
                                                                                     alt="reaction-like"> <span
                                                        class="bold">Like</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Neko Bebop</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Nick Grissom</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sarah Diamond</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">4</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/like.png')}}"
                                                 alt="reaction-like">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/love.png')}}"
                                                 alt="reaction-love">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                 src="{{asset('img/reaction/dislike.png')}}"
                                                 alt="reaction-dislike">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/happy.png')}}"
                                                 alt="reaction-happy">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/funny.png')}}"
                                                 alt="reaction-funny">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/wow.png')}}"
                                                 alt="reaction-wow">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/angry.png')}}"
                                                 alt="reaction-angry">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/sad.png')}}"
                                                 alt="reaction-sad">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">15 min ago</p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">Report Post</p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT -->
                    <div class="post-comment unread reply-2">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="#">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="{{asset('img/avatar/03.jpg')}}"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- USER AVATAR PROGRESS -->
                            <div class="user-avatar-progress">
                                <!-- HEXAGON -->
                                <div class="hexagon-progress-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS -->

                            <!-- USER AVATAR PROGRESS BORDER -->
                            <div class="user-avatar-progress-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-border-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS BORDER -->

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">16</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author" href="#">Nick
                                Grissom</a>I wouldn't miss it for anything!! Love both streams!</p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list small">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                 src="{{asset('img/reaction/like.png')}}" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                                                     src="{{asset('img/reaction/like.png')}}"
                                                                                     alt="reaction-like"> <span
                                                        class="bold">Like</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Neko Bebop</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">1</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/like.png')}}"
                                                 alt="reaction-like">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/love.png')}}"
                                                 alt="reaction-love">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                 src="{{asset('img/reaction/dislike.png')}}"
                                                 alt="reaction-dislike">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/happy.png')}}"
                                                 alt="reaction-happy">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/funny.png')}}"
                                                 alt="reaction-funny">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/wow.png')}}"
                                                 alt="reaction-wow">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/angry.png')}}"
                                                 alt="reaction-angry">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/sad.png')}}"
                                                 alt="reaction-sad">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">2 min ago</p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">Report Post</p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT -->
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="#">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="{{asset('img/avatar/02.jpg')}}"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- USER AVATAR PROGRESS -->
                            <div class="user-avatar-progress">
                                <!-- HEXAGON -->
                                <div class="hexagon-progress-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS -->

                            <!-- USER AVATAR PROGRESS BORDER -->
                            <div class="user-avatar-progress-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-border-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS BORDER -->

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">19</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author" href="#">Destroy
                                Dex</a>YEAHHH!! <a href="#">@MarinaValentine</a> I really enjoyed
                            your last stream and it also was really funny! Can't wait!</p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/like.png')}}"
                                                 alt="reaction-like">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/love.png')}}"
                                                 alt="reaction-love">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                 src="{{asset('img/reaction/dislike.png')}}"
                                                 alt="reaction-dislike">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/happy.png')}}"
                                                 alt="reaction-happy">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/funny.png')}}"
                                                 alt="reaction-funny">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/wow.png')}}"
                                                 alt="reaction-wow">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/angry.png')}}"
                                                 alt="reaction-angry">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/sad.png')}}"
                                                 alt="reaction-sad">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">27 min ago</p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">Report Post</p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT -->
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="#">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="{{asset('img/avatar/07.jpg')}}"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- USER AVATAR PROGRESS -->
                            <div class="user-avatar-progress">
                                <!-- HEXAGON -->
                                <div class="hexagon-progress-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS -->

                            <!-- USER AVATAR PROGRESS BORDER -->
                            <div class="user-avatar-progress-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-border-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS BORDER -->

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">26</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author" href="#">Sarah
                                Diamond</a>That sounds awesome Marina! And also thanks a lot for the art sneak peek! I
                            went to the GameCon last week and had a great time playing the game's open demo.</p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/like.png')}}"
                                                 alt="reaction-like">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/love.png')}}"
                                                 alt="reaction-love">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image"
                                                 src="{{asset('img/reaction/dislike.png')}}"
                                                 alt="reaction-dislike">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/happy.png')}}"
                                                 alt="reaction-happy">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/funny.png')}}"
                                                 alt="reaction-funny">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/wow.png')}}"
                                                 alt="reaction-wow">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/angry.png')}}"
                                                 alt="reaction-angry">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="{{asset('img/reaction/sad.png')}}"
                                                 alt="reaction-sad">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">39 min ago</p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">Report Post</p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT HEADING -->
                    <p class="post-comment-heading">Load More Comments <span class="highlighted">9+</span></p>
                    <!-- /POST COMMENT HEADING -->
                </div>
                <!-- /POST COMMENT LIST -->
            </div>
            <!-- /WIDGET BOX SCROLLABLE -->

            <!-- POST COMMENT FORM -->
            <div class="post-comment-form bordered-top">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32"
                             data-src="{{asset('storage/images/users/'.auth()->user()->image)}}"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->

                    <!-- USER AVATAR PROGRESS -->
                    <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS -->

                    <!-- USER AVATAR PROGRESS BORDER -->
                    <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS BORDER -->

                    <!-- USER AVATAR BADGE -->
                    <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-22-24"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->

                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-dark-16-18"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->

                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">24</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                </div>
                <!-- /USER AVATAR -->

                <!-- FORM -->
                <form class="form">
                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="popup-post-reply">Your Reply</label>
                                <input type="text" id="popup-post-reply" name="popup_post_reply">
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->
                </form>
                <!-- /FORM -->
            </div>
            <!-- /POST COMMENT FORM -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- POPUP PICTURE IMAGE WRAP -->
        <div class="popup-picture-image-wrap">
            <!-- POPUP PICTURE IMAGE -->
            <figure class="popup-picture-image">
                <img src="{{asset('img/cover/04.jpg')}}" alt="cover-04">
            </figure>
            <!-- /POPUP PICTURE IMAGE -->
        </div>
        <!-- /POPUP PICTURE IMAGE WRAP -->
    </div>
    <!-- /POPUP PICTURE -->

@endsection
