<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/messagerie.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
            <div class="sticky">
                <img src="../images/twitterA.png" alt="">
                <a href="home.php" style="text-decoration: none;"><li>HOME</li></a>
                <a href="../view/profil.php" style="text-decoration: none;"><li>PROFIL</li></a>
                <a href="../view/messagerie.php" style="text-decoration: none;"><li>MESSAGERIE</li></a>
                <a href="../view/index.php" style="text-decoration: none;"><li div="disco">DECONNECTION</li></a>

            </div>
        </nav>
<div class="container">
<div class="content-wrapper">
    <div class="email-app card-margin">
        <div class="email-toolbars-wrapper">
            <div class="toolbar-header">
                <button type="button" class="btn btn-lg btn-block btn-compose-mail">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Nouveau message
                </button>
            </div>
            <div class="toolbar-body">
                <ul class="toolbar-menu">
                    <li class="active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <a href="#">Boîte de réception</a>
                        <span class="badge badge-sb-base">8</span>
                    </li>
                    
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                        <a href="#">Envoyé(s)</a>
                    </li>
                   
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                        <a href="#">Corbeille</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        <a href="#">Favoris</a>
                    </li>
                </ul>
                <div class="contact-header">
                    <div class="contact-left">
                        <h5 class="title">Contacts</h5>
                        <span class="badge badge-sb-success">10</span>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-flash-primary" type="button" id="product-action-pane" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-more-vertical toolbar-icon"
                            >
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"><span class="dropdown-title">Action Pane</span></li>
                            <li class="dropdown-item">
                                <a class="dropdown-link" href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-printer"
                                    >
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                    Print
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a class="dropdown-link" href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-delete"
                                    >
                                        <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                        <line x1="18" y1="9" x2="12" y2="15"></line>
                                        <line x1="12" y1="9" x2="18" y2="15"></line>
                                    </svg>
                                    Remove
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a class="dropdown-link" href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-send"
                                    >
                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                    </svg>
                                    Send Email
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a class="dropdown-link" href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-file-text"
                                    >
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                    Export as PDF
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a class="dropdown-link" href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-bookmark"
                                    >
                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    Save as Bookmark
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="contact-list">
                    <li class="contact-list-item">
                        <a href="#">
                            <span class="pro-pic">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Picture" />
                                <i class="active">&nbsp;</i>
                            </span>
                            <div class="user">
                                <p class="user-name">Poul Smith</p>
                                <p class="user-designation">Founder @ Maxx</p>
                            </div>
                        </a>
                    </li>
                    <li class="contact-list-item">
                        <a href="#">
                            <span class="pro-pic">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Support User" title="Support User" />
                                <i class="active">&nbsp;</i>
                            </span>
                            <div class="user">
                                <p class="user-name">John Wick</p>
                                <p class="user-designation">CTO @ Lax</p>
                            </div>
                        </a>
                    </li>
                    <li class="contact-list-item">
                        <a href="#">
                            <span class="pro-pic">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Support User" title="Support User" />
                                <i class="busy">&nbsp;</i>
                            </span>
                            <div class="user">
                                <p class="user-name">Susan Don</p>
                                <p class="user-designation">CEO @ Don Co.</p>
                            </div>
                        </a>
                    </li>
                    <li class="contact-list-item">
                        <a href="#">
                            <span class="pro-pic">
                                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="profile pic" title="profile pic" />
                                <i class="busy">&nbsp;</i>
                            </span>
                            <div class="user">
                                <p class="user-name">Sam Doe</p>
                                <p class="user-designation">Tech Lead @ Poll</p>
                            </div>
                        </a>
                    </li>
                    <li class="contact-list-item">
                        <a href="#">
                            <span class="pro-pic">
                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Support User" title="Support User" />
                                <i class="inactive">&nbsp;</i>
                            </span>
                            <div class="user">
                                <p class="user-name">John Smith</p>
                                <p class="user-designation">Founder @ Dove</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="email-list-wrapper">
            <div class="email-list-header">
                <div class="dropdown">
                    <button class="btn btn-sm btn-flash-border-base shadow-none dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Recent
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li class="dropdown-item"><a class="dropdown-link" href="#">Focused</a></li>
                        <li class="dropdown-item"><a class="dropdown-link" href="#">Others</a></li>
                    </ul>
                </div>
            </div>
            <div id="email-app-body" class="email-list-scroll-container ps ps--active-y">
                <ul class="email-list">
                    <li class="email-list-item">
                        <div class="recipient">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Profile Picture" />
                            <a href="#" class="recipient-name">Pepper Potts</a>
                        </div>
                        <a href="#" class="email-subject">Food App IOS &amp; Android - Need confirmation to start project execution<i class="unread">&nbsp;</i></a>
                        <div class="email-footer">
                            <div class="email-action">
                                <a href="#" class="important">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-bookmark fill"
                                    >
                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                </a>
                                <a href="#" class="starred">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-star"
                                    >
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </a>
                                <a href="#" class="attachment">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-paperclip"
                                    >
                                        <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                                    </svg>
                                </a>
                            </div>
                            <span class="email-time">11:50 AM</span>
                        </div>
                    </li>
                    <li class="email-list-item active">
                        <div class="recipient">
                            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Profile Picture" />
                            <a href="#" class="recipient-name">Poul Smith</a>
                        </div>
                        <a href="#" class="email-subject">Prepare Mockup as per the spec document and Submit by Monday!!!<i class="unread">&nbsp;</i></a>
                        <div class="email-footer">
                            <div class="email-action">
                                <a href="#" class="important">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-bookmark"
                                    >
                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                </a>
                                <a href="#" class="starred">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-star fill"
                                    >
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </a>
                                <a href="#" class="attachment">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-paperclip"
                                    >
                                        <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                                    </svg>
                                </a>
                            </div>
                            <span class="email-time">11:50 AM</span>
                        </div>
                    </li>
                    <li class="email-list-item">
                        <div class="recipient">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Picture" />
                            <a href="#" class="recipient-name">Edwin Jarvis</a>
                        </div>
                        <a href="#" class="email-subject">FixBazzar - Assign developer to develop project <i class="unread">&nbsp;</i></a>
                        <div class="email-footer">
                            <div class="email-action">
                                <a href="#" class="important">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-bookmark fill"
                                    >
                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                </a>
                                <a href="#" class="starred">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-star"
                                    >
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </a>
                                <a href="#" class="attachment">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-paperclip"
                                    >
                                        <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                                    </svg>
                                </a>
                            </div>
                            <span class="email-time">11:50 AM</span>
                        </div>
                    </li>
                    <li class="email-list-item">
                        <div class="recipient">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Profile Picture" />
                            <a href="#" class="recipient-name">Edwin Jarvis</a>
                        </div>
                        <a href="#" class="email-subject">Maxximo App - Request approved to deploy on server<i class="starred">&nbsp;</i></a>
                        <div class="email-footer">
                            <div class="email-action">
                                <a href="#" class="important">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-bookmark"
                                    >
                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                </a>
                                <a href="#" class="starred">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-star fill"
                                    >
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </a>
                                <a href="#" class="attachment">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-paperclip"
                                    >
                                        <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                                    </svg>
                                </a>
                            </div>
                            <span class="email-time">11:50 AM</span>
                        </div>
                    </li>
                    <li class="email-list-item">
                        <div class="recipient">
                            <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Profile Picture" />
                            <a href="#" class="recipient-name">Jim Ward</a>
                        </div>
                        <a href="#" class="email-subject">Invitation to join tech team meeting<i class="starred">&nbsp;</i></a>
                        <div class="email-footer">
                            <div class="email-action">
                                <a href="#" class="important">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-bookmark fill"
                                    >
                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                </a>
                                <a href="#" class="starred">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-star fill"
                                    >
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </a>
                                <a href="#" class="attachment">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-paperclip"
                                    >
                                        <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                                    </svg>
                                </a>
                            </div>
                            <span class="email-time">11:50 AM</span>
                        </div>
                    </li>
                    <li class="email-list-item">
                        <div class="recipient">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Profile Picture" />
                            <a href="#" class="recipient-name">Jane Doe</a>
                        </div>
                        <a href="#" class="email-subject">DexLoop - Progress report<i class="starred">&nbsp;</i></a>
                        <div class="email-footer">
                            <div class="email-action">
                                <a href="#" class="important">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-bookmark fill"
                                    >
                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                </a>
                                <a href="#" class="starred">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-star"
                                    >
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </a>
                                <a href="#" class="attachment">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-paperclip"
                                    >
                                        <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                                    </svg>
                                </a>
                            </div>
                            <span class="email-time">11:50 AM</span>
                        </div>
                    </li>
                </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
                <div class="ps__rail-y" style="top: 0px; height: 911px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 772px;"></div></div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>