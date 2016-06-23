<!DOCTYPE html>
<html>
<head>
    <?php include_once("head.php");?>
</head>
<body class="open view">
<div class="load">
    <img src="images/default.gif" width="40" alt="">
</div>
<header class="cf header">
    <div class="top-menu">
        <div class="hamburger-box">
              <span class="hamburger">
              </span>
        </div>
        <span class="info-text">Sessions</span>
    </div>
    <div class="description-top">
        <nav class="date">
            <ul class="cf">
                <li><a href="#">MON 09</a></li>
                <li><a href="#">TUE 10</a></li>
                <li class="active"><a href="#">WED 11</a></li>
                <li><a href="#">THU 12</a></li>
                <li><a href="#">FRI 13</a></li>
            </ul>

        </nav>
    </div>
    <div class="filter">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="24px" height="24.189px" viewBox="1.622 0.611 24 24.189" enable-background="new 1.622 0.611 24 24.189"
             xml:space="preserve">
            <path class="full-filter" d="M22.622,2.251L22.622,2.251L22.622,2.251v2h-0.08l-5.92,5.92v12.99l-6-6v-7l-5.91-5.91h-0.09v-2 M4.622,2.251"/>
            <path d="M4.622,2.251h18l0,0l0,0v2h-0.08l-5.92,5.92v12.99l-6-6v-7l-5.91-5.91h-0.09V2.251 M12.622,16.331l2,2v-9.08h0.09l5-5H7.541
            l5,5h0.08L12.622,16.331L12.622,16.331z"/>
        </svg>

    </div>
