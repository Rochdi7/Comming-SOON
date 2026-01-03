<?php $page = 'user-messages'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
        User Message
        @endslot
      
        @slot('li_1')
        User Message
    @endslot
    @endcomponent

    @component('components.usermenu')
    @endcomponent

<!-- Page Content -->
<div class="content content-chat top-space-chat">
    <div class="container">
        <!-- Content Header -->
        <div class="content-header">
            <h4>Messages</h4>
        </div>
        <!-- /Content Header -->	
        <div class="row chat-window">
            <div class="col-xl-12">
                <div class="chat-window">
                
                    <!-- Chat Left -->
                    <div class="chat-cont-left">
                        <div class="chat-header">
                            <span>Chats</span>
                            <a href="javascript:void(0)" class="chat-compose">
                                <i class="feather-plus-circle"></i>
                            </a>
                        </div>
                        <form class="chat-search">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="fas fa-search"></i>
                                </div>
                                <input type="text" class="form-control rounded-pill" placeholder="Search">
                            </div>
                        </form>
                        <div class="chat-users-list">
                            <div class="chat-scroll">
                                <a href="javascript:void(0);" class="notify-block d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-away">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-08.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Mark Villiams</div>
                                            <div class="user-last-chat">Have you called them?</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">2 min</div>
                                            <div class="badge badge-success rounded-pill">15</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat active d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-online">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-09.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Elizabeth Sosa</div>
                                            <div class="user-last-chat">I'll call you later </div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">8:01 PM</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-away">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-10.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Michael Howard</div>
                                            <div class="user-last-chat">Thank you</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">7:30 PM</div>
                                            <div class="badge badge-success rounded-pill">3</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-online">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-11.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Horace Keene</div>
                                            <div class="user-last-chat">Have you called them?</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">5 Mins Ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-offline">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-12.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Marvin Campbell</div>
                                            <div class="user-last-chat">Yesterday i completed the task</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">11:21 AM</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-online">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-13.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">James Albert</div>
                                            <div class="user-last-chat">What is the major functionality?</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">10:05 AM</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-away">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-14.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Richard Ohare</div>
                                            <div class="user-last-chat">This has allowed me to showcase not only my technical skills</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">Yesterday</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-offline">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-15.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Paul Richard</div>
                                            <div class="user-last-chat">Let's talk briefly in the evening. </div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">Sunday</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-online">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-07.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">John Gibbs </div>
                                            <div class="user-last-chat">Do you have any collections? If so, what of?</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">Saturday</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="notify-block read-chat d-flex open-chat">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-away">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body chat-custom flex-grow-1">
                                        <div>
                                            <div class="user-name">Judy Mercer</div>
                                            <div class="user-last-chat">Connect the two modules with in 1 day.</div>
                                        </div>
                                        <div>
                                            <div class="last-chat-time block">Friday</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Chat Left -->
                
                    <!-- Chat Right -->
                    <div class="chat-cont-right">
                        <div class="chat-header">
                            <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                                <i class="feather-chevron-left"></i>
                            </a>
                            <div class="notify-block d-flex">
                                <div class="media-img-wrap flex-shrink-0">
                                    <div class="avatar avatar-online">
                                        <img src="{{ URL::asset('/build/img/profiles/avatar-08.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body flex-grow-1">
                                    <div class="user-name">Mark Villiams</div>
                                    <div class="user-status">online</div>
                                </div>
                            </div>
                            <div class="chat-options">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#voice_call">
                                    <i class="feather-phone"></i>
                                </a>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#video_call">
                                    <i class="feather-video"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="feather-more-vertical"></i>
                                </a>
                            </div>
                        </div>
                        <div class="chat-body">
                            <div class="chat-scroll">
                                <ul class="list-unstyled">
                                    <li class="notify-block sent d-flex">
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <p>Hello. What can I do for you?</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:30 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notify-block received d-flex">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-08.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <p>I'm just looking around.</p>
                                                    <p>Will you tell me something about yourself?</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:35 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="msg-box">
                                                <div>
                                                    <p>Are you there? That time!</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:40 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="msg-box">
                                                <div>
                                                    <div class="chat-msg-attachments">
                                                        <div class="chat-attachment">
                                                            <img src="{{ URL::asset('/build/img/chat-img-01.jpg')}}" alt="Attachment">
                                                            <a href="#" class="chat-attach-download">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                        </div>
                                                        <div class="chat-attachment">
                                                            <img src="{{ URL::asset('/build/img/chat-img-02.jpg')}}" alt="Attachment">
                                                            <a href="#" class="chat-attach-download">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:41 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notify-block sent d-flex">
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <p>Where?</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:42 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="msg-box">
                                                <div>
                                                    <p>OK, my name is Limingqiang. I like singing, playing basketballand so on.</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:42 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="msg-box">
                                                <div>
                                                    <div class="chat-msg-attachments">
                                                        <div class="chat-attachment">
                                                            <img src="{{ URL::asset('/build/img/chat-img-03.jpg')}}" alt="Attachment">
                                                            <a href="#" class="chat-attach-download">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:50 AM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notify-block received d-flex">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-08.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <p>You wait for notice.</p>
                                                    <p>Consectetuorem ipsum dolor sit?</p>
                                                    <p>Ok?</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>8:55 PM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="chat-date">Today</li>
                                    <li class="notify-block received d-flex">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-08.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>10:17 AM</span>
                                                            </div>
                                                        </li>
                                                        <li><a href="#">Edit</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notify-block sent d-flex">
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <p>Lorem ipsum dollar sit</p>
                                                    <div class="chat-msg-actions dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-elipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-msg-info">
                                                        <li>
                                                            <div class="chat-time">
                                                                <span>10:19 AM</span>
                                                            </div>
                                                        </li>
                                                        <li><a href="#">Edit</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notify-block received d-flex">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-08.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div>
                                                    <div class="msg-typing">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="chat-footer">
                            <div class="input-group">
                                <div class="btn-file btn">
                                    <i class="fa fa-paperclip"></i>
                                    <input type="file">
                                </div>
                                <input type="text" class="input-msg-send form-control rounded-pill" placeholder="Type something">
                                <button type="button" class="btn msg-send-btn rounded-pill ms-2"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- /Chat Right -->
                    
                </div>
            </div>
        </div>
        <!-- /Row -->

    </div>

</div>		
<!-- /Page Content -->
@component('components.modalpopup')
@endcomponent
    @component('components.scrolltotop')
    @endcomponent
@endsection