</header>
<div id="page">
    <div class="inner cf">
        <?php include_once("left-sidebar.php");?>
        <section class="info">
            <ul class="events-info">
                <li>
                    <div class="events-info_box">
                        <div class="box-item">
                            <a class="cf favorite-yes" href="#">
                                <div class="wrap-time">
                                    <div class="time">8:00 AM</div>
                                    <div class="time-to">to 09:00 AM</div>
                                    <div class="base-icon">
                                        <svg class="registration-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <path d="M4.333,12.93v3.404h3.402L17.771,6.297l-3.403-3.402L4.333,12.93z M20.401,3.667c0.354-0.354,0.354-0.926,0-1.28
                                        l-2.122-2.123c-0.354-0.354-0.928-0.354-1.281,0l-1.658,1.66l3.4,3.403L20.401,3.667z"/>
                                            <path d="M0.001,23.999h23.998v-2.666H0.001V23.999z"/>
                                    </svg>
                                    </div>
                                </div>
                                <div class="info-event">
                                    <div class="favorite">
                                        <svg class="icon-favorite" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                <path fill="none" stroke="#000000" stroke-miterlimit="10" d="M12,17.27L18.179,21l-1.639-7.029L22,9.24L14.81,8.63L12,2L9.19,8.63
                                    L2,9.24l5.46,4.731L5.819,21L12,17.27z"/>
                                </svg>
                                        <div class="title">Registration</div>
                                        <div class="place">
                                            Lobby - Hall G
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="events-info_box">
                        <div class="box-item">
                            <a class="cf" href="#">
                                <div class="wrap-time">
                                    <div class="time">8:00 AM</div>
                                    <div class="time-to">to 09:00 AM</div>
                                </div>
                                <div class="info-event">
                                    <div class="favorite">
                                        <svg class="icon-favorite" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                <path fill="none" stroke="#000000" stroke-miterlimit="10" d="M12,17.27L18.179,21l-1.639-7.029L22,9.24L14.81,8.63L12,2L9.19,8.63
                                    L2,9.24l5.46,4.731L5.819,21L12,17.27z"/>
                                </svg>
                                        <div class="title">Keynote: Sara Wachter-Boettcher</div>
                                        <div class="place">
                                            Hall G
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-item">
                            <a class="cf router-link-active" href="#">
                                <div class="info-event">
                                    <div class="favorite">
                                        <svg class="icon-favorite" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <path fill="none" stroke="#000000" stroke-miterlimit="10" d="M12,17.27L18.179,21l-1.639-7.029L22,9.24L14.81,8.63L12,2L9.19,8.63
                                        L2,9.24l5.46,4.731L5.819,21L12,17.27z"/>
                                    </svg>

                                        <div class="title">Drupal 8 Kickstart</div>
                                        <div class="type-session">Coding and Development</div>
                                        <div class="level">Experience level: Intermediate</div>
                                        <span class="level-icon level-icon2">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                                <rect class="level-rect1" x="2" y="12.444" width="2.667" height="4.889"></rect>
                                                <rect class="level-rect3" x="15.333" y="2.667" width="2.667" height="14.667"></rect>
                                                <rect class="level-rect2" x="8.667" y="7.555" width="2.666" height="9.778"></rect>
                                            </svg>
                                        </span>
                                        <div class="speaker">
                                            Peter Sawczynec
                                        </div>
                                        <div class="place">
                                            260-261 (Pantheon)
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-item">
                            <a class="cf" href="#">
                                <div class="info-event">
                                    <div class="favorite">
                                        <svg class="icon-favorite" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                <path fill="none" stroke="#000000" stroke-miterlimit="10" d="M12,17.27L18.179,21l-1.639-7.029L22,9.24L14.81,8.63L12,2L9.19,8.63
                                    L2,9.24l5.46,4.731L5.819,21L12,17.27z"/>
                                </svg>
                                        <div class="title">Coffee Break sponsored by Third and Grove</div>
                                        <div class="place">
                                            Exhibit Hall
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="events-info_box">
                        <div class="box-item">
                            <a class="cf favorite-yes" href="#">
                                <div class="wrap-time">
                                    <div class="time">8:00 AM</div>
                                    <div class="time-to">to 09:00 AM</div>
                                    <div class="base-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <path d="M21.6,0H2.4v12c0,2.651,2.148,4.8,4.8,4.8h7.2c2.651,0,4.8-2.148,4.8-4.8V8.4H21.6C22.932,8.4,24,7.332,24,6V2.4
                                        C24,1.068,22.932,0,21.6,0z M21.6,6H19.2V2.4H21.6V6z M0,23.999h21.6V21.6H0V23.999z"/>
                                    </svg>
                                    </div>
                                </div>
                                <div class="info-event">
                                    <div class="favorite">
                                        <svg class="icon-favorite" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                <path fill="none" stroke="#000000" stroke-miterlimit="10" d="M12,17.27L18.179,21l-1.639-7.029L22,9.24L14.81,8.63L12,2L9.19,8.63
                                    L2,9.24l5.46,4.731L5.819,21L12,17.27z"/>
                                </svg>
                                        <div class="title">Coffee Break sponsored by Third and Grove</div>
                                        <div class="place">
                                            Exhibit Hall
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="events-info_box">
                        <div class="box-item">
                            <a class="cf favorite-yes" href="#">
                                <div class="wrap-time">
                                    <div class="time">8:00 AM</div>
                                    <div class="time-to">to 09:00 AM</div>
                                    <div class="base-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="23.999px" height="22.791px" viewBox="0.301 0.816 23.999 22.791" enable-background="new 0.301 0.816 23.999 22.791"
                                             xml:space="preserve">
                                        <path d="M7.028,13.627l3.552-3.551L1.769,1.277c-1.958,1.958-1.958,5.134,0,7.104L7.028,13.627z M15.538,11.356
                                            c1.921,0.891,4.62,0.263,6.614-1.732c2.397-2.398,2.861-5.837,1.018-7.682c-1.833-1.833-5.271-1.38-7.682,1.017
                                            c-1.996,1.997-2.625,4.695-1.732,6.615l-12.25,12.25l1.77,1.77l8.648-8.622l8.635,8.636l1.771-1.771l-8.637-8.635L15.538,11.356z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="info-event">
                                    <div class="favorite">
                                        <svg class="icon-favorite" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                <path fill="none" stroke="#000000" stroke-miterlimit="10" d="M12,17.27L18.179,21l-1.639-7.029L22,9.24L14.81,8.63L12,2L9.19,8.63
                                    L2,9.24l5.46,4.731L5.819,21L12,17.27z"/>
                                </svg>
                                        <div class="title">Coffee Break sponsored by Third and Grove</div>
                                        <div class="place">
                                            Exhibit Hall
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="events-info_box">
                        <div class="box-item">
                            <a class="cf favorite-yes" href="#">
                                <div class="wrap-time">
                                    <div class="time">8:00 AM</div>
                                    <div class="time-to">to 09:00 AM</div>
                                    <div class="base-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                        <path d="M7,2v11h3v9l7-12h-4l4-8H7z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="info-event">
                                    <div class="favorite">
                                        <svg class="icon-favorite" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                <path fill="none" stroke="#000000" stroke-miterlimit="10" d="M12,17.27L18.179,21l-1.639-7.029L22,9.24L14.81,8.63L12,2L9.19,8.63
                                    L2,9.24l5.46,4.731L5.819,21L12,17.27z"/>
                                </svg>
                                        <div class="title">Coffee Break sponsored by Third and Grove</div>
                                        <div class="place">
                                            Exhibit Hall
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-item">
                            <a class="cf" href="#">
                                <div class="wrap-speech">
                                    <div class="speech-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                        <path d="M7,2v11h3v9l7-12h-4l4-8H7z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="info-event">
                                    <div class="favorite">
                                        <svg class="icon-favorite" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                <path fill="none" stroke="#000000" stroke-miterlimit="10" d="M12,17.27L18.179,21l-1.639-7.029L22,9.24L14.81,8.63L12,2L9.19,8.63
                                    L2,9.24l5.46,4.731L5.819,21L12,17.27z"/>
                                </svg>
                                        <div class="title">Coffee Break sponsored by Third and Grove</div>
                                        <div class="place">
                                            Exhibit Hall
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-item">
                            <a class="cf" href="#">
                                <div class="wrap-speech">
                                    <div class="speech-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                        <path d="M7,2v11h3v9l7-12h-4l4-8H7z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="info-event">
                                    <div class="favorite">
                                        <svg class="icon-favorite" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <path fill="none" stroke="#000000" stroke-miterlimit="10" d="M12,17.27L18.179,21l-1.639-7.029L22,9.24L14.81,8.63L12,2L9.19,8.63
                                        L2,9.24l5.46,4.731L5.819,21L12,17.27z"></path>
                                    </svg>

                                        <div class="title">Drupal 8 Kickstart</div>
                                        <div class="type-session">Coding and Development</div>
                                        <div class="level">Experience level: Intermediate</div>
                                        <span class="level-icon level-icon2">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                                <rect class="level-rect1" x="2" y="12.444" width="2.667" height="4.889"></rect>
                                                <rect class="level-rect3" x="15.333" y="2.667" width="2.667" height="14.667"></rect>
                                                <rect class="level-rect2" x="8.667" y="7.555" width="2.666" height="9.778"></rect>
                                            </svg>
                                        </span>
                                        <div class="speaker">
                                            Peter Sawczynec
                                        </div>
                                        <div class="place">
                                            260-261 (Pantheon)
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-item">
                            <a class="cf" href="#">
                                <div class="wrap-speech">
                                    <div class="speech-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                        <path d="M7,2v11h3v9l7-12h-4l4-8H7z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="info-event">
                                    <div class="favorite">
                                        <svg class="icon-favorite" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                <path fill="none" stroke="#000000" stroke-miterlimit="10" d="M12,17.27L18.179,21l-1.639-7.029L22,9.24L14.81,8.63L12,2L9.19,8.63
                                    L2,9.24l5.46,4.731L5.819,21L12,17.27z"/>
                                </svg>
                                        <div class="title">Coffee Break sponsored by Third and Grove</div>
                                        <div class="place">
                                            Exhibit Hall
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <section class="description">
            <header>
                <div class="top-menu">
                    <div class="arrow-back">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                        <path d="M20,11H7.83l5.59-5.59L12,4l-8,8l8,8l1.41-1.41L7.83,13H20V11z"/>
                        </svg>
                    </div>
                    <span class="info-text">Sessions</span>
                </div>
            </header>
           <div class="desc-info-wrap">
               <h1 class="title-desc">
                   Drupal 8 Kickstart
                   <div class="icons-view">
                       <ul class="nav-share">
                           <li>
                               <a href="#" class="share-icon">
                                   <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                            <path d="M18,16.08c-0.76,0-1.439,0.3-1.96,0.77L8.91,12.7C8.96,12.47,9,12.24,9,12s-0.04-0.47-0.09-0.7l7.05-4.11
                                C16.5,7.69,17.21,8,18,8c1.66,0,3-1.34,3-3s-1.34-3-3-3s-3,1.34-3,3c0,0.24,0.04,0.47,0.09,0.7L8.04,9.81C7.5,9.31,6.79,9,6,9
                                c-1.66,0-3,1.34-3,3s1.34,3,3,3c0.79,0,1.5-0.311,2.04-0.811l7.12,4.16c-0.051,0.211-0.08,0.43-0.08,0.65
                                c0,1.609,1.311,2.92,2.92,2.92s2.92-1.311,2.92-2.92S19.609,16.08,18,16.08z"/>
                            </svg>
                               </a>
                               <ul class="nav-sub">
                                   <li>
                                       <a href="#">
                                           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                            <g>
                                                <path d="M11.877,9.061c-0.007-0.068-0.033-0.091-0.105-0.091c-1.538,0.002-3.075,0.002-4.613,0c-0.073,0-0.095,0.02-0.094,0.093
                                                    c0.003,0.618,0.002,1.236,0.003,1.855c0,0.106,0,0.106,0.104,0.106c0.84,0,1.68,0,2.52,0c0.032,0,0.063,0,0.095,0
                                                    c0,0.015,0.002,0.023,0,0.031c-0.126,0.604-0.434,1.097-0.938,1.453c-0.643,0.457-1.373,0.582-2.139,0.491
                                                    c-0.795-0.094-1.438-0.482-1.932-1.107c-0.544-0.69-0.759-1.48-0.627-2.352c0.125-0.83,0.534-1.499,1.208-1.998
                                                    c0.66-0.489,1.403-0.667,2.211-0.539c0.522,0.082,0.987,0.3,1.379,0.66c0.055,0.05,0.086,0.051,0.14-0.004
                                                    c0.427-0.432,0.857-0.861,1.288-1.29c0.039-0.039,0.082-0.074,0.132-0.118c-0.055-0.046-0.098-0.08-0.138-0.116
                                                    C10.013,5.811,9.61,5.559,9.175,5.354C8.606,5.087,8.006,4.956,7.383,4.921C7.155,4.907,6.924,4.915,6.696,4.936
                                                    C6.417,4.962,6.133,4.99,5.863,5.06C4.583,5.388,3.572,6.1,2.837,7.202C2.332,7.959,2.063,8.794,2.008,9.698
                                                    c-0.02,0.329-0.001,0.657,0.041,0.986c0.074,0.583,0.25,1.131,0.519,1.65c0.366,0.704,0.871,1.293,1.513,1.763
                                                    c0.824,0.604,1.747,0.926,2.762,0.981c0.614,0.032,1.22-0.042,1.812-0.217c1.008-0.298,1.826-0.864,2.428-1.729
                                                    c0.597-0.855,0.854-1.819,0.882-2.853c0.005-0.176,0-0.353-0.015-0.529C11.932,9.52,11.899,9.291,11.877,9.061z"/>
                                                <path d="M17.928,9.097h-1.7v-1.7c0-0.04-0.033-0.072-0.072-0.072h-1.149c-0.041,0-0.074,0.032-0.074,0.072v1.7h-1.698
                                                    c-0.04,0-0.072,0.032-0.072,0.073v1.149c0,0.041,0.032,0.073,0.072,0.073h1.698v1.699c0,0.039,0.033,0.072,0.074,0.072h1.149
                                                    c0.039,0,0.072-0.033,0.072-0.072v-1.699h1.7c0.039,0,0.072-0.033,0.072-0.073V9.17C18,9.129,17.967,9.097,17.928,9.097z"/>
                                            </g>
                                            </svg>
                                           Google+
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                            <path d="M13.438,9.989h-2.251V18H7.88V9.989H6.258V7.211H7.88V5.548c0-1.704,0.589-2.799,1.745-3.264
                                                C10.192,2.06,10.679,2,11.186,2h2.515v2.757H12.2c-0.446,0-0.73,0.123-0.872,0.365c-0.102,0.162-0.142,0.445-0.142,0.831v1.258
                                                h2.555L13.438,9.989z"/>
                                            </svg>
                                            Facebook
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="20px" height="20px" viewBox="2 2 20 20" enable-background="new 2 2 20 20" xml:space="preserve">
                                            <path d="M19.639,7.32c-0.589,0.261-1.221,0.438-1.886,0.517c0.678-0.407,1.198-1.05,1.444-1.816
                                                c-0.635,0.375-1.339,0.649-2.085,0.797c-0.599-0.64-1.45-1.037-2.396-1.037c-1.814,0-3.282,1.47-3.282,3.282
                                                c0,0.257,0.029,0.507,0.086,0.748C8.792,9.673,6.373,8.366,4.752,6.379C4.47,6.866,4.309,7.429,4.309,8.032
                                                c0,1.138,0.578,2.142,1.46,2.733c-0.538-0.018-1.044-0.166-1.487-0.412c0,0.014,0,0.028,0,0.041c0,1.593,1.131,2.917,2.632,3.219
                                                c-0.274,0.076-0.565,0.116-0.864,0.116c-0.212,0-0.418-0.021-0.619-0.059c0.419,1.304,1.631,2.251,3.067,2.28
                                                c-1.123,0.881-2.539,1.403-4.078,1.403c-0.266,0-0.527-0.015-0.783-0.046c1.452,0.932,3.178,1.475,5.031,1.475
                                                c6.038,0,9.341-5.003,9.341-9.339c0-0.143-0.005-0.285-0.011-0.424C18.644,8.556,19.2,7.978,19.639,7.32"/>
                                            </svg>
                                           Twitter
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                            <path d="M18,14.86c0,0.786-0.643,1.43-1.429,1.43H3.429C2.643,16.29,2,15.646,2,14.86V7.766C2.268,8.061,2.571,8.32,2.902,8.543
                                                c1.482,1.01,2.982,2.019,4.438,3.083c0.75,0.554,1.679,1.233,2.652,1.233H10h0.009c0.973,0,1.902-0.68,2.652-1.233
                                                c1.454-1.054,2.955-2.073,4.446-3.083C17.428,8.32,17.732,8.061,18,7.766V14.86z"/>
                                                                                           <path d="M16.474,7.587c-1.394,0.965-2.795,1.93-4.179,2.904c-0.581,0.402-1.563,1.225-2.286,1.225H10H9.991
                                                c-0.723,0-1.706-0.822-2.286-1.225C6.321,9.517,4.919,8.553,3.536,7.587C2.902,7.158,2,6.149,2,5.336C2,4.46,2.473,3.71,3.429,3.71
                                                h13.143C17.349,3.71,18,4.353,18,5.14C18,6.14,17.259,7.042,16.474,7.587z"/>
                                            </svg>
                                           Email
                                       </a>
                                   </li>
                               </ul>
                           </li>
                       </ul>

                       <a href="#" class="icon-favorite favorite-yes">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                        <path fill="none" stroke="#000000" stroke-miterlimit="10" d="M12,17.27L18.179,21l-1.639-7.029L22,9.24L14.81,8.63L12,2L9.19,8.63
                        L2,9.24l5.46,4.731L5.819,21L12,17.27z"></path>
                       </svg>
                       </a>
                   </div>
               </h1>
               <div class="desc-info">
                   Wed, 10:45 AM - 11:45 AM in 260-261 (Pantheon)
               </div>
               <div class="desc-type-session">
                   <p>Coding and Development</p>
               </div>
               <div class="desk-level">
                   <p>
                       Experience level: Intermediate
                      <span class="level-icon level-icon2">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                        <rect class="level-rect1" x="2" y="12.444" width="2.667" height="4.889"/>
                        <rect class="level-rect3" x="15.333" y="2.667" width="2.667" height="14.667"/>
                        <rect class="level-rect2" x="8.667" y="7.555" width="2.666" height="9.778"/>
                    </svg>
                </span>
                   </p>
               </div>
           </div>
            <div class="desc-speaker-wrap cf">
                <a href="#">
                    <div class="desc-photo-speaker">
                        <img src="images/photo1.png">
                    </div>
                    <div class="desc-info-speaker">
                        <div class="desc-name-speaker">
                            <p>Peter Sawczynec</p>
                        </div>
                        <div class="desc-work-speaker">
                            Pantheon / Customer Success Engineer
                        </div>
                    </div>
                </a>
            </div>
            <p>
                Lorem ipsum dolor sit amet, vulputate volutpat leo in vehicula vitae aenean. Leo pede molestie a. Vitae optio litora aut, quisque id, vel proin u
                rna corrupti, eu rhoncus et massa in. Quam enim, mi dui ac cras habitasse sem volutpat, a ut, lobortis mattis nam quam aliquam quam. Aliquam hendrerit suspendisse
                <a href="#">Quam enim, mi dui ac cras habitasse sem volut</a>
            </p>
        </section>
        <?php include_once("filter.php");?>
    </div>
</div>
<div class="over"></div>
</body>
</html>



