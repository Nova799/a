<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <!-- font awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/animate.css">
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/summernote/summernote.css">
    <!-- Range Slider CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/themesaller-forms.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/notika-custom-icon.css">
    <!-- bootstrap select CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/datapicker/datepicker3.css">
    <!-- Color Picker CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/color-picker/farbtastic.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/chosen/chosen.css">
    <!-- notification CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/notification/notification.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/dropzone/dropzone.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/wave/waves.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/main.css">
    <!-- style CSS
        ============================================ -->
    <style>
        /*-----------------------------------------------------------------------------------

    Template Name: Notika - Notika Admin Template 
    Template URI: 
    Description: Notika Admin Template is a responsive admin template based on the famous Bootstrap framework it's easy to edit and customize by documentation.
    Author: lucidtemplate
    Author URI: 
    Version: 1.0

-----------------------------------------------------------------------------------
    
    CSS INDEX
    ===================
    
    1. Theme Default CSS (body, link color, section etc)
    2. Header Top 
    3. Main Menu
    4. status
    5. statistics 
    6. Email statistics
    7. Recent Post
    8. Blog 
    9. Recent Items
    10. Realtime 
    11. Footer 
    12. Todo 
    13. Chat 
    14. Widget 
    15. Widget contact 
    16. Widget contact Form 
    17. Widget tabs 
    18. Analtic 
    19. Alert 
    20. color 
    21. tabs 
    22. Wizard 
    23. Dropdown triggering 
    24. Modals 
    25. Accordion 
    26. Tooltips 
    27. Popovers 
    28. Typography 
    29. Contact 
    30. Inbox 
    31. View Mail 
    32. Compose Mail 
    33. Normal Table 
    34. Data Table 
    35. Form Element
    36. Form Components

-----------------------------------------------------------------------------------*/

        /*----------------------------------------*/
        /*  1.  Theme default CSS
/*----------------------------------------*/
        html,
        body {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }

        body {
            background: #F6F8FA;
        }

        .floatleft {
            float: left
        }

        .floatright {
            float: right
        }

        .alignleft {
            float: left;
            margin-right: 15px;
            margin-bottom: 15px
        }

        .alignright {
            float: right;
            margin-left: 15px;
            margin-bottom: 15px
        }

        .aligncenter {
            display: block;
            margin: 0 auto 15px
        }

        a:focus {
            outline: 0px solid
        }

        img {
            max-width: 100%;
            height: auto
        }

        .fix {
            overflow: hidden
        }

        p {
            margin: 0 0 15px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0 0 10px;
            font-weight: 700;
        }

        a {
            transition: all 0.3s ease 0s;
            text-decoration: none;
        }

        a:hover {
            color: #00c292;
            text-decoration: none;
        }

        a:active,
        a:hover,
        a:focus {
            outline: 0 none;
            text-decoration: none;
        }

        ul {
            list-style: outside none none;
            margin: 0;
            padding: 0
        }

        .clear {
            clear: both
        }

        body {}

        .mg-tb-40 {
            margin: 40px 0px;
        }

        .mg-tb-30 {
            margin: 30px 0px;
        }

        .mg-t-30 {
            margin-top: 30px;
        }

        .mg-b-15 {
            margin-bottom: 15px;
        }

        .mg-t-15 {
            margin-top: 15px;
        }

        .mg-t-10 {
            margin-top: 10px;
        }

        .mg-t-20 {
            margin-top: 20px;
        }

        .nk-red {
            background: #F44336;
        }

        .nk-pink {
            background: #E91E63;
        }

        .nk-purple {
            background: #9C27B0;
        }

        .nk-deep-purple {
            background: #673AB7;
        }

        .nk-indigo {
            background: #3F51B5;
        }

        .nk-blue {
            background: #2196F3;
        }

        .nk-light-blue {
            background: #03A9F4;
        }

        .nk-cyan {
            background: #00BCD4;
        }

        .nk-teal {
            background: #009688;
        }

        .nk-green {
            background: #4CAF50;
        }

        .nk-light-green {
            background: #8BC34A;
        }

        .nk-lime {
            background: #CDDC39;
        }

        .nk-yellow {
            background: #FFEB3B;
        }

        .nk-amber {
            background: #FFC107;
        }

        .nk-orange {
            background: #FF9800;
        }

        .nk-deep-orange {
            background: #FF5722;
        }

        .nk-brown {
            background: #795548;
        }

        .nk-gray {
            background: #9E9E9E;
        }

        .nk-blue-gray {
            background: #607D8B;
        }

        .nk-black {
            background: #000000;
        }

        @font-face {
            font-family: 'notika-icon';
            src: url('fonts/notika-icon.eot?qzfrsz');
            src: url('fonts/notika-icon.eot?qzfrsz#iefix') format('embedded-opentype'),
                url('fonts/notika-icon.ttf?qzfrsz') format('truetype'),
                url('fonts/notika-icon.woff?qzfrsz') format('woff'),
                url('fonts/notika-icon.svg?qzfrsz#notika-icon') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        .sale-statistic-inner,
        .statistic-right-area,
        .email-statis-inner,
        .recent-post-wrapper,
        .blog-inner-list,
        .realtime-wrap,
        .add-todo-list,
        .notika-chat-list,
        .recent-signup-inner,
        .ongoing-task-inner,
        .contact-inner,
        .contact-form,
        .widget-tabs-int,
        .visitor-sv-tm-int,
        .search-engine-int,
        .alert-inner,
        .color-wrap,
        .wizard-wrap-int,
        .dropdown-list,
        .modals-list,
        .accordion-wn-wp,
        .tooltips-inner,
        .popovers-list,
        .typography-list,
        .typography-heading,
        .typography-inline-pro,
        .tpgp-helper,
        .contact-list,
        .inbox-left-sd,
        .inbox-text-list,
        .view-mail-list,
        .normal-table-list,
        .data-table-list,
        .form-element-list,
        .range-slider-wrap,
        .datepicker-int,
        .colorpicker-int,
        .summernote-wrap,
        .dropdone-nk,
        .form-example-wrap,
        .invoice-wrap,
        .google-map-single,
        .data-map-single,
        .image-cropper-wp,
        .nk-cd-ed-wp,
        .bar-chart-wp,
        .line-chart-wp,
        .area-chart-wp,
        .flot-chart-wp,
        .wb-traffic-inner,
        .notika-icon-int {
            padding: 20px;
            background: #fff;
        }

        /*----------------------------------------*/
        /*  2.  Header Top CSS
/*----------------------------------------*/
        .header-top-area,
        .footer-copyright-area {
            background: #00c292;
        }

        .logo-area {
            padding: 14px 0px;
        }

        .nav.navbar-nav.notika-top-nav {
            float: right;
        }

        .nav.notika-top-nav .open>a,
        .nav.notika-top-nav .open>a:focus,
        .nav.notika-top-nav .open>a:hover {
            background: #00c292;
            border-color: 0px solid #00c292;

        }

        .nav.notika-top-nav>li>a:focus,
        .nav.notika-top-nav>li>a:hover {
            text-decoration: none;
            background-color: #00c292;
        }

        .navbar-nav>li>a {
            color: #fff;
            padding: 20px 0px 20px 30px;
        }

        .rtl-layout .navbar-nav>li>a {
            padding: 20px 30px 20px 0px;
        }

        .nav.navbar-nav.notika-top-nav li a {
            font-size: 20px;
            position: relative;
        }

        .header-top-menu .nav.notika-top-nav li .search-dd {
            position: absolute;
            top: -1px;
            left: -890px;
            width: 1140px;
            border: none;
        }

        .default-sidebar-tp .header-top-menu .nav.notika-top-nav li .search-dd,
        .sm-ltd-sd .header-top-menu .nav.notika-top-nav li .search-dd,
        .lg-sd-tp .header-top-menu .nav.notika-top-nav li .search-dd,
        .mini-std-tp .header-top-menu .nav.notika-top-nav li .search-dd,
        .lg-tp-ld .header-top-menu .nav.notika-top-nav li .search-dd,
        .offcanvas .header-top-menu .nav.notika-top-nav li .search-dd,
        .hd-fd-tp .header-top-menu .nav.notika-top-nav li .search-dd,
        .dark-header .header-top-menu .nav.notika-top-nav li .search-dd,
        .dark-sidebar-tp .header-top-menu .nav.notika-top-nav li .search-dd,
        .fullscreen .header-top-menu .nav.notika-top-nav li .search-dd {
            left: -930px;
        }

        .box-layout .header-top-menu .nav.notika-top-nav li .search-dd {
            left: -865px;
            width: 1130px;
        }

        .header-top-menu .nav.notika-top-nav li .message-dd {
            position: absolute;
            top: 100%;
            left: -100px;
            width: 300px;
            border: none;
            padding: 20px 0px;
            z-index: 9999;
        }

        .header-top-menu .nav.notika-top-nav li .message-dd .hd-mg-tt h2 {
            font-size: 16px;
            color: #333;
            font-weight: 400;
            margin: 0;
            text-align: center;
            margin-bottom: 20px;
        }

        .header-top-menu .nav.notika-top-nav li .message-dd a {
            display: block;
        }

        .header-top-menu .nav.notika-top-nav li .search-dd .search-input {
            margin: 7px 300px;
            position: relative;
        }

        .header-top-menu .nav.notika-top-nav li .search-dd .search-input input[type="text"] {
            height: 40px;
            width: 100%;
            background: #F6F8FA;
            border: none;
            outline: none;
            padding: 5px 60px;
        }

        .header-top-menu .nav.notika-top-nav li .search-dd .search-input i {
            position: absolute;
            top: 0;
            left: 0;
            font-size: 20px;
            width: 50px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
        }

        .hd-message-sn {
            display: flex;
            padding: 10px 15px;
        }

        .hd-mg-ctn h3 {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        .hd-mg-ctn p {
            font-size: 14px;
            color: #333;
            margin: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .hd-message-img {
            width: 100px;
            margin-right: 15px;
        }

        .hd-mg-ctn {
            width: 210px;
            margin-top: 5px;
        }

        .hd-message-info a:hover {
            background: #F6F8FA;
        }

        .header-top-menu .nav.notika-top-nav li .message-dd .hd-mg-va a {
            font-size: 14px;
            color: #333;
            text-align: center;
            margin-top: 15px;
        }

        .header-top-menu .nav.notika-top-nav li .message-dd .hd-mg-va a:hover {
            color: #00c292;
        }

        .hd-task-info {
            overflow: hidden;
            margin: 0px 15px;
        }

        .hd-task-info .skill .progress {
            margin: 28px 0px 50px 0px;
        }

        .header-top-menu .nav.notika-top-nav li .message-dd.notification-dd {
            left: -150px;
        }

        .header-top-menu .nav.notika-top-nav li .message-dd.task-dd {
            left: -200px;
        }

        .header-top-menu .nav.notika-top-nav li .message-dd.chat-dd {
            left: -250px;
        }

        .hd-message-img img {
            border-radius: 50%;
        }

        .hd-message-img.chat-img {
            width: 50px;
            margin-right: 15px;
        }

        .search-people {
            position: relative;
            margin-bottom: 20px;
        }

        .search-people i {
            position: absolute;
            top: 10px;
            left: 45px;
            font-size: 16px;
        }

        .search-people input[type="text"] {
            border: none;
            padding: 10px 40px;
            margin-left: 30px;
            outline: none;
            font-size: 14px;
            color: #333;
            background: #F6F8FA;
        }

        .hd-message-img.chat-img {
            position: relative;
        }

        .hd-message-img.chat-img .chat-avaible i {
            position: absolute;
            top: 0px;
            right: 0px;
            font-size: 12px;
            color: #00c292;
        }

        .ntd-ctn {
            position: absolute;
            top: 8px;
            left: -8px;
            font-size: 10px;
            background: #e46a76;
            height: 18px;
            width: 18px;
            line-height: 18px;
            text-align: center;
            border-radius: 50%;
            z-index: 999;
        }

        .spinner4 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            position: absolute;
            display: inline-block;
            top: 3px;
            left: -14px;
        }

        .spinner4:after,
        .spinner4:before {
            content: "";
            display: block;
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        .spinner-4::before,
        .spinner-4::after {
            position: absolute;
            margin-top: 0px;
            margin-left: 0px;
            background: orangered;
            -webkit-animation: pulse 3s linear infinite;
            animation: pulse 3s linear infinite;
            opacity: 0;
            top: 0;
            left: 0;
        }

        .spinner-4:after {
            -webkit-animation: pulse 2s linear 2.3s infinite;
            animation: pulse 2s linear 2.3s infinite;
            z-index: 99;
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
                opacity: 1;
            }

            100% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
                opacity: 0;
            }
        }

        @keyframes pulse {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
                opacity: 1;
            }

            100% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
                opacity: 0;
            }
        }

        /*----------------------------------------*/
        /*  3.  Main Menu CSS
/*----------------------------------------*/
        .nav-tabs.notika-menu-wrap {
            border-bottom: 0px solid #ddd;
        }

        .nav-tabs.notika-menu-wrap>li.active>a,
        .nav-tabs.notika-menu-wrap>li.active>a:focus,
        .nav-tabs.notika-menu-wrap>li.active>a:hover {
            border: 0px solid #ddd;
            border: none;
        }

        .notika-tab-menu-bg {
            position: relative;
        }

        .notika-tab-menu-bg:before {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            background: #fff;
            content: "";
            z-index: 9;
            height: 100%;
        }

        .custom-menu-content ul.notika-main-menu-dropdown {
            position: relative;
            z-index: 99;
        }

        ul.notika-menu-wrap li a {
            font-size: 15px;
            color: #333;
            padding: 15px 25px;
            border: none;
        }

        .custom-menu-content ul.notika-main-menu-dropdown li {
            display: inline-block;
        }

        .custom-menu-content ul.notika-main-menu-dropdown li a {
            padding: 20px 20px;
            display: block;
            font-size: 14px;
            color: #333;
        }

        .custom-menu-content ul.notika-main-menu-dropdown li ul.layout-more-dp {
            position: absolute;
            z-index: 999;
            width: 200px;
            left: -20px;
            border: none;
            border-radius: 0px;
        }

        .custom-menu-content ul.notika-main-menu-dropdown li ul.layout-more-dp li a {
            font-size: 14px;
            color: #333;
            padding: 10px 20px;
        }

        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: none !important;
            animation-fill-mode: none !important
        }

        .mg-t-80-b-40 {
            margin: 102px 0px 40px 0px;
        }

        .mean-container .mean-nav ul li a {
            color: #333;
        }

        .mean-container .mean-nav ul li a:hover {
            color: #00c292;
        }

        .box-layout .header-top-area {
            width: 1200px;
        }

        /*----------------------------------------*/
        /*  4.  status CSS
/*----------------------------------------*/
        .wb-traffic-inner {
            padding: 20px;
            background: #fff;
            display: flex;
        }

        .website-traffic-ctn h2,
        .curved-ctn h2,
        .past-day-statis h2,
        .email-ctn-round h2,
        .recent-post-title h2,
        .recent-items-title h2,
        .realtime-title h2,
        .contact-hd h2,
        .animation-ctn-hd h2,
        .alert-hd h2,
        .color-hd h2,
        .tab-hd h2,
        .wizard-hd h2,
        .dropdown-trig-hd h2,
        .modals-hd h2,
        .accordion-hd h2,
        .tooltips-hd h2,
        .popovers-hd h2,
        .typography-list h2,
        .typography-heading h2,
        .typography-in-hd h2,
        .tpgp-hp-hd h2,
        .view-mail-hrd h2,
        .multiupload-sys h2,
        .basic-tb-hd h2 {
            font-size: 20px;
            color: #333;
        }

        .website-traffic-ctn p,
        .curved-ctn p,
        .recent-post-title p,
        .recent-post-it-ctn p,
        .view-ml-rl p,
        .mail-ads p,
        .multiupload-sys p {
            font-size: 14px;
            color: #333;
            margin: 0;
        }

        .sparkline-bar-stats1,
        .sparkline-bar-stats2,
        .sparkline-bar-stats3,
        .sparkline-bar-stats4 {
            margin-left: auto;
            margin-top: 10px;
        }

        /*----------------------------------------*/
        /*  5.  statistics CSS
/*----------------------------------------*/
        .flot-chart {
            height: 319px;
        }

        .flot-chart.flot-chart-sts {
            height: 308px;
        }

        #flotTip,
        .flot-tooltip {
            position: absolute;
            color: #333;
            display: none;
            font-size: 12px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, .1);
            padding: 3px 10px;
            background-color: #fff;
            z-index: 99999;
        }

        .jqstooltip {
            width: auto !important;
            height: auto !important;
        }

        .curved-inner-pro,
        .past-statistic-an,
        .recent-post-ctn,
        .recent-post-flex,
        .recent-items-ctn,
        .realtime-ctn,
        .realtime-visitor-ctn,
        .realtime-ctn-bw,
        .dw-st-ic,
        .wb-traffic-inner {
            display: flex;
        }

        .curved-icon,
        .past-statistic-graph,
        .recent-post-icon,
        .recent-items-icon,
        .realtime-icon {
            margin-left: auto;
            margin-top: 3px;
        }

        .curved-icon a,
        .recent-post-icon a,
        .recent-items-icon a,
        .realtime-icon a {
            font-size: 16px;
            margin-left: 20px;
            color: #666;
            transition: all .4s ease 0s;
        }

        .recent-post-icon a,
        .recent-items-icon a,
        .realtime-icon a {
            margin-left: 10px;
        }

        .recent-post-icon a:hover,
        .curved-icon a:hover,
        .recent-items-icon a:hover,
        .realtime-icon a:hover {
            color: #00c292;
            transition: all .4s ease 0s;
        }

        .past-day-statis p,
        .past-statistic-ctn p,
        .email-ctn-nock p,
        .blog-ctn p,
        .animation-ctn-hd p {
            color: #333;
            font-size: 14px;
        }

        .animation-ctn-hd p {
            line-height: 24px;
            margin-bottom: 0px;
        }

        .animation-ctn-hd {
            margin-bottom: 20px;
        }

        .past-statistic-ctn p {
            margin: 0px;
        }

        .past-statistic-an {
            margin: 20px 0px;
        }

        .past-statistic-an:last-child {
            margin-bottom: 0px;
        }

        .past-statistic-ctn h3 {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }

        .sale-statistic-inner {
            overflow: hidden;
        }

        .flot-chart-sts {
            width: calc(100% + 16px);
            left: -10px;
            bottom: -10px;
        }

        .flot-chart.flot-ch-pg {
            width: calc(100% + 18px);
            left: -10px;
            bottom: -10px;
        }

        .past-day-statis p {
            margin-bottom: 0px;
            line-height: 24px;
        }

        .past-day-statis,
        .curved-inner-pro {
            margin-bottom: 20px;
        }

        /*----------------------------------------*/
        /*  6.  Email statistics CSS
/*----------------------------------------*/
        .email-round-nock {
            height: 130px;
        }

        .email-ctn-nock p {
            margin-top: 10px;
            position: relative;
            z-index: 9;
            margin-bottom: 0px;
        }

        .email-ctn-round {
            text-align: center;
        }

        .email-round-gp {
            display: flex;
            margin-top: 40px;
        }

        .email-signle-gp {
            height: 90px;
        }

        .email-round-pro {
            width: 100%;
        }

        .email-ctn-round h2 {
            margin-bottom: 0px;
            text-align: left;
        }

        .email-statis-wrap {
            display: block;
        }

        /*----------------------------------------*/
        /*  7.  Recent Post CSS
/*----------------------------------------*/
        .realtime-title h2,
        .recent-post-title h2,
        .recent-items-title h2 {
            margin-bottom: 0px;
        }

        .recent-post-it-ctn h2,
        .realtime-vst-sg h4 {
            font-size: 16px;
            color: #333;
            margin-bottom: 4px;
            transition: all .4s ease 0s;
        }

        .recent-post-it-ctn {
            margin-left: 10px;
        }

        .recent-post-it-ctn {
            overflow: hidden;
        }

        .recent-post-it-ctn p {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .recent-post-img img {
            border-radius: 50%;
        }

        .recent-post-flex.rc-ps-vw {
            text-align: center;
            display: block;
        }

        .recent-post-flex.rc-ps-vw .recent-post-line p,
        .realtime-vst-sg p,
        .realtime-title p {
            margin: 0;
            font-size: 14px;
            color: #333;
            transition: all .4s ease 0s;
        }

        .recent-post-flex.rc-ps-vw .recent-post-line p:hover {
            color: #00c292;
            transition: all .4s ease 0s;
        }

        .recent-post-items .recent-post-signle:hover .recent-post-it-ctn h2,
        .blog-ctn .vw-at:hover {
            color: #00c292;
            transition: all .4s ease 0s;
        }

        .rct-pt-mg {
            margin-top: 19px;
        }

        /*----------------------------------------*/
        /*  8.  Blog CSS
/*----------------------------------------*/
        .blog-ctn h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
        }

        .blog-ctn .bg-au {
            font-size: 13px;
            color: #333;
            display: block;
        }

        .blog-ctn .vw-at,
        .realtime-ctn span {
            font-size: 14px;
            color: #333;
            transition: all .4s ease 0s;
        }

        .blog-ctn p {
            line-height: 24px;
            margin-bottom: 14px;
        }

        .blog-hd-sw {
            margin: 15px 0px;
        }

        /*----------------------------------------*/
        /*  9.  Recent Items CSS
/*----------------------------------------*/
        .recent-items-wp {
            overflow: hidden;
            background: #fff;
        }

        .flot-chart-items {
            height: 143px;
            width: calc(100% + 19px);
            margin: -20px -10px 0;
            bottom: -10px;
            background: #fff;
        }

        .rc-it-ltd {
            padding: 20px;
            background: #fff;
        }

        .flot-chart-items.flot-chart.vt-ct-it {
            height: 98px;
        }

        .email-rdn-hd,
        .recent-post-title,
        .recent-items-title {
            margin-bottom: 20px;
            width: 100%;
        }

        /*----------------------------------------*/
        /*  10.  Realtime CSS
/*----------------------------------------*/
        .jvectormap-container {
            width: 100%;
            height: 220px;
        }

        .jvectormap-zoomin,
        .jvectormap-zoomout,
        .jvectormap-goback {
            position: absolute;
            left: 10px;
            border-radius: 3px;
            background: #00c292;
            padding: 3px;
            color: white;
            cursor: pointer;
            line-height: 10px;
            text-align: center;
            box-sizing: content-box;
        }

        .realtime-vst-sg {
            padding-left: 0px;
            padding-top: 0px;
            padding-right: 30px;
            width: 100%;
        }

        .realtime-country-ctn {
            padding-top: 20px;
        }

        .realtime-country-ctn.realtime-ltd-mg {
            padding-top: 0px;
        }

        .realtime-country-ctn h5 {
            font-size: 14px;
            color: #333;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .realtime-ctn-st,
        .realtime-bw {
            border: 1px solid #e4e4e4;
            padding: 2px 6px;
            margin-right: 10px;
        }

        .realtime-ctn-st img {
            width: 20px;
            height: 12px;
            margin-right: 5px;
        }

        .realtime-ctn {
            margin-bottom: 20px;
        }

        .realtime-map {
            margin: 28px 0px;
        }

        /*----------------------------------------*/
        /*  11.  Footer CSS
/*----------------------------------------*/
        .footer-copyright-area {
            margin-top: 40px;
        }

        .footer-copyright-area p {
            margin: 0;
            font-size: 14px;
            color: #fff;
            padding: 15px 0px;
            text-align: center;
        }

        .footer-copyright-area a {
            color: #fff;
            transition: all .4s ease 0s;
        }

        .footer-copyright-area a:hover {
            color: #333;
            transition: all .4s ease 0s;
        }

        /*----------------------------------------*/
        /*  12.  Todo CSS
/*----------------------------------------*/
        .todo-list li {
            border: 0px;
            margin: 0px;
            padding: 5px !important;
            background: transparent !important;
            display: block;
            text-align: left;
        }

        .checkbox input[type="checkbox"] {
            cursor: pointer;
            opacity: 0;
            z-index: 1;
            outline: none !important;
        }

        .checkbox label {
            display: inline-block;
            padding-left: 25px;
            position: relative;
            font-size: 14px;
        }

        .checkbox-primary input[type="checkbox"]:checked+label::before {
            background-color: #00c292;
            border-color: #00c292;
        }

        .checkbox label::before {
            -o-transition: 0.3s ease-in-out;
            -webkit-transition: 0.3s ease-in-out;
            background-color: #ffffff;
            border-radius: 3px;
            border: 1px solid #80898e;
            content: "";
            display: inline-block;
            height: 17px;
            left: 0;
            margin-left: 0px;
            position: absolute;
            transition: 0.3s ease-in-out;
            width: 17px;
            outline: none !important;
        }

        .checkbox-primary input[type="checkbox"]:checked+label::after {
            color: #ffffff;
        }

        .checkbox input[type="checkbox"]:checked+label::after {
            content: "\f00c";
            font-family: 'FontAwesome';
        }

        .checkbox label::after {
            color: #333333;
            display: inline-block;
            font-size: 11px;
            height: 16px;
            left: 0;
            margin-left: 0px;
            padding-left: 3px;
            padding-top: 1px;
            position: absolute;
            top: 0;
            width: 16px;
        }

        .notika-todo-btn a,
        .notika-add-todo,
        .notika-chat-btn {
            font-size: 14px;
            color: #fff;
            border: none;
            background: #00c292;
        }

        .notika-todo-btn a:hover,
        .notika-todo-btn a:active,
        .notika-todo-btn a:focus,
        .notika-add-todo:hover,
        .notika-add-todo:active,
        .notika-add-todo:focus,
        .notika-add-todo:visited,
        .notika-chat-btn:hover,
        .notika-chat-btn:active,
        .notika-chat-btn:focus,
        .notika-chat-btn:visited {
            color: #fff;
            background: #00c292;
            outline: none;
        }

        .notika-todo-scrollbar .mCSB_outside+.mCSB_scrollTools,
        .widgets-chat-scrollbar .mCSB_outside+.mCSB_scrollTools {
            right: -15px;
            margin: 20px 0px;
        }

        #todo-message {
            font-size: 16px;
            color: #333;
            margin-bottom: 0px;
        }

        /*----------------------------------------*/
        /*  13.  Chat CSS
/*----------------------------------------*/
        .conversation-list .chat-avatar img {
            border-radius: 100%;
        }

        .conversation-list .chat-avatar i {
            font-size: 12px;
            font-style: normal;
        }

        .conversation-list .conversation-text {
            display: inline-block;
            float: left;
            font-size: 12px;
            margin-left: 12px;
            width: 70%;
            text-align: left;
        }

        .conversation-list .ctext-wrap {
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            background: #f5f5f5;
            border-radius: 3px;
            display: inline-block;
            padding: 10px;
            position: relative;
        }

        .conversation-list .ctext-wrap i {
            color: #343c49;
            display: block;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            position: relative;
        }

        .conversation-list .ctext-wrap p {
            margin: 0;
            padding-top: 3px;
            font-size: 14px;
            line-height: 24px;
        }

        .conversation-list .ctext-wrap:after {
            right: 100%;
            top: 20%;
            border: 5px solid rgba(213, 242, 239, 0);
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-right-color: #f5f5f5;
            margin-top: -5px;
        }

        .conversation-list .odd .ctext-wrap {
            background: #00c292 !important;
        }

        .conversation-list li {
            margin-bottom: 24px;
        }

        .conversation-list .odd .chat-avatar {
            float: right !important;
        }

        .conversation-list .chat-avatar {
            display: inline-block;
            float: left;
            text-align: center;
            width: 40px;
        }

        .conversation-list .ctext-wrap.chat-widgets-cn i {
            color: #fff;
        }

        .conversation-list .ctext-wrap.chat-widgets-cn p {
            color: #fff;
        }

        .conversation-list .odd .ctext-wrap:after {
            border-color: rgba(238, 238, 242, 0) !important;
            border-left-color: #00c292 !important;
            left: 100% !important;
            top: 20% !important;
        }

        .conversation-list .odd .conversation-text {
            float: right !important;
            margin-right: 12px;
            text-align: right;
            width: 70% !important;
        }

        .chat-widget-input {
            padding-top: 15px;
        }

        /*----------------------------------------*/
        /*  14.  Widget CSS
/*----------------------------------------*/
        .widget-signup-list a {
            height: 46px;
            border-radius: 50%;
            background: #00c292;
            width: 46px;
            display: inline-block;
            margin: 7.2px 4.4px 7.2px 0px;
            line-height: 46px;
            text-align: center;
            font-size: 18px;
            color: #fff;
        }

        .widget-signup-list img {
            border-radius: 50%;
            position: relative;
            top: -1px;
        }

        .widget-signup-list a.widgets-mg-sn {
            margin-bottom: 0px !important;
        }

        .realtime-title p {
            margin-bottom: 15px;
        }

        .skill-content-3 {
            overflow: hidden
        }

        .skill .progress .lead-content {
            left: 0;
            position: absolute;
            top: -30px;
            z-index: 99;
            width: 100%;
        }

        .skill .progress .lead-content p {
            font-size: 14px;
            margin: 5px 0px;
        }

        .skill .progress {
            background-color: #f0f0f0;
            border-radius: 0;
            box-shadow: none;
            height: 5px;
            overflow: visible;
            position: relative;
            margin: 30px 0px 48px 0px;
        }

        .skill .progress.progress-bt {
            margin-bottom: 0px;
        }

        .skill .progress-bar>span {
            background: #333 none repeat scroll 0 0;
            float: right;
            font-size: 11px;
            margin-right: 10px;
            margin-top: -26px;
            position: relative;
            padding: 0 5px;
            z-index: 99;
        }

        .skill .progress-bar>span:before,
        .skill .progress-bar>span:after {
            border: medium solid transparent;
            content: " ";
            height: 0;
            pointer-events: none;
            position: absolute;
            top: 100%;
            width: 0;
        }

        .skill .progress-bar>span:before {
            border-top-color: #333;
            border-width: 5px;
            left: 50%;
            margin-left: -5px;
        }

        .holax-shop h3,
        .we-are-good-at h3 {
            font-size: 18px;
            margin-bottom: 25px;
        }

        .skill .progress:nth-child(1) .progress-bar {
            background: #00c292;
        }

        .skill .progress:nth-child(2) .progress-bar {
            background: #fb9678;
        }

        .skill .progress:nth-child(3) .progress-bar {
            background: #01c0c8;
        }

        .skill .progress:nth-child(4) .progress-bar {
            background: #ab8ce4;
        }

        .skill .progress:nth-child(5) .progress-bar {
            background: #e46a76;
        }

        .view-all-onging {
            margin-top: 20px;
            text-align: center;
        }

        .view-all-onging a {
            font-size: 14px;
            color: #333;
            transition: all .4s ease 0s;
        }

        .view-all-onging a:hover {
            color: #00c292;
            transition: all .4s ease 0s;
        }

        .flot-chart--xs {
            height: 70px;
        }

        .widget-inner-wp p {
            margin-bottom: 5px;
        }

        .realtime-title.signup-hd-wd h2,
        .realtime-title.ongoing-hd-wd h2 {
            margin: 0px 0px 10px;
        }

        .realtime-title.widget-inner-wp.signup-hd-wd p,
        .realtime-title.ongoing-hd-wd p {
            margin: 0px;
        }

        .widget-signup-list a.signup-wd-mn {
            margin-top: 0px;
        }

        .skill-content-3.ongoing-tsk .lead-content p {
            margin-top: 0px;
        }

        /*----------------------------------------*/
        /*  15.  Widget contact CSS
/*----------------------------------------*/
        .contact-hd p {
            font-size: 14px;
            color: #333;
            line-height: 24px;
        }

        .contact-dt ul.contact-list li {
            padding: 8px 0px;
            font-size: 14px;
            color: #333;
        }

        .contact-dt ul.contact-list {
            margin-bottom: 20px;
        }

        .contact-dt ul.contact-list li i {
            font-size: 16px;
            margin-right: 5px;
        }

        #map6 {
            height: 100%;
        }

        .contact-dt ul.contact-list li:first-child {
            padding-top: 0px;
        }

        /*----------------------------------------*/
        /*  16.  Widget contact Form CSS
/*----------------------------------------*/
        .form-single {
            padding: 7px 0px;
        }

        .form-single input[type="text"],
        .form-single input[type="email"],
        .form-single input[type="number"] {
            width: 100%;
            height: 35px;
            padding: 0px 10px;
            border: 1px solid #F6F8FA;
            font-size: 14px;
            color: #333;
            outline: none;
            transition: all .4s ease 0s;
        }

        .form-single input[type="text"]:focus,
        .form-single input[type="email"]:focus,
        .form-single input[type="number"]:focus,
        .form-single textarea:focus {
            border: 1px solid #00c292;
            transition: all .4s ease 0s;
        }

        .form-single textarea {
            width: 100%;
            height: 140px;
            padding: 10px 10px;
            border: 1px solid #F6F8FA;
            font-size: 14px;
            color: #333;
            outline: none;
            transition: all .4s ease 0s;
        }

        .button.btn {
            background: #00c292;
            border-radius: 2px;
            outline: none;
            color: #fff;
        }

        .button.btn:focus,
        .button.btn:active {
            box-shadow: none;
            outline: none;
        }

        /*----------------------------------------*/
        /*  17.  Widget tabs CSS
/*----------------------------------------*/
        .widget-tabs-list {
            margin-top: 15px;
        }

        .widget-tabs-int.tab-ctm-wp .widget-tabs-list {
            margin-top: 0px;
        }

        .widget-tabs-list .nav-tabs>li.active>a,
        .widget-tabs-list .nav-tabs>li.active>a:focus,
        .widget-tabs-list .nav-tabs>li.active>a:hover {
            border: 0px solid #ddd;
            color: #333;
        }

        .widget-tabs-list .nav>li>a {
            color: #333;
            border: 0px solid transparent;
        }

        .widget-tabs-list .tab-content {
            margin-top: 20px;
        }

        .widget-tabs-list .nav-tabs:not([data-tab-color])>li>a:after,
        .wizard-cts-st .nav.nav-pills:not([data-tab-color])>li>a:after {
            background: #00c292;
        }

        .widget-tabs-list .nav-tabs li.active>a:after,
        .wizard-cts-st .nav.nav-pills>li.active>a:after {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        .widget-tabs-list .nav-tabs li>a:after,
        .wizard-cts-st .nav.nav-pills>li>a:after {
            height: 2px;
            position: absolute;
            width: 100%;
            -webkit-transition: all;
            -o-transition: all;
            transition: all;
            -webkit-transition-duration: 250ms;
            transition-duration: 250ms;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
        }

        .widget-tabs-list .nav-tabs li>a:after {
            bottom: 0;
        }

        .wizard-cts-st .nav.nav-pills>li>a:after {
            bottom: -1px;
        }

        .widget-tabs-list .nav-tabs li>a:after,
        .wizard-cts-st .nav.nav-pills>li>a:after {
            content: "";
            left: 0;
        }

        .tab-ctn {
            margin-top: 20px;
        }

        .tab-custom-st .tab-ctn p {
            font-size: 14px;
            color: #333;
            line-height: 24px;
            margin-bottom: 15px;
        }

        .tab-ctn p {
            font-size: 14px;
            color: #333;
            line-height: 24px;
            margin-bottom: 15px;
        }

        ul.tab-ctn-list li {
            font-size: 14px;
            color: #333;
            padding: 5px 0px;
        }

        ul.tab-ctn-list li:first-child {
            padding-top: 0px;
        }

        ul.tab-ctn-list li:last-child {
            padding-bottom: 0px;
        }

        .widget-tabs-list .nav.nav-tabs>li>a {
            padding: 8px 15px;
        }

        .contact-hd.tm-activity p {
            margin-bottom: 0px;
        }

        .tab-hd {
            margin-bottom: 20px;
        }

        .widget-tabs-list.tab-pt-mg {
            margin-top: 0px;
        }

        /*----------------------------------------*/
        /*  18.  Analtic CSS
/*----------------------------------------*/
        [class*=flc-] .legendLabel {
            padding: 0 8px 0 3px;
        }

        [class*=flc-] {
            text-align: center;
            margin: 20px 0 -5px;
        }

        [class*=flc-] table {
            display: inline-block;
        }

        .visitor-ov-ct .flot-chart {
            height: 282px;
        }

        .search-engine-img {
            width: 16px;
            margin-right: 5px;
            height: 16px;
        }

        .search-eg-table .table {
            margin-bottom: 0px;
        }

        .search-eg-table i {
            color: #00c292;
            margin-left: 2px;
        }

        .search-eg-table .notika-down-arrow {
            color: #F44336;
        }

        .search-eg-table .table tr,
        .search-eg-table .table td {
            font-size: 14px;
            color: #333;
        }

        .search-eg-table .table h4 {
            font-size: 14px;
            color: #333;
            margin: 0px;
        }

        .contact-hd.mg-bt-ant-inner {
            margin-bottom: 20px;
        }

        .contact-hd.mg-bt-ant-inner p {
            margin-bottom: 0px;
        }

        .contact-hd.mg-bt-ant-inner.server-sts-rgt {
            margin-bottom: 20px;
        }

        .contact-hd.search-hd-eg p {
            margin-bottom: 0px;
        }

        .contact-hd.search-hd-eg {
            margin-bottom: 20px;
        }

        .search-eg-table .table>thead>tr>th {
            border-bottom: 1px solid #ddd;
        }

        /*----------------------------------------*/
        /*  19.  Alert CSS
/*----------------------------------------*/
        .alert-list p {
            font-size: 14px;
            color: #333;
        }

        .alert-list .alert-success,
        .alert-list .alert-info,
        .alert-list .alert-warning,
        .alert-list .alert-danger {
            border-radius: 3px;
            color: #fff;
        }

        .alert-list .alert-success {
            background: #4CAF50;
        }

        .alert-list .alert-info {
            background: #2196F3;
        }

        .alert-list .alert-warning {
            background: #FFC107;
        }

        .alert-list .alert-danger {
            background: #F44336;
        }

        .alert-mg-b-0 {
            margin-bottom: 0px;
        }

        .alert-list .alert-link {
            color: #fff;
        }

        .alert-list .close {
            color: #fff !important;
            opacity: 1;
            font-size: 16px;
            top: 2px;
        }

        .alert-hd p {
            font-size: 14px;
            color: #333;
            line-height: 24px;
            margin-bottom: 0px;
        }

        .alert-hd {
            margin-bottom: 20px;
        }

        /*----------------------------------------*/
        /*  20.  color CSS
/*----------------------------------------*/
        .color-single {
            color: #fff;
            text-align: center;
            padding: 20px;
            border-radius: 3px;
        }

        .color-single h2 {
            font-size: 16px;
            color: #fff;
        }

        .color-single p {
            font-size: 14px;
            color: #fff;
            margin: 0;
        }

        .color-single span {
            font-size: 14px;
            color: #fff;
        }

        .color-hd p,
        .tab-hd p {
            font-size: 14px;
            color: #333;
            line-height: 24px;
            margin-bottom: 0px;
        }

        .color-hd {
            margin-bottom: 20px;
        }

        /*----------------------------------------*/
        /*  21.  tabs CSS
/*----------------------------------------*/
        .tab-custom-st p,
        .wizard-hd p,
        .wizard-ctn p,
        .dropdown-trig-hd p,
        .modals-hd p,
        .contact-ctn p,
        .image-crp-img p,
        .cp-img-anal p {
            font-size: 14px;
            color: #333;
            line-height: 24px;
        }

        .tab-mg-b-0 {
            margin-bottom: 0px !important;
        }

        .nav-tabs.tab-nav-center {
            text-align: center;
        }

        .nav-tabs.tab-nav-right {
            text-align: right;
        }

        .nav-tabs.tab-nav-right>li {
            float: none;
            margin-bottom: -1px;
            display: inline-block;
        }

        .nav-tabs.tab-nav-center>li {
            float: none;
            margin-bottom: -1px;
            display: inline-block;
        }

        .tab-custom-st.tab-ctn-right p {
            text-align: right;
        }

        /*----------------------------------------*/
        /* 22.  Wizard CSS
/*----------------------------------------*/
        ul.wizard-nav-ac {
            text-align: center;
        }

        ul.wizard-nav-ac li {
            display: inline-block;
        }

        ul.wizard-nav-ac li a {
            height: 35px;
            width: 35px;
            border-radius: 50%;
            background: #00c292;
            color: #fff;
            display: inline-block;
        }

        ul.wizard-nav-ac li i {
            font-size: 11px;
            line-height: 35px;
        }

        ul.wizard-nav-ac li .disabled {
            background: #ccc;
            color: #333;
        }

        .wizard-cts-st .nav.nav-pills {
            text-align: center;
        }

        .wizard-cts-st .nav.nav-pills>li {
            float: none;
            display: inline-block;
        }

        .wizard-cts-st .nav.nav-pills {
            border-bottom: 1px solid #ccc;
        }

        .wizard-cts-st .nav.nav-pills>li.active>a,
        .wizard-cts-st .nav.nav-pills>li.active>a:focus,
        .wizard-cts-st .nav.nav-pills>li.active>a:hover {
            background: #fff;
            color: #000;
        }

        .wizard-cts-st .nav.nav-pills>li>a:focus,
        .wizard-cts-st .nav.nav-pills>li>a:hover {
            text-decoration: none;
            background-color: #fff;
        }

        .wizard-cts-st .nav.nav-pills>li>a {
            background-color: #fff;
            color: #333;
            font-size: 15px;
        }

        .wizard-action-pro {
            padding-top: 20px;
            border-top: 1px solid #ccc;
            margin-top: 20px;
        }

        .wizard-hd p {
            margin-bottom: 0px;
        }

        .wizard-hd {
            margin-bottom: 20px;
        }

        #rootwizard .navbar {
            min-height: unset;
        }

        .wizard-ctn .wizard-mg-ctn {
            margin-bottom: 0px;
        }

        /*----------------------------------------*/
        /*  23.  Dropdown triggering CSS
/*----------------------------------------*/
        .dropdown-trig-sing .dropdown-menu {
            display: block;
            position: relative;
            float: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
            border-radius: 3px;
            margin: 0;
            border: 0;
        }

        .dropdown-trig-sing .dropdown-menu[class*=nk-]>li>a {
            color: #fff !important;
        }

        .dropdown-trig-sing .dropdown-menu .divider {
            height: 1px;
            background-color: rgba(0, 0, 0, .08);
        }

        .dropdown-trig-sing .dropdown-menu>li>a:focus,
        .dropdown-trig-sing .dropdown-menu>li>a:hover {
            background-color: rgba(0, 0, 0, .075);
        }

        .dropdown-trig-sing .dropdown-menu li a {
            font-size: 14px;
            color: #333;
            padding: 10px 20px;
        }

        .dropdown-trig-list .dropdown-trig-sing {
            display: inline-block;
            margin-right: 30px;
        }

        .dropdown-trig-sgn {
            display: inline-block;
        }

        .dropdown-trig-sgn .btn {
            background: #00c292;
            border: none;
            border-radius: 3px;
            outline: none;
            color: #fff;
            margin-right: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
        }

        .dropdown-trig-sgn .btn:hover,
        .dropdown-trig-sgn .btn:focus,
        .dropdown-trig-sgn .btn:active {
            background: #00c292;
            border: none;
            outline: none;
        }

        .dropdown-trig-sgn .dropdown-menu li a {
            padding: 10px 20px;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-fadeIn-dp,
        .dropdown-trig-sgn .dropdown-menu.triger-fadeInUp-dp,
        .dropdown-trig-sgn .dropdown-menu.triger-fadeInLeft-dp,
        .dropdown-trig-sgn .dropdown-menu.triger-shake-dp,
        .dropdown-trig-sgn .dropdown-menu.triger-swing-dp,
        .dropdown-trig-sgn .dropdown-menu.triger-jello-dp,
        .dropdown-trig-sgn .dropdown-menu.triger-bounceIn-dp,
        .dropdown-trig-sgn .dropdown-menu.triger-bounceInUp-dp,
        .dropdown-trig-sgn .dropdown-menu.triger-flip-dp,
        .dropdown-trig-sgn .dropdown-menu.triger-flipInX-dp,
        .dropdown-trig-sgn .dropdown-menu.triger-flipInY-dp,
        .dropdown-trig-sgn .dropdown-menu.triger-rotateIn-dp,
        .dropdown-trig-sgn .dropdown-menu.triger-zoomIn-dp {
            top: 100%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
            border: none;
            z-index: 99999;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-fadeIn-dp {
            left: 1%;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-fadeInUp-dp {
            left: 8%;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-fadeInLeft-dp {
            left: 17%;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-shake-dp {
            left: 27%;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-swing-dp {
            left: 33%;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-jello-dp {
            left: 40%;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-bounceIn-dp {
            left: 46%;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-bounceInUp-dp {
            left: 54%;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-flip-dp {
            left: 64%;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-flipInX-dp {
            left: 69%;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-flipInY-dp {
            left: 76%;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-rotateIn-dp {
            left: 82%;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-zoomIn-dp {
            left: 82%;
        }

        .dropdown-trig-hd p {
            margin-bottom: 0px;
        }

        .dropdown-trig-hd {
            margin-bottom: 20px;
        }

        /*----------------------------------------*/
        /*  24.  Modals CSS
/*----------------------------------------*/
        .modals-single p {
            font-size: 14px;
            color: #222;
            line-height: 24px;
        }

        .modals-default-notika {
            background: #ccc;
            padding: 40px 190px;
        }

        .modal-inner-pro {
            background: #fff;
            padding: 40px 100px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
        }

        .modal-inner-pro h2,
        .modals-default .modal-body h2,
        .modal-sm .modal-body h2,
        .modal-large .modal-body h2 {
            font-size: 16px;
            color: #333;
        }

        .modal-inner-pro p,
        .modals-default .modal-body p,
        .modal-sm .modal-body p,
        .modal-large .modal-body p,
        .accordion-hd p,
        .tooltips-hd p,
        .tooltips-ctn p,
        .tooltips-static p,
        .popovers-hd p,
        .typography-list p,
        .tpgp-ele-tx p,
        .view-mail-atn p,
        .basic-tb-hd p {
            font-size: 14px;
            color: #333;
            line-height: 24px;
        }

        .modal-ft {
            text-align: right;
        }

        .modal-ft .btn-modal,
        .modals-default-cl .btn-info,
        .modal-sm .modal-footer .btn-default,
        .modal-large .modal-footer .btn-default,
        .modals-default .modal-footer .btn-default {
            background: #00c292;
            outline: none;
            color: #fff;
            border-radius: 3px;
            border: none;
        }

        .modals-default-cl .btn-info {
            margin-right: 10px;
        }

        .modal-ft .btn-modal {
            margin-left: 10px;
        }

        .modal-footer .btn+.btn {
            margin-left: 10px;
        }

        .modal-ft .btn-modal:focus,
        .modal-ft .btn-modal:active,
        .modal-ft .btn-modal:hover,
        .modals-default-cl .btn-info:focus,
        .modals-default-cl .btn-info:active,
        .modals-default-cl .btn-info:hover,
        .modals-default .modal-footer .btn-default:focus,
        .modals-default .modal-footer .btn-default:active,
        .modals-default .modal-footer .btn-default:hover,
        .modal-sm .modal-footer .btn-default:focus,
        .modal-sm .modal-footer .btn-default:active,
        .modal-sm .modal-footer .btn-default:hover,
        .modal-large .modal-footer .btn-default:focus,
        .modal-large .modal-footer .btn-default:active,
        .modal-large .modal-footer .btn-default:hover {
            background: #00c292;
            outline: none;
            color: #fff;
            box-shadow: none;
        }

        .modals-default .close,
        .modal-sm .close,
        .modal-large .close {
            position: absolute;
            right: -15px;
            top: -15px;
            background: #00c292;
            opacity: 1;
            color: #fff;
            height: 26px;
            width: 25px;
            border-radius: 50%;
            font-size: 18px;
            outline: none;
        }

        .modal-dialog.modals-default {
            width: 720px;
            margin-top: 110px;
        }

        .modal-dialog.modal-sm {
            width: 510px;
            margin-top: 110px;
        }

        .modal-dialog.modal-large {
            width: 910px;
            margin-top: 110px;
        }

        .modal-dialog.modals-default .modal-content,
        .modal-dialog.modal-sm .modal-content,
        .modal-dialog.modal-large .modal-content {
            border-radius: 0px;
            padding: 40px 100px;
        }

        .modals-default .modal-header,
        .modals-default .modal-footer,
        .modals-default .modal-body,
        .modal-sm .modal-body,
        .modal-sm .modal-header,
        .modal-sm .modal-footer,
        .modal-large .modal-body,
        .modal-large .modal-header,
        .modal-large .modal-footer {
            padding: 0px;
            border-bottom: 0px solid #e5e5e5;
            border-top: 0px solid #e5e5e5;
        }

        .modals-hd a,
        .accordion-hd a,
        .tab-hd a {
            color: #333;
        }

        .modals-hd a:hover,
        .accordion-hd a:hover,
        .tab-hd a:hover {
            color: #00c292;
        }

        .modals-default-cl .nk-red.btn-info {
            background: #F44336;
        }

        .modals-default-cl .nk-light-blue.btn-info {
            background: #03A9F4;
        }

        .modals-default-cl .nk-cyan.btn-info {
            background: #00BCD4;
        }

        .modals-default-cl .nk-deep-purple.btn-info {
            background: #673AB7;
        }

        .modals-default-cl .nk-indigo.btn-info {
            background: #3F51B5;
        }

        .modals-default-cl .nk-blue.btn-info {
            background: #2196F3;
        }

        .modals-default.nk-red .modal-content,
        .modals-default.nk-red .close,
        .modals-default.nk-red .modal-footer .btn-default {
            background: #F44336;
        }

        .modals-default.nk-red .modal-content {
            border: 1px solid #F44336;
        }

        .modals-default.nk-light-blue .modal-content,
        .modals-default.nk-light-blue .close,
        .modals-default.nk-light-blue .modal-footer .btn-default {
            background: #03A9F4;
        }

        .modals-default.nk-light-blue .modal-content {
            border: 1px solid #03A9F4;
        }

        .modals-default.nk-cyan .modal-content,
        .modals-default.nk-cyan .close,
        .modals-default.nk-cyan .modal-footer .btn-default {
            background: #00BCD4;
        }

        .modals-default.nk-cyan .modal-content {
            border: 1px solid #00BCD4;
        }

        .modals-default.nk-deep-purple .modal-content,
        .modals-default.nk-deep-purple .close,
        .modals-default.nk-deep-purple .modal-footer .btn-default {
            background: #673AB7;
        }

        .modals-default.nk-deep-purple .modal-content {
            border: 1px solid #673AB7;
        }

        .modals-default.nk-indigo .modal-content,
        .modals-default.nk-indigo .close,
        .modals-default.nk-indigo .modal-footer .btn-default {
            background: #3F51B5;
        }

        .modals-default.nk-indigo .modal-content {
            border: 1px solid #3F51B5;
        }

        .modals-default.nk-blue .modal-content,
        .modals-default.nk-blue .close,
        .modals-default.nk-blue .modal-footer .btn-default {
            background: #2196F3;
        }

        .modals-default.nk-blue .modal-content {
            border: 1px solid #2196F3;
        }

        .modals-default.nk-red .modal-body h2,
        .modals-default.nk-red .modal-body p,
        .modals-default.nk-light-blue .modal-body h2,
        .modals-default.nk-light-blue .modal-body p,
        .modals-default.nk-cyan .modal-body h2,
        .modals-default.nk-cyan .modal-body p,
        .modals-default.nk-deep-purple .modal-body h2,
        .modals-default.nk-deep-purple .modal-body p,
        .modals-default.nk-indigo .modal-body h2,
        .modals-default.nk-indigo .modal-body p,
        .modals-default.nk-blue .modal-body h2,
        .modals-default.nk-blue .modal-body p {
            color: #fff;
        }

        .modals-hd p,
        .modal-df-hd p {
            margin-bottom: 0px;
        }

        .modals-hd {
            margin-bottom: 20px;
        }

        /*----------------------------------------*/
        /*  25.  Accordion CSS
/*----------------------------------------*/
        .panel-collapse .panel-heading {
            position: relative;
        }

        .panel-collapse .panel-heading .panel-title>a:after,
        .panel-collapse .panel-heading .panel-title>a:before {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 2px;
            width: 100%;
            content: "";
            -webkit-transition: all;
            -o-transition: all;
            transition: all;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .panel-collapse .panel-heading .panel-title>a:after {
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0)
        }

        .panel-collapse .panel-heading:not(.active) .panel-title>a:before {
            background: #eee
        }

        .panel-collapse .panel-heading:after,
        .panel-collapse .panel-heading:before {
            font-size: 14px;
            position: absolute;
            left: 0;
            -webkit-transition: all;
            -o-transition: all;
            transition: all;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            backface-visibility: hidden;
            top: 8px;
        }

        .panel-collapse .panel-heading:before {
            content: "\e923";
            -ms-transform: scale(1);
            -o-transform: scale(1);
            font-family: 'notika-icon';
        }

        .panel-collapse .panel-heading:after {
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            content: "\e91b";
            font-family: 'notika-icon';
        }

        .panel-collapse .panel-heading.active .panel-title>a:after {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }

        .panel-collapse .panel-heading.active:before {
            -webkit-transform: scale(0) rotate(-90deg);
            -ms-transform: scale(0) rotate(-90deg);
            -o-transform: scale(0) rotate(-90deg);
            transform: scale(0) rotate(-90deg)
        }

        .panel-collapse .panel-heading.active:after {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }

        .panel-collapse .panel-body {
            border-top: 0 !important;
            padding-left: 5px;
            padding-right: 5px
        }

        .panel-group:not([data-collapse-color]) .panel-collapse .panel-heading.active .panel-title>a:after {
            background: #2196F3
        }

        .panel-group[data-collapse-color=nk-green] .panel-collapse .panel-heading.active .panel-title>a:after {
            background: #00c292
        }

        .panel-group[data-collapse-color=nk-red] .panel-collapse .panel-heading.active .panel-title>a:after {
            background: #F44336
        }

        .panel-group[data-collapse-color=nk-pink] .panel-collapse .panel-heading.active .panel-title>a:after {
            background: #E91E63
        }

        .panel-group[data-collapse-color=nk-purple] .panel-collapse .panel-heading.active .panel-title>a:after {
            background: #9C27B0
        }

        .panel-group[data-collapse-color=nk-indigo] .panel-collapse .panel-heading.active .panel-title>a:after {
            background: #3F51B5
        }

        .panel-group[data-collapse-color=nk-blue] .panel-collapse .panel-heading.active .panel-title>a:after {
            background: #2196F3
        }

        .notika-accrodion-cus .panel-heading {
            padding: 10px 25px;
        }

        .panel.notika-accrodion-cus {
            border: 0px solid transparent;
            box-shadow: none;
        }

        .notika-accrodion-cus .panel-title>a {
            font-size: 16px;
            color: #333;
        }

        .notika-accrodion-cus .panel-body p,
        .popovers-pr-sg p {
            font-size: 14px;
            color: #333;
            line-height: 24px;
            margin: 0px;
        }

        .accordion-stn .panel-group {
            margin-bottom: 0px;
        }

        .accordion-hd p {
            margin-bottom: 0px;
        }

        .accordion-hd {
            margin-bottom: 20px;
        }

        .accordion-stn .panel-body {
            padding-top: 20px;
            padding-bottom: 0px;
        }

        /*----------------------------------------*/
        /*  26.  Tooltips CSS
/*----------------------------------------*/
        .tooltips-ctn h4,
        .tooltips-static h4,
        .popovers-sgn h4,
        .popover-cl-pro .popover .popover-title {
            font-size: 16px;
            color: #333;
        }

        .tooltip-inner {
            padding: 5px 15px;
            background: #00c292;
        }

        .tooltip.right .tooltip-arrow {
            border-right-color: #00c292;
        }

        .tooltip.bottom .tooltip-arrow {
            border-bottom-color: #00c292;
        }

        .tooltip.top .tooltip-arrow {
            border-top-color: #00c292;
        }

        .tooltip.left .tooltip-arrow {
            border-left-color: #00c292;
        }

        .tooltip.in {
            opacity: 1;
        }

        .tooltips-ctn a {
            color: #00c292;
        }

        .tooltips-static .btn-primary,
        .popover-cl-pro .btn-primary {
            font-size: 14px;
            background: #00c292;
            border: none;
            border-radius: 3px;
            outline: none;
            color: #fff;
            margin-right: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
        }

        .tooltips-static .btn-primary:hover,
        .tooltips-static .btn-primary:focus,
        .tooltips-static .btn-primary:active,
        .popover-cl-pro .btn-primary:hover,
        .popover-cl-pro .btn-primary:focus,
        .popover-cl-pro .btn-primary:active {
            background: #00c292;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
            outline: none;
        }

        .tooltips-static p,
        .tooltips-ctn p {
            margin-bottom: 0px;
        }

        .tooltips-static,
        .tooltips-ctn,
        .stc-tlt-hd {
            margin-bottom: 20px;
        }

        .tooltips-static.tooltips-cvn {
            margin-bottom: 0px;
        }

        .tooltips-hd.tooltips-hdn p {
            margin-bottom: 0px;
        }

        .tooltips-hd.tooltips-hdn {
            margin-bottom: 20px;
        }

        /*----------------------------------------*/
        /*  27.  Popovers CSS
/*----------------------------------------*/
        .popover-wp {
            background: #ccc;
            padding: 40px 190px;
        }

        .popovers-pr-sg {
            background: #fff;
            padding: 20px;
            display: inline-block;
            margin-right: 30px;
            margin-bottom: 30px;
            width: 325px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
            position: relative;
            border-radius: 2px;
        }

        .popovers-pr-sg-mg-n {
            margin-bottom: 0px;
        }

        .popovers-pr-sg.top>.popover-arrow {
            left: 50%;
            margin-left: -11px;
            border-bottom-width: 0;
            border-top-color: #fff;
            bottom: -11px;
        }

        .popovers-pr-sg.right>.popover-arrow {
            top: 50%;
            left: -11px;
            margin-top: -11px;
            border-left-width: 0;
            border-right-color: #fff;
        }

        .popovers-pr-sg.bottom>.popover-arrow {
            left: 50%;
            margin-left: -11px;
            border-top-width: 0;
            border-bottom-color: #fff;
            top: -11px;
        }

        .popovers-pr-sg.left>.popover-arrow {
            top: 50%;
            right: -11px;
            margin-top: -11px;
            border-right-width: 0;
            border-left-color: #fff;
        }

        .popovers-pr-sg>.popover-arrow {
            border-width: 11px;
        }

        .popovers-pr-sg>.popover-arrow,
        .popovers-pr-sg>.popover-arrow:after {
            position: absolute;
            display: block;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
        }

        .popovers-pr-sg.right>.popover-arrow:after {
            left: 1px;
            border-left-width: 0;
            border-right-color: #fff;
        }

        .popover-cl-pro .popover {
            padding: 0px;
            border: 0px solid rgba(0, 0, 0, .2);
            border-radius: 2px;
            font-family: 'Roboto', sans-serif;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
        }

        .popover-cl-pro .popover .popover-title {
            padding: 0px;
            background-color: #fff;
            border-bottom: 0px solid #ebebeb;
            padding: 15px 15px 0px 15px
        }

        .popover-cl-pro .popover-content {
            padding: 5px 15px 10px 15px;
            line-height: 24px;
            font-size: 14px;
        }

        .popovers-hd p {
            margin-bottom: 0px;
        }

        .popovers-hd {
            margin-bottom: 20px;
        }

        .popover-cl h5 {
            font-size: 16px;
            color: #333;
        }

        .popovers-pr-sg h5 {
            font-size: 16px;
            color: #333;
        }

        .popover-cl.popover-ctn-mg h5 {
            margin-bottom: 20px;
        }

        /*----------------------------------------*/
        /*  28.  Typography CSS
/*----------------------------------------*/
        .typography-list h3 {
            font-size: 16px;
            color: #333;
            line-height: 24px;
        }

        .typography-heading h1 {
            font-size: 30px;
            color: #333;
        }

        .typography-hd-cr-2 h2 {
            font-size: 25px;
            color: #333;
        }

        .typography-hd-cr-1,
        .typography-hd-cr-2,
        .typography-hd-cr-3,
        .typography-hd-cr-4,
        .typography-hd-cr-5,
        .typography-hd-cr-6 {
            font-size: 14px;
            line-height: 24px;
        }

        .typography-hd-cr-3 h3 {
            font-size: 22px;
            color: #333;
        }

        .typography-hd-cr-4 h4 {
            font-size: 20px;
            color: #333;
        }

        .typography-hd-cr-5 h5 {
            font-size: 17px;
            color: #333;
        }

        .typography-hd-cr-6 h6,
        .tpgp-ele-tx h2,
        .tpgp-al-cl h3,
        .tpgp-al-cl p,
        .abvi-act h2,
        .abvi-act p,
        .cmp-int-box p,
        .typography-hd-cr-1 p {
            font-size: 14px;
            color: #333;
            line-height: 24px;
        }

        .typography-mg-b-0 {
            margin-bottom: 0px;
        }

        .typography-hd-cr-6.typography-mg-b-0 p {
            margin-bottom: 0px;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-justify {
            text-align: justify;
        }

        .text-nowrap {
            white-space: nowrap;
        }

        .text-lowercase {
            text-transform: lowercase;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        .text-capitalize {
            text-transform: capitalize;
        }

        abbr[title] {
            cursor: help;
            border-bottom: 1px dotted;
        }

        .tpgp-al-cl .text-capitalize {
            margin: 0px;
        }

        .tpgp-al-cl .blockquote-nk {
            font-size: 14px;
            line-height: 24px;
            color: #333;
            font-weight: 700;
        }

        .tpgp-al-cl ul.tpdg-ul-circle,
        .tpgp-al-cl ul.tpdg-ul-circle-2 {
            list-style-type: circle;
            margin-left: 15px;
        }

        .tpgp-al-cl ul.tpdg-ul-circle li,
        .tpgp-al-cl ul.tpdg-ul-circle-2 li,
        .tpgp-orders li,
        .order-roman li {
            font-size: 14px;
            color: #333;
            margin: 5px 0px;
        }

        .tpgp-al-cl ul.tpdg-ul-circle li:last-child,
        .tpgp-al-cl ul.tpdg-ul-circle-2 li:last-child,
        .tpgp-orders li:last-child,
        .order-roman li:last-child {
            margin-bottom: 0px;
        }

        .tpgp-al-cl .tpgp-ctm-angle li {
            font-size: 14px;
            color: #333;
            margin: 5px 0px;
        }

        .tpgp-al-cl .tpgp-ctm-angle li:last-child {
            margin-bottom: 0px;
        }

        .tpgp-al-cl .tpgp-ctm-angle li i {
            margin-right: 2px;
            font-size: 10px;
        }

        .blockquote-reverse,
        blockquote.pull-right {
            margin-bottom: 0px;
            padding-bottom: 0px;
        }

        .abvi-mg-nk p {
            margin-bottom: 0px;
        }

        ol,
        ul {
            margin: 0px;
            padding: 0px;
        }

        .tpgp-ele-tx h2,
        .tpgp-al-cl h3,
        .abvi-act h2 {
            font-size: 16px;
            color: #333;
        }

        .typography-list.typography-mgn h2,
        .typography-heading.typography-mgn .mn-hd-s,
        .typography-in-hd.typography-mgn .mn-hd-s,
        .tpgp-hp-hd.typography-mgn .mn-hd-s {
            margin-bottom: 20px;
        }

        /*----------------------------------------*/
        /*  29.  Contact CSS
/*----------------------------------------*/
        .contact-img img {
            border-radius: 50%;
            margin: 25px 0px;
        }

        .contact-ctn h2 {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }

        .contact-ctn .ctn-ads {
            font-size: 14px;
            color: #888;
            margin-bottom: 0px;
        }

        .contact-ad-hd {
            margin: 15px 0px;
        }

        .social-sn h2 {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        .social-sn p {
            font-size: 14px;
            color: #333;
            margin-bottom: 0px;
        }

        .social-sn {
            margin-right: 15px;
        }

        .social-st-list,
        .contact-win,
        .inbox-btn-st-ls,
        .view-mail-hd {
            display: flex;
        }

        .conct-sc-ic {
            margin-left: auto;
        }

        .conct-sc-ic a {
            display: block;
            height: 30px;
            width: 30px;
            background: #00c292;
            border-radius: 50%;
            color: #fff;
            margin: 5px 0px;
            font-size: 14px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
            padding: 0px;
            text-align: center;
            line-height: 30px;
        }

        .conct-sc-ic a:hover,
        .conct-sc-ic a:focus,
        .conct-sc-ic a:active {
            color: #fff;
        }

        /*----------------------------------------*/
        /*  30.  Inbox CSS
/*----------------------------------------*/
        .inbox-status ul.inbox-st-nav.inbox-ft li:first-child {
            font-weight: 700;
        }

        .inbox-status ul.inbox-st-nav.inbox-ft li:first-child i {
            position: relative;
            top: 1px;
        }

        .inbox-status ul.inbox-st-nav li {
            padding: 8px 15px;
        }

        .inbox-status ul.inbox-st-nav li a {
            color: #333;
            font-size: 14px;
            display: block;
        }

        .inbox-status ul.inbox-st-nav li i {
            color: #00c292;
            margin-right: 5px;
            font-size: 16px;
        }

        .inbox-status ul.inbox-st-nav.inbox-nav-mg li:last-child {
            padding-bottom: 0px;
        }

        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 1em 0;
            padding: 0;
        }

        .search-input {
            position: relative;
        }

        .search-input .search-ib {
            border: none;
            background: #00c292;
            font-size: 14px;
            position: absolute;
            right: 0;
            top: 0px;
            padding: 7px 20px;
            border-radius: 0px;
            box-shadow: none;
            color: #fff;
            outline: none;
        }

        .search-input .search-ib:hover,
        .search-input .search-ib:focus,
        .search-input .search-ib:active {
            border: none;
            background: #00c292;
            border-radius: 0px;
            box-shadow: none;
            outline: none;
        }

        .search-input input[type="text"] {
            padding: 8px 10px;
            width: 100%;
            border: 1px solid #ccc;
            font-size: 14px;
            color: #333;
            transition: all .4s ease 0s;
        }

        .inbox-btn-st-ls .inbox-nx {
            margin-left: auto;
        }

        .inbox-btn-st-ls.btn-toolbar .btn-group {
            margin-bottom: 0px;
        }

        .btn-default.notika-gp-default:focus,
        .btn-default.notika-gp-default:active {
            border-radius: 0px;
        }

        .btn-default.notika-gp-default {
            padding: 4px 10px;
        }

        .btn-default.notika-gp-default i {
            line-height: 24px;
            font-size: 14px;
        }

        .inbox-btn-st-ls .notika-group-btn {
            box-shadow: 0 2px 5px rgba(0, 0, 0, .16), 0 2px 10px rgba(0, 0, 0, .12);
        }

        .table.table-inbox>tbody>tr>td,
        .table.table-inbox>tbody>tr>th,
        .table.table-inbox>tfoot>tr>td,
        .table.table-inbox>tfoot>tr>th,
        .table.table-inbox>thead>tr>td,
        .table.table-inbox>thead>tr>th {
            padding: 15px 15px;
            line-height: 0;
            vertical-align: middle;
        }

        .table.table-inbox>tbody>tr>td a {
            font-size: 14px;
            color: #333;
        }

        .table.table-hover.table-inbox {
            margin-bottom: 0px;
        }

        .bt-df-checkbox {
            padding: 8px 0px;
            margin: 0;
        }

        .bt-df-checkbox .radio-checked {
            margin-right: 8px;
        }

        .icheckbox_square-green.checked {
            background-position: -44px 0;
        }

        .icheckbox_square-green.checked.disabled {
            background-position: -88px 0;
        }

        .iradio_square-green {
            background-position: -109px 0;
        }

        .iradio_square-green.hover {
            background-position: -131px 0;
        }

        .iradio_square-green.checked {
            background-position: -153px 0;
            transition: all 0.3s ease 0s;
        }

        .iradio_square-green.checked.disabled {
            background-position: -197px 0;
        }

        .inline-checkbox-cs {
            padding: 7px 0px;
        }

        .inline-checkbox-cs .checkbox-inline {
            padding-left: 0px;
        }

        .checkbox.login-checkbox label {
            padding-left: 0px;
        }

        .icheckbox_square-green,
        .iradio_square-green {
            display: inline-block;
            vertical-align: middle;
            margin: 0;
            padding: 0;
            width: 22px;
            height: 22px;
            background: url(img/green1.png) no-repeat;
            border: none;
            cursor: pointer;
        }

        .icheckbox_square-green {
            background-position: 0 0;
        }

        .icheckbox_square-green.hover {
            background-position: -22px 0;
        }

        .icheckbox_square-green.checked {
            background-position: -44px 0;
            transition: all 0.3s ease 0s;
        }

        .inbox-btn-st-ls {
            margin: 20px 0px;
        }

        .pagination-inbox ul.wizard-nav-ac li i {
            line-height: 0px;
        }

        .pagination-inbox ul.wizard-nav-ac li a {
            line-height: 24px;
            background: #ccc;
        }

        .pagination-inbox ul.wizard-nav-ac li a:hover,
        .pagination-inbox ul.wizard-nav-ac li a:active.pagination-inbox ul.wizard-nav-ac li a:focus {
            color: #fff !important;
        }

        .pagination-inbox ul.wizard-nav-ac li.active a {
            background: #00c292;
        }

        .pagination-inbox {
            margin-top: 20px;
        }

        .table-inbox .label-warning {
            background: #ab8ce4;
        }

        .table-inbox .label-info {
            background: #01c0c8;
        }

        .active-hook .btn-default {
            font-size: 14px;
            color: #333;
        }

        .active-hook .btn-default:hover,
        .active-hook .btn-default:active,
        .active-hook .btn-default:focus {
            background: #00c292;
            color: #fff;
            border: 1px solid #00c292;
            transition: all .4s ease 0s;
            outline: none;
        }

        .btn-group.ib-btn-gp.active-hook.nk-act {
            margin-left: auto;
        }

        .active-hook.nk-act button {
            padding: 3px 10px;
        }

        .active-hook.nk-act i {
            line-height: 24px;
        }

        .inbox-text-list .form-group {
            margin-bottom: 0px;
        }

        /*----------------------------------------*/
        /*  31.  View Mail CSS
/*----------------------------------------*/
        .view-ml-rl {
            margin-left: auto;
        }

        .view-mail-hrd h2 {
            margin: 0px;
        }

        .mail-ads p {
            padding: 3px 0px;
        }

        .mail-ads {
            margin: 20px 0px;
        }

        .mail-ads a,
        .view-mail-atn a,
        .cmp-int-box a {
            color: #00c292;
        }

        .view-mail-atn h2,
        .cmp-int-box h5 {
            font-size: 16px;
            color: #333;
        }

        .view-mail-atn {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 2px;
        }

        .view-mail-atn span {
            font-size: 14px;
            color: #333;
            display: block;
        }

        .view-mail-atn .vw-tr {
            padding-bottom: 5px;
        }

        .dw-st-ic span,
        .cmp-int-box span {
            font-size: 14px;
            color: #333;
        }

        .dw-st-ic .atc-sign {
            position: relative;
            top: 5px;
            font-size: 20px;
        }

        .dw-atc-sn .dw-al-ft {
            background: #00c292;
            color: #fff;
            padding: 0px 10px;
            font-size: 14px;
            position: relative;
            top: 4px;
            left: 5px;
            border-radius: 2px;
        }

        .compose-ml .btn {
            width: 100%;
            padding: 5px 15px;
            background: #00c292;
            color: #fff;
            border-radius: 2px;
            outline: none;
            border: none;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .compose-ml .btn:focus,
        .compose-ml .btn:active,
        .compose-ml .btn:hover {
            outline: none;
            border: none;
            box-shadow: none;
        }

        .dw-atc-sn i {
            margin-left: 5px;
            position: relative;
            top: 1px;
        }

        .mail-ads.mail-vw-ph .first-ph {
            padding-top: 0px;
        }

        .mail-ads.mail-vw-ph .last-ph {
            padding-bottom: 0px;
        }

        /*----------------------------------------*/
        /*  32.  Compose Mail CSS
/*----------------------------------------*/
        .cmp-int-in input[type="text"] {
            width: 100%;
            height: 35px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            margin: 5px 0px;
            outline: none;
            border-radius: 2px;
            transition: all .4s ease 0s;
        }

        .cmp-int-in input[type="text"]:focus {
            border: 1px solid #00c292;
            outline: none;
            transition: all .4s ease 0s;
        }

        .cmp-int-lb span {
            font-size: 14px;
            color: #333;
            position: relative;
            top: 12px;
            right: 0px;
        }

        .cmp-int-lb.cmp-int-lb1 span {
            top: 12px;
            right: -10px;
        }

        .cmp-int-box p {
            line-height: 24px;
        }

        .cmp-int-box .note-editor.note-frame {
            border: 1px solid #ccc;
        }

        .cmp-int-box .note-editor.note-frame:focus {
            border: 1px solid #00c292;
            outline: none;
        }

        .multiupload-sys .dropzone.dropzone-custom {
            border: 2px dashed #00c292;
        }

        .multiupload-sys i {
            font-size: 30px;
            color: #333;
        }

        .multiupload-sys h2 {
            font-size: 16px;
        }

        .form-group.cmp-em-mg {
            margin-bottom: 0px;
        }

        /*----------------------------------------*/
        /*  33.  Normal Table CSS
/*----------------------------------------*/
        .normal-table-list .table {
            margin-bottom: 0px;
        }

        .table.table-sc-ex>tbody>tr>td,
        .table.table-sc-ex>tbody>tr>th,
        .table.table-sc-ex>tfoot>tr>td,
        .table.table-sc-ex>tfoot>tr>th,
        .table.table-sc-ex>thead>tr>td,
        .table.table-sc-ex>thead>tr>th {
            border-top: 1px solid #F5F5F5;
            font-size: 14px;
            color: #333;
            padding: 15px;
        }

        .table.table-bordered>tbody>tr>td,
        .table.table-bordered>tbody>tr>th,
        .table.table-bordered>tfoot>tr>td,
        .table.table-bordered>tfoot>tr>th,
        .table.table-bordered>thead>tr>td,
        .table.table-bordered>thead>tr>th {
            border: 1px solid #F5F5F5;
            font-size: 14px;
            color: #333;
            padding: 15px;
        }

        .table-bordered,
        .table-bordered>tbody>tr>td,
        .table-bordered>tbody>tr>th,
        .table-bordered>tfoot>tr>td,
        .table-bordered>tfoot>tr>th,
        .table-bordered>thead>tr>td,
        .table-bordered>thead>tr>th {
            border: 1px solid #F5F5F5;
        }

        .table.table-striped>tbody>tr>td,
        .table.table-striped>tbody>tr>th,
        .table.table-striped>tfoot>tr>td,
        .table.table-striped>tfoot>tr>th,
        .table.table-striped>thead>tr>td,
        .table.table-striped>thead>tr>th {
            border-top: 0px solid #F5F5F5;
            font-size: 14px;
            color: #333;
            padding: 15px;
        }

        .table.table-hover>tbody>tr>td,
        .table.table-hover>tbody>tr>th,
        .table.table-hover>tfoot>tr>td,
        .table.table-hover>tfoot>tr>th,
        .table.table-hover>thead>tr>td,
        .table.table-hover>thead>tr>th {
            border-top: 1px solid #F5F5F5;
            font-size: 14px;
            color: #333;
            padding: 15px 15px;
        }

        .table.table-condensed>tbody>tr>td,
        .table.table-condensed>tbody>tr>th,
        .table.table-condensed>tfoot>tr>td,
        .table.table-condensed>tfoot>tr>th,
        .table.table-condensed>thead>tr>td,
        .table.table-condensed>thead>tr>th {
            border-top: 1px solid #F5F5F5;
            font-size: 14px;
            color: #333;
            padding: 10px;
        }

        .table.table-cl>tbody>tr>td,
        .table.table-cl>tbody>tr>th,
        .table.table-cl>tfoot>tr>td,
        .table.table-cl>tfoot>tr>th,
        .table.table-cl>thead>tr>td,
        .table.table-cl>thead>tr>th {
            border-top: 0px solid #F5F5F5;
            font-size: 14px;
            color: #333;
            padding: 15px;
        }

        .table.table-striped>thead>tr>th {
            border-bottom: 0px solid #ddd;
        }

        .table.table-sc-ex>thead>tr>th {
            border-bottom: 0px solid #ddd;
        }

        .table.table-bordered>thead>tr>th {
            border-bottom: 0px solid #ddd;
        }

        .table.table-hover>thead>tr>th {
            border-bottom: 0px solid #ddd;
        }

        .table.table-condensed>thead>tr>th {
            border-bottom: 0px solid #ddd;
        }

        .table.table-cl>thead>tr>th {
            border-bottom: 0px solid #ddd;
        }

        .table.table-cl>tbody>tr.active>td,
        .table.table-cl>tbody>tr.active>th,
        .table.table-cl>tbody>tr>td.active,
        .table.table-cl>tbody>tr>th.active,
        .table.table-cl>tfoot>tr.active>td,
        .table.table-cl>tfoot>tr.active>th,
        .table.table-cl>tfoot>tr>td.active,
        .table.table-cl>tfoot>tr>th.active,
        .table.table-cl>thead>tr.active>td,
        .table.table-cl>thead>tr.active>th,
        .table.table-cl>thead>tr>td.active,
        .table.table-cl>thead>tr>th.active {
            background: #00c292;
            color: #fff;
        }

        .table.table-cl>tbody>tr.info>td,
        .table.table-cl>tbody>tr.info>th,
        .table.table-cl>tbody>tr>td.info,
        .table.table-cl>tbody>tr>th.info,
        .table.table-cl>tfoot>tr.info>td,
        .table.table-cl>tfoot>tr.info>th,
        .table.table-cl>tfoot>tr>td.info,
        .table.table-cl>tfoot>tr>th.info,
        .table.table-cl>thead>tr.info>td,
        .table.table-cl>thead>tr.info>th,
        .table.table-cl>thead>tr>td.info,
        .table.table-cl>thead>tr>th.info {
            background: #fb9678;
            color: #fff;
        }

        .table.table-cl>tbody>tr.warning>td,
        .table.table-cl>tbody>tr.warning>th,
        .table.table-cl>tbody>tr>td.warning,
        .table.table-cl>tbody>tr>th.warning,
        .table.table-cl>tfoot>tr.warning>td,
        .table.table-cl>tfoot>tr.warning>th,
        .table.table-cl>tfoot>tr>td.warning,
        .table.table-cl>tfoot>tr>th.warning,
        .table.table-cl>thead>tr.warning>td,
        .table.table-cl>thead>tr.warning>th,
        .table.table-cl>thead>tr>td.warning,
        .table.table-cl>thead>tr>th.warning {
            background: #01c0c8;
            color: #fff;
        }

        .table.table-cl>tbody>tr.danger>td,
        .table.table-cl>tbody>tr.danger>th,
        .table.table-cl>tbody>tr>td.danger,
        .table.table-cl>tbody>tr>th.danger,
        .table.table-cl>tfoot>tr.danger>td,
        .table.table-cl>tfoot>tr.danger>th,
        .table.table-cl>tfoot>tr>td.danger,
        .table.table-cl>tfoot>tr>th.danger,
        .table.table-cl>thead>tr.danger>td,
        .table.table-cl>thead>tr.danger>th,
        .table.table-cl>thead>tr>td.danger,
        .table.table-cl>thead>tr>th.danger {
            background: #ab8ce4;
            color: #fff;
        }

        .table.table-cl>tbody>tr.success>td,
        .table.table-cl>tbody>tr.success>th,
        .table.table-cl>tbody>tr>td.success,
        .table.table-cl>tbody>tr>th.success,
        .table.table-cl>tfoot>tr.success>td,
        .table.table-cl>tfoot>tr.success>th,
        .table.table-cl>tfoot>tr>td.success,
        .table.table-cl>tfoot>tr>th.success,
        .table.table-cl>thead>tr.success>td,
        .table.table-cl>thead>tr.success>th,
        .table.table-cl>thead>tr>td.success,
        .table.table-cl>thead>tr>th.success {
            background: #e46a76;
            color: #fff;
        }

        .basic-tb-hd p {
            margin-bottom: 0px;
        }

        .basic-tb-hd {
            margin-bottom: 20px;
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th {
            font-size: 14px;
            color: #333;
        }

        /*----------------------------------------*/
        /*  34.  Data Table CSS
/*----------------------------------------*/
        .dataTables_filter,
        .dataTables_length {
            padding: 20px 15px;
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .dataTables_filter label,
        .dataTables_length label {
            font-weight: 400;
        }

        .dataTables_length select {
            margin: 0 8px;
        }

        .dataTables_filter input,
        .dataTables_filter select,
        .dataTables_length input,
        .dataTables_length select {
            border: 1px solid #eee;
            height: 35px;
            padding: 7px 15px;
            font-size: 13px;
            border-radius: 2px;
            -webkit-appearance: none;
            -moz-appearance: none;
            line-height: 100%;
            background-color: #fff;
            outline: none;
        }

        .dataTables_filter input:focus,
        .dataTables_filter select:focus,
        .dataTables_length input:focus,
        .dataTables_length select:focus,
        .dataTables_length option:focus {
            border: 1px solid #00c292;
        }

        .dataTables_wrapper .dataTables_filter {
            width: 40%;
        }

        .dataTables_wrapper .dataTables_filter input,
        .dataTables_wrapper .dataTables_filter label {
            width: 100%;
        }

        .dataTables_filter label:after {
            content: '\e928';
            font-family: 'notika-icon';
            position: absolute;
            font-size: 14px;
            right: 0px;
            top: 8px;
        }

        .dataTables_wrapper .dataTables_filter input {
            margin: 0 !important;
            padding: 0px 0px 0px 10px;
        }

        .dataTables_filter label {
            position: relative;
            font-size: 0;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.previous:before {
            content: '\e903';
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.next:before,
        .dataTables_wrapper .dataTables_paginate .paginate_button.previous:before {
            font-family: 'notika-icon';
            font-size: 14px;
            line-height: 35px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.next,
        .dataTables_wrapper .dataTables_paginate .paginate_button.previous {
            font-size: 0;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.next:before {
            content: '\e91e';
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:focus,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background: #00c292;
            color: #fff !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #f1f1f1;
            vertical-align: top;
            color: #7E7E7E !important;
            margin: 0 2px;
            border: 0 !important;
            line-height: 21px;
            box-shadow: none !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button:focus {
            color: white !important;
            border: 0px solid #ccc;
            background: #00c292 !important;
        }

        #data-table-basic {
            padding: 20px 0px;
        }

        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_paginate {
            padding-top: 0px;
        }

        #data-table-basic_filter label,
        #data-table-basic_length label {
            margin-bottom: 0px;
        }

        /*----------------------------------------*/
        /*  35.  Form Element CSS
/*----------------------------------------*/
        .nk-int-st input[type="text"],
        .nk-int-st textarea,
        .nk-int-st [type="number"],
        .nk-int-st [type="password"] {
            box-shadow: none;
            border-top: 0px solid #ccc;
            border-left: 0px solid #ccc;
            border-right: 0px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding: 0px;
            resize: none;
            border-radius: 0px;
        }

        .nk-int-st textarea:active,
        .nk-int-st textarea:focus,
        .nk-int-st textarea:hover,
        .nk-int-st [type="password"]:focus,
        .nk-int-st [type="password"]:active {
            box-shadow: none;
        }

        .nk-int-st {
            position: relative;
            vertical-align: top;
        }

        .nk-int-st:not([class*=has-]):after {
            background: #00c292;
        }

        .nk-int-st:not(.disabled):after,
        .nk-int-st:not(.readonly):after {
            position: absolute;
            z-index: 3;
            bottom: 0;
            left: 0;
            height: 2px;
            width: 100%;
            content: "";
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -webkit-transition: all;
            -o-transition: all;
            transition: all;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
        }

        .nk-int-st:not(.form-group) {
            display: inline-block;
            width: 100%;
        }

        .nk-int-st.nk-toggled:after {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }

        .floating-numner p {
            font-size: 14px;
            color: #333;
            margin-top: 15px;
        }

        .floating-numner.fm-ele-mg p {
            margin-bottom: 0px;
        }

        .floating-numner.form-rlt-mg p {
            margin-top: 0px;
        }

        .float-lb .nk-label {
            font-size: 14px;
            -webkit-transition: all;
            -o-transition: all;
            transition: all;
            -webkit-transition-duration: .2s;
            transition-duration: .2s;
            position: absolute;
            top: 5px;
            font-weight: 400;
            color: #959595;
            pointer-events: none;
            z-index: 0;
            left: 0;
            white-space: nowrap;
        }

        .float-lb .nk-toggled .nk-label {
            top: -15px;
            font-size: 12px
        }

        .form-group.float-lb {
            margin: 15px 0px;
        }

        .form-group.float-lb.floating-lb {
            margin-top: 0px;
        }

        .nk-int-st .form-control[disabled],
        .nk-int-st .form-control[readonly],
        fieldset[disabled] .form-control {
            background-color: #fff;
            opacity: 1;
        }

        .fm-checkbox label {
            font-weight: 400;
        }

        .fm-checkbox {
            margin: 10px 0px;
        }

        .iradio_square-green {
            background-position: -109px 0;
        }

        .form-group.form-elet-mg {
            margin-bottom: 0px;
        }

        .fm-checkbox.form-elet-mg {
            margin-bottom: 0px;
        }

        .fm-checkbox.form-elet-mg label {
            margin-bottom: 0px;
        }

        textarea.auto-size {
            height: 100%;
            text-rendering: auto;
            letter-spacing: normal;
            word-wrap: normal;
        }

        .contact-hd.sm-form-hd p {
            margin-bottom: 0px;
        }

        .contact-form-int {
            margin-top: 15px;
        }

        /*----------------------------------------*/
        /*  36.  Form Components CSS
/*----------------------------------------*/
        .ic-cmp-int {
            position: relative;
            display: table;
            border-collapse: separate;
        }

        .form-ic-cmp {
            padding: 0px 12px;
            background-color: transparent;
            border: 0px solid transparent;
            border-radius: 0;
        }

        .form-ic-cmp {
            display: table-cell;
            width: 1%;
        }

        .form-ic-cmp i {
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            color: #333;
            text-align: center;
            position: relative;
            top: 7px;
            left: 0px;
        }

        .cmp-tb-hd h2 {
            font-size: 20px;
            color: #333;
        }

        .bcs-hd h2 {
            font-size: 16px;
        }

        .cmp-tb-hd p {
            font-size: 14px;
            color: #333;
            line-height: 24px;
            margin-bottom: 0px;
        }

        .cmp-tb-hd {
            margin-bottom: 20px;
        }

        .cmp-tb-hd.cmp-int-hd h2 {
            margin-bottom: 0px;
        }

        .cmp-tb-hd.air-mode-ctn p {
            margin-bottom: 0px;
        }

        .int-bg-it .form-ic-cmp i {
            font-size: 20px;
            top: 20px;
        }

        .nk-int-mk h2 {
            font-size: 16px;
            color: #333;
            margin-left: 40px;
            font-weight: 400;
        }

        .nk-int-mk p {
            font-size: 14px;
            color: #333;
        }

        .bootstrap-select .selected .check-mark {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        .bootstrap-select .check-mark {
            margin-top: -5px !important;
            font-size: 14px;
            -webkit-transition: all;
            -o-transition: all;
            transition: all;
            -webkit-transition-duration: .2s;
            transition-duration: .2s;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            display: block !important;
            position: absolute;
            top: 17px;
            right: 15px;
        }

        .bootstrap-select>.btn-default:before {
            position: absolute;
            top: 0;
            right: 0;
            content: "";
            height: calc(100% - 2px);
            width: 30px;
            background-color: #FFF;
            background-position: right calc(100% - 7px);
            background-repeat: no-repeat;
            background-image: url(images/select.png);
            pointer-events: none;
            z-index: 5;
        }

        .bootstrap-select>.btn-default {
            border-top: 0px solid #ccc;
            border-left: 0px solid #ccc;
            border-right: 0px solid #ccc;
            border-bottom: 1px solid #ccc;
            border-radius: 0px;
            background: none !important;
            box-shadow: none !important;
            outline: none !important;
        }

        .bootstrap-select>.btn-default:active,
        .bootstrap-select>.btn-default:hover,
        .bootstrap-select>.btn-default:focus {
            outline: none !important;
        }

        .bootstrap-select.btn-group .dropdown-menu li a {
            padding: 10px 10px;
        }

        .bootstrap-select.btn-group .dropdown-menu {
            border: 0px solid #ccc;
        }

        .bootstrap-select .dropdown-menu>.active>a,
        .bootstrap-select .dropdown-menu>.active>a:focus,
        .bootstrap-select .dropdown-menu>.active>a:hover {
            background-color: #00c292;
        }

        .bootstrap-select .bs-searchbox {
            padding: 5px 5px 5px 40px;
            position: relative;
            background: #F7F7F7;
            margin-top: -10px;
        }

        .bootstrap-select .bs-searchbox:before {
            position: absolute;
            left: 0;
            top: 0;
            width: 40px;
            height: 100%;
            content: "\e928";
            font-family: 'notika-icon' !important;
            font-size: 16px;
            padding: 12px 0 0 15px;
        }

        .bootstrap-select .bs-searchbox input[type="text"] {
            border: 0px solid #ccc;
            border-radius: 0px;
            box-shadow: none;
            background-image: none !important;
            background: #F6F8FA;
        }

        .nk-int-mk.sl-dp-mn h2 {
            margin-left: 10px;
            font-weight: 700;
        }

        .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
            width: 100%;
        }

        .bootstrap-select .notify {
            background: #F44336 !important;
            color: #fff;
        }

        .bootstrap-select .dropdown-menu {
            top: 0px;
        }

        .chosen-select-act .chosen-container {
            padding: 6px 2px;
        }

        .chosen-select-act .chosen-single {
            border-top: 0px solid #ccc;
            border-left: 0px solid #ccc;
            border-right: 0px solid #ccc;
            border-bottom: 1px solid #ccc;
            box-shadow: none;
            background: #fff;
            font-size: 14px;
            color: #333;
            border-radius: 0px;
        }

        .chosen-select-act .chosen-container .chosen-drop {
            border: 0px solid #ccc;
        }

        .chosen-select-act .chosen-container-active.chosen-with-drop .chosen-single {
            border: 0px solid #ccc;
            background-image: none;
        }

        .chosen-select-act .chosen-container .chosen-drop {
            top: 0px;
        }

        .chosen-select-act .chosen-container .chosen-results li.highlighted {
            background: #00c292;
            color: #fff;
        }

        .chosen-select-act .chosen-container .chosen-results li {
            position: relative;
        }

        .chosen-select-act .chosen-container .chosen-results li.result-selected:before {
            position: absolute;
            right: 15px;
            top: 10px;
            font-size: 14px;
        }

        .chosen-select-act .chosen-container .chosen-results li.result-selected:before {
            content: "\e906";
            font-family: 'notika-icon' !important;
            font-size: 16px;
        }

        .chosen-select-act .chosen-container .chosen-results li {
            padding: 10px 10px;
            font-size: 14px;
            color: #333;
        }

        .chosen-select-act .chosen-container-single .chosen-search {
            padding: 5px 5px 5px 40px !important;
            background: #F7F7F7;
        }

        .chosen-select-act .chosen-container-single .chosen-search {
            position: relative;
            z-index: 1010;
            margin: 0;
            padding: 3px 4px;
            white-space: nowrap;
        }

        .chosen-select-act .chosen-container-single .chosen-search:before {
            content: "\e928";
            font-family: 'notika-icon' !important;
            position: absolute;
            left: 0;
            top: 3px;
            width: 40px;
            height: 100%;
            font-size: 16px;
            padding: 5px 0 0 15px;
        }

        .chosen-select-act .chosen-container-single .chosen-search input[type="text"] {
            border: 0px solid #ccc;
        }

        .chosen-select-act .chosen-container .chosen-results li.disabled-result {
            color: #ccc;
        }

        .chosen-select-act .chosen-container-active .chosen-choices {
            border: 0px solid #ccc;
            box-shadow: none;
        }

        .bootstrap-select.btn-group .no-results {
            padding: 10px 15px;
            margin: 0 0px;
            background: #fff;
        }

        .bootstrap-select .dropdown-menu>li>a:focus,
        .bootstrap-select .dropdown-menu>li>a:hover,
        .bootstrap-select .dropdown-menu>li>a:active {
            background-color: #00c292 !important;
            color: #fff !important;
        }

        .chosen-select-act .chosen-container-multi .chosen-choices {
            background-image: none;
            border-top: 0px solid #ccc;
            border-left: 0px solid #ccc;
            border-right: 0px solid #ccc;
            border-bottom: 1px solid #ccc;
        }

        .chosen-select-act .chosen-container-multi .chosen-choices li.search-choice {
            border-top: 0px solid #ccc;
            border-left: 0px solid #ccc;
            border-right: 0px solid #ccc;
            border-bottom: 1px solid #ccc;
            border-radius: 2px;
            background-color: #00c292;
            background-image: none;
            color: #fff;
            padding: 5px 10px;
        }

        .chosen-select-act .chosen-container-multi .chosen-choices li.search-choice span {}

        .chosen-container-multi .chosen-choices li.search-choice .search-choice-close {
            width: 15px;
            height: 10px;
            background: url(img/chosen-sprite.png) -38px 1px no-repeat;
            display: inline-block;
            text-align: center;
            color: #333;
            position: unset;
        }

        .chosen-container-multi .chosen-choices li.search-choice .search-choice-close:hover {
            background-position: -38px -10px;
            color: #fff !important;
        }

        .chosen-select-act {
            position: relative;
        }

        .chosen-select-act:before {
            position: absolute;
            top: -6px;
            right: 0;
            content: "";
            height: calc(100% - 2px);
            width: 30px;
            background-color: #FFF;
            background-position: right calc(100% - 7px);
            background-repeat: no-repeat;
            background-image: url(images/select.png);
            pointer-events: none;
            z-index: 5;
        }

        .chosen-container .chosen-results li.group-result {
            font-weight: 600;
        }

        .nk-toggle-switch {
            display: inline-block;
            vertical-align: top;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .nk-toggle-switch .ts-label {
            display: inline-block;
            margin: 0 20px 0 0;
            vertical-align: top;
            -webkit-transition: color .56s cubic-bezier(.4, 0, .2, 1);
            transition: color .56s cubic-bezier(.4, 0, .2, 1)
        }

        .nk-toggle-switch .ts-helper {
            display: inline-block;
            position: relative;
            width: 40px;
            height: 14px;
            border-radius: 8px;
            background: rgba(0, 0, 0, .26);
            -webkit-transition: background .28s cubic-bezier(.4, 0, .2, 1);
            transition: background .28s cubic-bezier(.4, 0, .2, 1);
            vertical-align: middle;
            cursor: pointer
        }

        .nk-toggle-switch .ts-helper:before {
            content: '';
            position: absolute;
            top: -5px;
            left: -4px;
            width: 24px;
            height: 24px;
            background: #fafafa;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .28);
            border-radius: 50%;
            webkit-transition: left .28s cubic-bezier(.4, 0, .2, 1), background .28s cubic-bezier(.4, 0, .2, 1), box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            transition: left .28s cubic-bezier(.4, 0, .2, 1), background .28s cubic-bezier(.4, 0, .2, 1), box-shadow .28s cubic-bezier(.4, 0, .2, 1)
        }

        .nk-toggle-switch:not(.disabled) .ts-helper:active:before {
            box-shadow: 0 2px 8px rgba(0, 0, 0, .28), 0 0 0 20px rgba(128, 128, 128, .1)
        }

        .nk-toggle-switch input {
            position: absolute;
            z-index: 1;
            width: 46px;
            margin: 0 0 0 -4px;
            height: 24px;
            opacity: 0;
            filter: alpha(opacity=0);
            cursor: pointer
        }

        .nk-toggle-switch input:checked+.ts-helper:before {
            left: 20px
        }

        .nk-toggle-switch:not([data-ts-color]) input:not(:disabled):checked+.ts-helper {
            background: #22deb0;
        }

        .nk-toggle-switch:not([data-ts-color]) input:not(:disabled):checked+.ts-helper:before {
            background: #00c292;
        }

        .nk-toggle-switch:not([data-ts-color]) input:not(:disabled):checked+.ts-helper:active:before {
            box-shadow: 0 2px 8px rgba(0, 0, 0, .28), 0 0 0 20px rgba(0, 150, 136, .2);
        }

        .nk-toggle-switch.disabled {
            opacity: .6;
            filter: alpha(opacity=60);
        }

        .nk-toggle-switch[data-ts-color=red] input:not(:disabled):checked+.ts-helper {
            background: rgba(244, 67, 54, .5);
        }

        .nk-toggle-switch[data-ts-color=red] input:not(:disabled):checked+.ts-helper:before {
            background: #F44336;
        }

        .nk-toggle-switch[data-ts-color=red] input:not(:disabled):checked+.ts-helper:active:before {
            box-shadow: 0 2px 8px rgba(0, 0, 0, .28), 0 0 0 20px rgba(244, 67, 54, .2);
        }

        .nk-toggle-switch[data-ts-color=blue] input:not(:disabled):checked+.ts-helper {
            background: rgba(33, 150, 243, .5);
        }

        .nk-toggle-switch[data-ts-color=blue] input:not(:disabled):checked+.ts-helper:before {
            background: #2196F3;
        }

        .nk-toggle-switch[data-ts-color=blue] input:not(:disabled):checked+.ts-helper:active:before {
            box-shadow: 0 2px 8px rgba(0, 0, 0, .28), 0 0 0 20px rgba(33, 150, 243, .2);
        }

        .nk-toggle-switch[data-ts-color=amber] input:not(:disabled):checked+.ts-helper {
            background: rgba(255, 193, 7, .5);
        }

        .nk-toggle-switch[data-ts-color=amber] input:not(:disabled):checked+.ts-helper:before {
            background: #FFC107;
        }

        .nk-toggle-switch[data-ts-color=amber] input:not(:disabled):checked+.ts-helper:active:before {
            box-shadow: 0 2px 8px rgba(0, 0, 0, .28), 0 0 0 20px rgba(255, 193, 7, .2);
        }

        .nk-toggle-switch[data-ts-color=purple] input:not(:disabled):checked+.ts-helper {
            background: rgba(186, 104, 200, .5);
        }

        .nk-toggle-switch[data-ts-color=purple] input:not(:disabled):checked+.ts-helper:before {
            background: #BA68C8;
        }

        .nk-toggle-switch[data-ts-color=purple] input:not(:disabled):checked+.ts-helper:active:before {
            box-shadow: 0 2px 8px rgba(0, 0, 0, .28), 0 0 0 20px rgba(186, 104, 200, .2);
        }

        .nk-toggle-switch[data-ts-color=pink] input:not(:disabled):checked+.ts-helper {
            background: rgba(233, 30, 99, .5);
        }

        .nk-toggle-switch[data-ts-color=pink] input:not(:disabled):checked+.ts-helper:before {
            background: #E91E63;
        }

        .nk-toggle-switch[data-ts-color=pink] input:not(:disabled):checked+.ts-helper:active:before {
            box-shadow: 0 2px 8px rgba(0, 0, 0, .28), 0 0 0 20px rgba(233, 30, 99, .2);
        }

        .nk-toggle-switch[data-ts-color=lime] input:not(:disabled):checked+.ts-helper {
            background: rgba(205, 220, 57, .5);
        }

        .nk-toggle-switch[data-ts-color=lime] input:not(:disabled):checked+.ts-helper:before {
            background: #CDDC39;
        }

        .nk-toggle-switch[data-ts-color=lime] input:not(:disabled):checked+.ts-helper:active:before {
            box-shadow: 0 2px 8px rgba(0, 0, 0, .28), 0 0 0 20px rgba(205, 220, 57, .2);
        }

        .nk-toggle-switch[data-ts-color=cyan] input:not(:disabled):checked+.ts-helper {
            background: rgba(0, 188, 212, .5);
        }

        .nk-toggle-switch[data-ts-color=cyan] input:not(:disabled):checked+.ts-helper:before {
            background: #00BCD4;
        }

        .nk-toggle-switch[data-ts-color=cyan] input:not(:disabled):checked+.ts-helper:active:before {
            box-shadow: 0 2px 8px rgba(0, 0, 0, .28), 0 0 0 20px rgba(0, 188, 212, .2);
        }

        .nk-toggle-switch[data-ts-color=green] input:not(:disabled):checked+.ts-helper {
            background: #22deb0;
        }

        .nk-toggle-switch[data-ts-color=green] input:not(:disabled):checked+.ts-helper:before {
            background: #00c292;
        }

        .nk-toggle-switch[data-ts-color=green] input:not(:disabled):checked+.ts-helper:active:before {
            box-shadow: 0 2px 8px rgba(0, 0, 0, .28), 0 0 0 20px rgba(76, 175, 80, .2);
        }

        .nk-int-mk.sl-dp-mn.tg-dp-mn h2 {
            margin-left: 0px;
        }

        .toggle-select-act label {
            font-weight: 400;
            font-size: 14px;
        }

        .nk-toggle-switch.disabled {
            opacity: .6;
            filter: alpha(opacity=60);
        }

        .spacer-b16a {
            margin-bottom: 5px;
        }

        .nk-datapk-ctm label {
            font-size: 16px;
            color: #333;
        }

        .nk-datapk-ctm .input-group-addon {
            background-color: #fff;
            border: 0px solid #ccc;
        }

        .nk-datapk-ctm .form-control,
        .nk-line .form-control {
            background-color: #fff;
            border-top: 0px solid #ccc;
            border-left: 0px solid #ccc;
            border-right: 0px solid #ccc;
            border-bottom: 1px solid #ccc;
            box-shadow: none;
            border-radius: 0px;
        }

        .datepicker {
            padding: 0px;
            border-radius: 0px;
        }

        .datepicker.dropdown-menu {
            border: 0px solid #ccc;
            border: 0px solid rgba(0, 0, 0, 0.2);
            border-radius: 0px;
            color: #333;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            width: 300px;
        }

        .datepicker-days .table-condensed thead tr {
            background: #00c292;
            color: #fff;
        }

        .datepicker-days .table-condensed thead tr:first-child {
            height: 70px;
        }

        .datepicker-days .table-condensed thead tr:last-child {
            background: #11cc9d;
            height: 40px;
        }

        .datepicker-days .table-condensed thead tr th:first-child {
            display: none;
        }

        .datepicker-days .table-condensed tbody tr td:first-child {
            display: none;
        }

        .datepicker thead tr:first-child th:hover,
        .datepicker tfoot tr th:hover {
            background: #00c292;
            color: #fff;
        }

        .datepicker table tr td.active:hover,
        .datepicker table tr td.active:hover:hover,
        .datepicker table tr td.active.disabled:hover,
        .datepicker table tr td.active.disabled:hover:hover,
        .datepicker table tr td.active:focus,
        .datepicker table tr td.active:hover:focus,
        .datepicker table tr td.active.disabled:focus,
        .datepicker table tr td.active.disabled:hover:focus,
        .datepicker table tr td.active:active,
        .datepicker table tr td.active:hover:active,
        .datepicker table tr td.active.disabled:active,
        .datepicker table tr td.active.disabled:hover:active,
        .datepicker table tr td.active.active,
        .datepicker table tr td.active:hover.active,
        .datepicker table tr td.active.disabled.active,
        .datepicker table tr td.active.disabled:hover.active,
        .open .dropdown-toggle.datepicker table tr td.active,
        .open .dropdown-toggle.datepicker table tr td.active:hover,
        .open .dropdown-toggle.datepicker table tr td.active.disabled,
        .open .dropdown-toggle.datepicker table tr td.active.disabled:hover {
            background: #00c292;
            color: #fff;
        }

        .datepicker-dropdown:after,
        .datepicker-dropdown:before {
            position: unset;
            display: none;
        }

        .datepicker table tr td,
        .datepicker table tr th {
            border-radius: 0px;
        }

        .datepicker table {
            width: 300px;
            height: 380px;
        }

        .datepicker.dropdown-menu th,
        .datepicker.dropdown-menu td {
            padding: 10px 5px;
        }

        .datepicker th.datepicker-switch {
            font-size: 16px;
        }

        .datepicker table tr td span.active:hover,
        .datepicker table tr td span.active:hover:hover,
        .datepicker table tr td span.active.disabled:hover,
        .datepicker table tr td span.active.disabled:hover:hover,
        .datepicker table tr td span.active:focus,
        .datepicker table tr td span.active:hover:focus,
        .datepicker table tr td span.active.disabled:focus,
        .datepicker table tr td span.active.disabled:hover:focus,
        .datepicker table tr td span.active:active,
        .datepicker table tr td span.active:hover:active,
        .datepicker table tr td span.active.disabled:active,
        .datepicker table tr td span.active.disabled:hover:active,
        .datepicker table tr td span.active.active,
        .datepicker table tr td span.active:hover.active,
        .datepicker table tr td span.active.disabled.active,
        .datepicker table tr td span.active.disabled:hover.active,
        .open .dropdown-toggle.datepicker table tr td span.active,
        .open .dropdown-toggle.datepicker table tr td span.active:hover,
        .open .dropdown-toggle.datepicker table tr td span.active.disabled,
        .open .dropdown-toggle.datepicker table tr td span.active.disabled:hover {
            background: #00c292;
            color: #fff;
        }

        .datepicker-months .table-condensed thead tr,
        .datepicker-years .table-condensed thead tr {
            height: 70px;
            background: #00c292;
            color: #fff;
        }

        .datepicker.dropdown-menu .datepicker-months th,
        .datepicker.dropdown-menu .datepicker-months td {
            padding: 20px 22px;
        }

        .nk-container i.nk-value {
            width: 25px;
            height: 25px;
            border-radius: 2px;
            position: absolute;
            top: 0;
            right: 15px;
        }

        .nk-container>.input-group input.nk-value {
            color: #000 !important;
            background: 0 0 !important;
        }

        .nk-line .form-control {
            background-color: #fff;
            border-top: 0px solid #ccc;
            border-left: 0px solid #ccc;
            border-right: 0px solid #ccc;
            border-bottom: 1px solid #ccc;
            box-shadow: none;
            border-radius: 0px;
        }

        .nk-container .input-group-addon {
            border: 0px solid #ccc;
            background-color: #fff;
        }

        .nk-container>.input-group .dropdown-menu {
            padding: 20px;
            border: 0px solid #ccc;
        }

        .cmp-tb-hd label {
            font-size: 16px;
            color: #333;
        }

        .note-editor .fa,
        .note-popover .fa {
            font-size: 12px;
        }

        .summernote-clickable .btn-primary,
        .summernote-clickable .btn-success,
        .modal-footer .btn-primary {
            background: #00c292;
            color: #fff;
            border: none;
            border-radius: 2px;
            box-shadow: none;
            font-size: 14px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .16), 0 2px 10px rgba(0, 0, 0, .12);
        }

        .summernote-clickable .btn-primary:active,
        .summernote-clickable .btn-primary:focus,
        .summernote-clickable .btn-success:focus,
        .summernote-clickable .btn-success:active,
        .modal-footer .btn-primary:focus,
        .modal-footer .btn-primary:active {
            background: #00c292;
            color: #fff;
            border: none;
            border-radius: 2px;
            box-shadow: none;
            outline: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .16), 0 2px 10px rgba(0, 0, 0, .12);
        }

        .summernote-clickable {
            margin-bottom: 10px;
        }

        .html-editor-click p,
        .note-editable p {
            font-size: 14px;
            color: #333;
            line-height: 24px;
        }

        .html-editor-airmod.note-air-editor.note-editable.panel-body p {
            margin-bottom: 0px;
        }

        .html-editor-airmod.note-air-editor.note-editable.panel-body {
            padding-bottom: 0px;
            padding-left: 0px;
            padding-top: 0px;
        }

        .panel-heading.note-toolbar>.btn-group {
            margin-top: 0px;
        }

        .note-toolbar.panel-heading {
            background: #fff;
            padding: 15px 20px;
        }

        .btn-group .btn-default:hover {
            background: #fff;
        }

        .note-editor {
            border: 1px solid #ccc;
        }

        .note-link-dialog .modal-title,
        .note-link-dialog .form-group label {
            font-size: 14px;
            color: #333;
        }

        .note-link-dialog .modal-header {
            border-bottom: 0px solid #e5e5e5;
        }

        .note-link-dialog .modal-footer {
            border-top: 0px solid #e5e5e5;
        }

        .contact-hd.dialog-hd p {
            margin-bottom: 0px;
        }

        .contact-hd.dialog-hd {
            margin-bottom: 20px;
        }

        .note-link-dialog .modal-dialog .modal-content {
            border-radius: 2px;
            border: 0px solid #ccc;
        }

        .dropzone.dropzone-nk {
            border: 2px dashed #00c292;
        }

        .dropzone.dropzone-nk i {
            font-size: 30px;
            color: #333;
        }

        .dropzone.dropzone-nk h2,
        .dropzone.dropzone-nk p {
            font-size: 14px;
            color: #333;
        }

        .dropzone.dropzone-nk h2 {
            font-size: 16px;
            color: #333;
        }

        .themesaller-forms .slider-group .sliderv-wrapper {
            margin-bottom: 0px;
        }

        .chosen-select-act .chosen-container {
            padding-bottom: 0px;
        }

        .nk-int-st .input-group-addon {
            padding: 0px;
        }

        .cmp-tb-hd.bsc-smp-sm {
            margin-bottom: 0px;
        }

        .form-single.nk-int-st.widget-form textarea {
            height: 132px;
        }

        /*----------------------------------------*/
        /*  37.  Form examples CSS
/*----------------------------------------*/
        .form-example-int label {
            font-size: 14px;
            color: #333;
            font-weight: 400;
            margin: 0px;
        }

        .form-example-int input[type="text"] {
            font-size: 14px;
        }

        .form-example-int.form-horizental .hrzn-fm {
            text-align: right;
            display: block;
        }

        .form-example-st .form-group,
        .form-example-st .fm-checkbox {
            margin-bottom: 0px;
        }

        /*----------------------------------------*/
        /*  38.  Login Register CSS
/*----------------------------------------*/
        .login-content,
        .error-page-area {
            min-height: 100vh;
            text-align: center;
            background-color: #00c292;
        }

        .login-content:before,
        .error-page-area:before {
            content: '';
            height: 100vh;
            width: 1px;
        }

        .nk-block,
        .error-page-wrap {
            max-width: 500px;
            padding: 20px 0;
            width: 80%;
            position: relative;
            margin: 0 auto;
        }

        .nk-navigation a,
        .nk-navigation a i {
            vertical-align: top;
            display: inline-block;
        }

        .nk-block:not(.toggled) {
            display: none;
        }

        .nk-block.toggled {
            -webkit-animation-name: rollIn;
            animation-name: rollIn;
            -webkit-animation-duration: .9s;
            animation-duration: .9s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            z-index: 10;
        }

        .nk-block:not(.lc-block-alt) .nk-form {
            padding: 40px;
        }

        .nk-block:not(.lc-block-alt) .btn-login {
            top: 50%;
            margin-top: -50px;
            right: -25px;
        }

        .nk-form,
        .error-page-wrap {
            background: #fff;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
            border-radius: 2px;
        }

        .nk-navigation {
            margin-top: 15px;
        }

        .nk-navigation a,
        .nk-navigation a span {
            -webkit-transition: width;
            -o-transition: width;
            transition: width;
            -webkit-transition-duration: .2s;
            transition-duration: .2s;
        }

        .nk-navigation a {
            color: #fff;
            background: rgba(255, 255, 255, .2);
            margin: 0 1px;
            width: 30px;
            height: 30px;
            border-radius: 20px;
            white-space: nowrap;
            text-align: left;
        }

        .nk-navigation a i {
            width: 30px;
            font-style: normal;
            font-size: 16px;
            text-align: center;
            line-height: 30px;
        }

        .nk-lg-ic .notika-plus-symbol {
            font-size: 12px;
        }

        .nk-navigation a span {
            width: 0;
            overflow: hidden;
            display: inline-block;
            line-height: 29px;
            margin-left: -3px;
        }

        .nk-navigation a:hover span {
            width: 100%;
        }

        .nk-navigation a[data-ma-block="#l-register"]:hover {
            width: 95px;
        }

        .nk-navigation a[data-ma-block="#l-forget-password"]:hover {
            width: 147px;
        }

        .nk-navigation a[data-ma-block="#l-login"]:hover {
            width: 85px;
        }

        .lc-block-alt .nk-form {
            padding: 70px 35px 60px;
        }

        .lc-block-alt .btn-login {
            bottom: 0;
            left: 50%;
            margin-left: -25px;
        }

        .lcb-user {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 5px solid #fff;
            position: absolute;
            top: -35px;
            left: 50%;
            margin-left: -50px;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, .18);
        }

        .input-group-addon.nk-ic-st-pro {
            border: 0px solid #ccc;
            background: #fff;
            font-size: 20px;
        }

        .nk-block .fm-checkbox {
            margin: 15px 0 0 41px;
            text-align: left;
        }

        .btn-float {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            line-height: 46px !important;
        }

        .btn-float:not(.m-btn) {
            position: absolute !important;
        }

        .btn-login.btn-float i {
            font-size: 20px;
        }

        .btn-float:not(.bgm-white):not(.bgm-gray)>i {
            color: #fff;
        }

        .btn-login.btn-success,
        .images-cropper-pro .btn,
        .images-action-pro .btn,
        .notika-todo-btn .btn,
        .btn.notika-add-todo,
        .btn.notika-chat-btn {
            background-color: #00c292;
            border-color: #00c292;
            border: 0px solid #ccc;
            outline: none;
            box-shadow: none;
        }

        .btn-login.btn-success:hover,
        .btn-login.btn-success:focus,
        .btn-login.btn-success:active,
        .images-cropper-pro .btn:hover,
        .images-cropper-pro .btn:focus,
        .images-cropper-pro .btn:active,
        .images-action-pro .btn:hover,
        .images-action-pro .btn:focus,
        .images-action-pro .btn:active,
        .notika-todo-btn .btn:hover,
        .notika-todo-btn .btn:focus,
        .notika-todo-btn .btn:active,
        .btn.notika-add-todo:hover,
        .btn.notika-add-todo:focus,
        .btn.notika-add-todo:active,
        .btn.notika-chat-btn:hover,
        .btn.notika-chat-btn:focus,
        .btn.notika-chat-btn:active {
            background-color: #00c292;
            border-color: #00c292;
            border: 0px solid #ccc;
            outline: none;
            box-shadow: none;
        }

        .rg-ic-stl .notika-right-arrow {
            font-size: 14px;
        }

        .nk-block,
        .login-content:before,
        .error-page-wrap,
        .error-page-area:before {
            vertical-align: middle;
            display: inline-block;
        }

        .nk-form p {
            font-size: 14px;
            color: #333;
            line-height: 24px;
        }

        /*----------------------------------------*/
        /*  39.  Invoice CSS
/*----------------------------------------*/
        .invoice-img {
            background: #00c292;
            text-align: center;
            padding: 40px 0px;
        }

        .ivc-frm {
            text-align: right;
        }

        .ivc-to {
            text-align: left;
        }

        .invoice-frm span,
        .comp-tl p,
        .cmp-ph-em span,
        .invoice-hs span,
        .invoice-ds-int p {
            font-size: 14px;
            color: #333;
            display: block;
            line-height: 24px;
        }

        .comp-tl h2,
        .invoice-hs h2 {
            font-size: 16px;
            color: #333;
        }

        .comp-tl p {
            margin-bottom: 0px;
        }

        .comp-tl {
            padding: 15px 0px;
        }

        .invoice-hds-pro {
            margin: 20px 0px;
        }

        .invoice-hs {
            background: #00c292;
            padding: 20px 30px;
        }

        .invoice-hs span {
            margin-bottom: 5px;
            color: #fff;
        }

        .invoice-hs h2 {
            color: #fff;
        }

        .date-inv {
            background: #2196F3;
        }

        .wt-inv {
            background: #4CAF50;
        }

        .gdt-inv {
            background: #F44336;
        }

        .invoice-sp .table {
            margin-bottom: 0px;
        }

        .invoice-sp {
            margin: 20px 0px;
        }

        .invoice-ds-int h2 {
            font-size: 16px;
            color: #333;
        }

        .invoice-print {
            position: fixed;
            bottom: 70px;
            right: 70px;
            z-index: 99;
        }

        .invoice-print .btn {
            height: 50px;
            width: 50px;
            background: #00c292;
            color: #fff;
            border-radius: 50%;
            line-height: 40px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .16), 0 2px 10px rgba(0, 0, 0, .12);
        }

        .invoice-print i {
            font-size: 16px;
            line-height: 24px;
        }

        .invoice-ds-int p {
            margin-bottom: 0px;
        }

        .invoice-ds-int {
            margin-bottom: 20px;
        }

        .invoice-ds-int.invoice-last {
            margin-bottom: 0px;
        }

        /*----------------------------------------*/
        /*  40.  404 CSS
/*----------------------------------------*/
        .error-page-wrap {
            padding: 20px 20px;
        }

        .error-page-wrap h2 {
            font-size: 20px;
            color: #333;
        }

        .error-page-wrap p {
            font-size: 14px;
            color: #333;
            line-height: 24px;
        }

        .error-page-wrap .btn {
            background: #00c292;
            color: #fff;
            border-radius: 2px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .16), 0 2px 10px rgba(0, 0, 0, .12);
            outline: none;
            margin: 0px 5px;
            font-size: 14px;
        }

        .error-page-wrap .counter {
            color: #00c292;
        }

        .error-page-wrap i {
            font-size: 40px;
            color: #00c292;
            padding-bottom: 15px !important;
            display: block;
        }

        /*----------------------------------------*/
        /*  41.  Default Layout CSS
/*----------------------------------------*/
        .default-layout-dv,
        .menu-layout-dv {
            height: 510px;
        }

        /*----------------------------------------*/
        /*  42.  Menu Hover Layout CSS
/*----------------------------------------*/
        .main-menu-lv-int {
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .main-menu-lv-int ul.main-menu-lv {
            text-align: center;
        }

        .main-menu-lv-int ul.main-menu-lv>li {
            display: inline-block;
            position: relative;
        }

        .main-menu-lv-int ul.main-menu-lv>li>a {
            padding: 20px 15px;
            display: inline-block;
            font-size: 16px;
            color: #333;
            transition: all .4s ease 0s;
        }

        .main-menu-lv-int ul.main-menu-lv>li i {
            margin-right: 3px;
        }

        .main-menu-lv-int ul.main-menu-lv>li:hover>a {
            color: #00c292;
            transition: all .4s ease 0s;
        }

        .main-menu-lv-int ul.main-menu-lv li ul.menu-dp-lt {
            position: absolute;
            top: 100%;
            left: 0px;
            width: 200px;
            background: #fff;
            padding: 10px 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            z-index: 9;
            opacity: 0;
            visibility: hidden;
            transition: all .4s ease 0s;
            border-top: 2px solid #00c292;
        }

        .main-menu-lv-int ul.main-menu-lv li:hover ul.menu-dp-lt {
            z-index: 9;
            opacity: 1;
            visibility: visible;
            transition: all .4s ease 0s;
        }

        .main-menu-lv-int ul.main-menu-lv li ul.menu-dp-lt li a {
            display: block;
            text-align: left;
            padding: 8px 0px;
            color: #333;
            transition: all .4s ease 0s;
        }

        .main-menu-lv-int ul.main-menu-lv li:hover ul.menu-dp-lt li a:hover {
            color: #00c292;
            transition: all .4s ease 0s;
        }

        .main-menu-lv-int ul.main-menu-lv li ul.menu-dp-lt li a:hover {
            color: #00c292;
            padding: 8px 5px;
            transition: all .4s ease 0s;
        }

        .main-menu-lv-int ul.main-menu-lv.effect-tran-mn li ul.menu-dp-lt {
            top: 130%;
            transition: all .4s ease 0s;
        }

        .main-menu-lv-int ul.main-menu-lv.effect-tran-mn li:hover ul.menu-dp-lt {
            top: 100%;
            transition: all .4s ease 0s;
        }

        /*----------------------------------------*/
        /*  43.  Map CSS
/*----------------------------------------*/
        .google-map-single {
            width: 100%;
            height: 300px;
        }

        #map2,
        #googleMap,
        #map86,
        #map7 {
            height: 100%;
        }

        /*----------------------------------------*/
        /*  44. Image Cropper CSS
/*----------------------------------------*/
        .maincrop-img {
            display: flex;
        }

        .img-preview-custom {
            height: 200px;
            width: 280px;
            overflow: hidden;
            margin-right: 20px;
            margin-bottom: 5px;
        }

        .image-crp-img {
            margin-top: 30px;
        }

        .image-crp-int h4,
        .image-crp-img h4,
        .cp-img-anal h4 {
            font-size: 20px;
            color: #333;
        }

        .images-action-pro .btn {
            color: #fff;
        }

        .nk-cd-ed-wp .cm-s-ambiance .CodeMirror-gutters {
            background: #00c292;
        }

        /*----------------------------------------*/
        /*  45. Bar Chart CSS
/*----------------------------------------*/

        #dynamic-chart,
        #bar-chart {
            height: 279px;
            margin-top: 20px;
        }

        .chat-inputbar .form-group,
        .todo-inputbar .form-group {
            margin-bottom: 0px;
        }

        #dynamic-chart.flot-chart.widget-dynamic-chart {
            height: 319px;
        }

        #bar-chart.flot-chart.bar-three.bar-hm-three {
            height: 308px;
        }

        #dynamic-chart.flot-chart.dyn-ctn-fr.bar-hm-three {
            height: 308px;
        }

        #bar-chart.flot-chart.flot-chr-pro,
        #dynamic-chart.flot-chart.flot-chr-pro {
            margin-top: 0px;
        }

        /*----------------------------------------*/
        /*  46. overwriting CSS
/*----------------------------------------*/
        .contact-map.widget-contact-map {
            height: 187px;
        }

        .contact-list.widget-contact-list {
            padding: 20px 0px 12px 0px;
        }

        .contact-dt ul.contact-list.widget-contact-list {
            margin-bottom: 0px;
        }

        .contact-hd.widget-ctn-hd p {
            margin-bottom: 0px;
        }

        .form-single.widget-form input[type="text"]:focus {
            border: 0px solid #00c292;
        }

        .form-single.widget-form {
            padding: 0px 0px;
        }

        .widget-form input[type="email"],
        .cmp-email-over input[type="email"],
        .widget-form input[type="number"],
        .cmp-email-over input[type="text"],
        .widget-form textarea {
            box-shadow: none;
            border-top: 0px solid #ccc;
            border-left: 0px solid #ccc;
            border-right: 0px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding: 0px;
            border-radius: 0px;
            margin: 0px 0px;
        }

        .widget-form input[type="email"]:focus,
        .cmp-email-over input[type="email"]:focus,
        .widget-form input[type="number"]:focus,
        .cmp-email-over input[type="text"]:focus,
        .widget-form textarea:focus {
            box-shadow: none;
            border-top: 0px solid #ccc;
            border-left: 0px solid #ccc;
            border-right: 0px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding: 0px;
        }

        .btn-group.nk-email-inbox .btn-default {
            border: 1px solid transparent;
        }

        .btn-group.nk-email-inbox .btn-default:hover {
            background: #00c292;
            border: 1px solid #00c292;
        }

        .cmp-int-box .note-popover .popover .popover-content>.btn-group,
        .cmp-int-box .panel-heading.note-toolbar>.btn-group {
            margin-right: 2px;
        }

        .note-editable.panel-body h2 {
            font-size: 16px;
            color: #333;
        }

        .note-editable.panel-body .vw-tr {
            display: block;
        }

        .cmp-int-box .note-editor .note-editing-area .note-editable {
            padding: 20px;
        }

        .todo-flex {
            display: flex;
        }

        .btn.notika-add-todo,
        .btn.notika-chat-btn {
            border-radius: 0px;
            position: relative;
            top: 2px;
            padding: 6px 25px;
        }

        .chosen-container-single .chosen-search input[type="text"] {
            background: white url(chosen-sprite.png) no-repeat 100% -20px;
            background: url(chosen-sprite.png) no-repeat 100% -45px;
        }

        .modal-footer .btn-primary[disabled]:focus,
        .modal-footer .btn-primary[disabled]:hover {
            background: #00c292;
        }

        .menu-it-icon-pro i {
            font-size: 18px;
            margin-right: 3px;
            position: relative;
            top: 2px;
        }

        .menu-it-icon-pro.mn-ic-cl i {
            color: #00c292;
        }

        /*----------------------------------------*/
        /*  47. Sidebar Left CSS
/*----------------------------------------*/
        .left-sidebar-pro {
            z-index: 9999;
            width: 200px;
            -webkit-box-shadow: 20px 0 20px -20px #d3d7e9;
            -moz-box-shadow: 20px 0 20px -20px #d3d7e9;
            box-shadow: 20px 0 20px -20px #d3d7e9;
            transition: all 0.3s ease 0s;
        }

        .sidebar-nav.left-sidebar-menu-pro ul {
            background: #fff;
        }

        #sidebar {
            min-width: 200px;
            background: #fff;
            color: #fff;
            position: fixed;
            transition: all 0.3s ease 0s;
            z-index: 999;
            height: 100%;
            -webkit-box-shadow: 20px 0 20px -20px #d3d7e9;
            -moz-box-shadow: 20px 0 20px -20px #d3d7e9;
            box-shadow: 20px 0 20px -20px #d3d7e9;
            top: 50px;
        }

        #sidebar .sidebar-header {
            background: #fff;
        }

        .sidebar-header {
            text-align: center;
        }

        .sidebar-nav {
            background: #fff;
        }

        .sidebar-nav .metismenu {
            background: #fff;
        }

        .sidebar-user-profile {
            text-align: center;
            padding: 40px 30px 30px 30px;
            background: #f5f5f5;
            position: relative;
            z-index: 99;
        }

        .sidebar-user-profile .mn-us-pro {
            display: none;
        }

        .sidebar-user-profile .sd-user-profile {
            border-radius: 50%;
        }

        .sidebar-nav.left-sidebar-menu-pro .metismenu a:hover,
        .sidebar-nav.left-sidebar-menu-pro .metismenu a:focus,
        .sidebar-nav.left-sidebar-menu-pro .metismenu a:active {
            color: #fff;
            background: #00c292;
        }

        .sidebar-nav.left-sidebar-menu-pro .metismenu li a:hover .icon-wrap,
        .sidebar-nav.left-sidebar-menu-pro .metismenu li a:focus .icon-wrap,
        .sidebar-nav.left-sidebar-menu-pro .metismenu li a:active .icon-wrap {
            color: #fff;
        }

        .sidebar-nav.left-sidebar-menu-pro .metismenu li .icon-wrap {
            position: relative;
            top: 3px;
        }

        .sidebar-nav.left-sidebar-menu-pro ul.metismenu li ul.submenu-angle li a {
            font-size: 14px;
        }

        .sidebar-user-profile h2 {
            font-size: 16px;
            color: #333;
            margin: 5px 0px;
        }

        .profile-action {
            margin-top: 10px;
        }

        .profile-action ul.pro-action-mn li {
            display: inline-block;
            border-right: 1px solid #e4e7f2;
        }

        .profile-action ul.pro-action-mn li:first-child {
            border-left: 1px solid #e4e7f2;
        }

        .profile-action ul.pro-action-mn li a {
            font-size: 18px;
            color: #333;
            margin: 0px 10px;
            transition: all .4s ease 0s;
        }

        .profile-action ul.pro-action-mn li a:hover {
            color: #00c292;
            transition: all .4s ease 0s;
        }

        .sidebar-nav.left-sidebar-menu-pro .metismenu .has-arrow:after {
            font-size: 14px;
        }

        .all-content-wrapper {
            margin-left: 200px;
            transition: all 0.3s ease 0s;
        }

        .rtl-layout.mini-navbar .all-content-wrapper {
            margin-right: 80px;
        }

        .comment-scrollbar {
            height: 400px;
        }

        .comment-scrollbar .mCSB_outside+.mCSB_scrollTools {
            right: -2px;
            top: 5px;
        }

        .menu-switcher-pro {
            border-right: 1px solid #31b191;
            margin-right: 10px;
            padding: 4px 0px;
        }

        .menu-switcher-pro .btn.bar-button-pro {
            background: #00c292;
            border: none;
            outline: none;
            box-shadow: none;
            font-size: 18px;
            position: relative;
            left: 3px;
        }

        .menu-switcher-pro .btn.bar-button-pro:hover,
        .menu-switcher-pro .btn.bar-button-pro:focus,
        .menu-switcher-pro .btn.bar-button-pro:active {
            background: #00c292;
            border: none;
            outline: none;
            box-shadow: none;
        }

        #sidebar.active {
            min-width: 80px;
            max-width: 80px;
            text-align: center;
            transition: all 0.3s ease 0s;
        }

        #sidebar.active .sidebar-user-profile {
            padding: 40px 15px 30px 15px;
        }

        #sidebar.active .sidebar-user-profile h2 {
            display: none;
        }

        #sidebar.active .profile-action ul.pro-action-mn li:first-child {
            border-left: 0px solid #e4e7f2;
        }

        #sidebar.active .profile-action ul.pro-action-mn li {
            border-right: 0px solid #e4e7f2;
            margin: 5px 0px;
        }

        #sidebar.active .sidebar-nav ul.metismenu li ul.submenu-angle {
            position: absolute;
            right: -180px;
            top: 0px;
            text-align: left;
            width: 180px;
            background: #fff;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .175);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .175);
        }

        #sidebar.active .mCustomScrollBox {
            overflow: unset;
        }

        #sidebar.active .mCSB_container {
            overflow: unset;
        }

        #sidebar.active .comment-scrollbar {
            height: 238px;
        }

        #sidebar.active .sidebar-nav ul.metismenu li ul.submenu-angle.notification-mini-nb-dp {
            top: -270px;
        }

        #sidebar.active .sidebar-nav ul.metismenu li ul.submenu-angle.pages-mini-nb-dp {
            top: -150px;
        }

        .mini-navbar .all-content-wrapper {
            margin-left: 80px;
            transition: all 0.3s ease 0s;
        }

        #sidebar.active .metismenu li .submenu-angle li a {
            padding: 12px 20px 12px 20px;
        }

        #sidebar.active .mCSB_scrollTools {
            height: 370px;
        }

        /*----------------------------------------*/
        /*  48. Small sidebar CSS
/*----------------------------------------*/
        .left-sidebar-pro.small-sidebar-df {
            width: 180px;
        }

        .left-sidebar-pro.small-sidebar-df #sidebar {
            min-width: 180px;
        }

        .left-sidebar-pro.small-sidebar-df #sidebar.active {
            min-width: 80px;
        }

        .all-content-wrapper.small-ctn-wp {
            margin-left: 180px;
        }

        .mini-navbar .all-content-wrapper.small-ctn-wp {
            margin-left: 80px;
        }

        /*----------------------------------------*/
        /*  49. large sidebar CSS
/*----------------------------------------*/
        .left-sidebar-pro.large-sidebar-df {
            width: 220px;
        }

        .left-sidebar-pro.large-sidebar-df #sidebar {
            min-width: 220px;
        }

        .left-sidebar-pro.large-sidebar-df #sidebar.active {
            min-width: 80px;
        }

        .all-content-wrapper.large-ctn-wp {
            margin-left: 220px;
        }

        .mini-navbar .all-content-wrapper.large-ctn-wp {
            margin-left: 80px;
        }

        /*----------------------------------------*/
        /*  50. Mini sidebar CSS
/*----------------------------------------*/
        .left-sidebar-pro.mini-sidebar-ld {
            width: 80px;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar {
            min-width: 80px;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar.active {
            min-width: 200px;
        }

        .left-sidebar-pro.mini-sidebar-ld .mini-click-non {
            display: none;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar.active .mini-click-non {
            display: inline-block;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar .sidebar-nav ul.metismenu li ul.submenu-angle {
            position: absolute;
            right: -180px;
            top: 0px;
            text-align: left;
            width: 180px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .175);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .175);
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar .sidebar-nav ul.metismenu li ul.submenu-angle.mini-layout-one {
            top: -315px;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar .sidebar-nav ul.metismenu li ul.submenu-angle.mini-layout-two {
            top: -100px;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar .sidebar-nav ul.metismenu li ul.submenu-angle.mini-layout-three {
            top: -50px;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar .sidebar-nav ul.metismenu li ul.submenu-angle.mini-layout-four {
            top: -450px;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar .sidebar-nav ul.metismenu li ul.submenu-angle.mini-layout-five {
            top: -270px;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar.active .sidebar-nav ul.metismenu li ul.submenu-angle {
            position: unset;
            right: -180px;
            top: 0px;
            text-align: left;
            width: 200px;
            box-shadow: none;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar .mCSB_container {
            overflow: unset;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar .mCustomScrollBox {
            overflow: unset;
        }

        .left-sidebar-pro.mini-sidebar-ld .sidebar-nav.left-sidebar-menu-pro .metismenu .has-arrow:after {
            display: none;
        }

        .left-sidebar-pro.mini-sidebar-ld .sidebar-user-profile h2 {
            display: none;
        }

        .left-sidebar-pro.mini-sidebar-ld .profile-action ul.pro-action-mn li:first-child {
            border-left: 0px solid #e4e7f2;
        }

        .left-sidebar-pro.mini-sidebar-ld .profile-action ul.pro-action-mn li {
            border-right: 0px solid #e4e7f2;
            display: block;
            margin: 5px 0px;
        }

        .left-sidebar-pro.mini-sidebar-ld .sidebar-user-profile {
            padding: 40px 10px 30px 10px;
            position: relative;
            z-index: 9;
        }

        .left-sidebar-pro.mini-sidebar-ld .sidebar-nav .metismenu a {
            text-align: center;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar.active .sidebar-nav .metismenu a {
            text-align: left;
        }

        .left-sidebar-pro.mini-sidebar-ld .sidebar-nav.left-sidebar-menu-pro ul.metismenu li ul.submenu-angle li a {
            text-align: left;
            padding: 12px 20px 12px 20px;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar.active .comment-scrollbar {
            height: 400px;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar .comment-scrollbar {
            height: 400px;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar.active .sidebar-nav.left-sidebar-menu-pro .metismenu .has-arrow:after {
            display: block;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar.active .sidebar-user-profile h2 {
            display: block;
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar.active .profile-action ul.pro-action-mn li {
            display: inline-block;
            margin: 0px 0px
        }

        .left-sidebar-pro.mini-sidebar-ld #sidebar.active .sidebar-nav.left-sidebar-menu-pro ul.metismenu li ul.submenu-angle li a {
            text-align: left;
            padding: 10px 15px 10px 40px;
            position: relative;
            display: block;
        }

        .all-content-wrapper.mini-sidebar-ctn {
            margin-left: 80px;
        }

        .mini-navbar .all-content-wrapper.mini-sidebar-ctn {
            margin-left: 200px;
        }

        .box-layout.mini-navbar .menu-switcher-pro {
            margin-right: 5px;
        }

        /*----------------------------------------*/
        /*  51. Logo Center Layout CSS
/*----------------------------------------*/
        .menu-switcher-pro.logo-ctn-sf {
            margin-right: 38px;
        }

        .logo-area.ld-lg-ctn {
            text-align: center;
        }

        /*----------------------------------------*/
        /*  52. Header Fixed Layout CSS
/*----------------------------------------*/
        .default-layout-dv.header-fixed-bd-hd {
            height: 600px;
        }

        .header-top-area.dark-header,
        .footer-copyright-area.dark-footer {
            background: #232b32;
        }

        .header-top-area.dark-header .menu-switcher-pro .btn.bar-button-pro {
            background: #232b32;
        }

        .header-top-area.dark-header .menu-switcher-pro {
            border-right: 1px solid #363c3a;
        }

        .header-top-area.dark-header .nav.notika-top-nav>li>a:focus,
        .header-top-area.dark-header .nav.notika-top-nav>li>a:hover,
        .header-top-area.dark-header .nav.notika-top-nav>li>a:active {
            background: #232b32;
        }

        .header-top-area.dark-header .nav.notika-top-nav .open>a,
        .header-top-area.dark-header .nav.notika-top-nav .open>a:focus,
        .header-top-area.dark-header .nav.notika-top-nav .open>a:hover {
            background: #232b32;
        }

        /*----------------------------------------*/
        /*  53. Dark Sidebar Layout CSS
/*----------------------------------------*/
        .dark-sidebar-ld .sidebar-user-profile,
        .dark-sidebar-ld .sidebar-nav.left-sidebar-menu-pro ul {
            background: #232b32;
        }

        .dark-sidebar-ld .sidebar-nav.left-sidebar-menu-pro ul,
        .dark-sidebar-ld #sidebar.active .sidebar-nav ul.metismenu li ul.submenu-angle,
        .dark-sidebar-ld #sidebar {
            background: #2e3841;
        }

        .dark-sidebar-ld .sidebar-user-profile h2 {
            color: #fff;
        }

        .dark-sidebar-ld .profile-action ul.pro-action-mn li a {
            color: #fff;
        }

        .dark-sidebar-ld .profile-action ul.pro-action-mn li:first-child {
            border-left: 1px solid #3c3f48;
        }

        .dark-sidebar-ld .profile-action ul.pro-action-mn li {
            border-right: 1px solid #3c3f48;
        }

        .dark-sidebar-ld .sidebar-nav .metismenu a,
        .dark-sidebar-ld .sidebar-nav .metismenu li .icon-wrap {
            color: #fff;
        }

        /*----------------------------------------*/
        /*  54. Box Layout CSS
/*----------------------------------------*/
        body.box-layout {
            margin: 0 auto;
            max-width: 1200px;
            background: #000000 !important;
        }

        .box-layout-wp-bg {
            background: #F6F8FA;
        }

        .logo-area.logo-left {
            position: relative;
            left: -24px;
        }

        /*----------------------------------------*/
        /*  55. offcanvas CSS
/*----------------------------------------*/
        .offcanvas #sidebar.active {
            min-width: 200px;
            left: -410px;
        }

        .offcanvas.mini-navbar .all-content-wrapper {
            margin-left: 0px;
        }

        /*----------------------------------------*/
        /*  56. Fullscreen Layout CSS
/*----------------------------------------*/
        .fullscreen .all-content-wrapper {
            margin-left: 0px;
        }

        .fullscreen #sidebar {
            margin-left: -410px;
        }

        .fullscreen #sidebar.active {
            min-width: 200px;
            margin-left: 0px;
        }

        .fullscreen #sidebar.active .sidebar-user-profile h2 {
            display: block;
        }

        .fullscreen #sidebar.active .profile-action ul.pro-action-mn li {
            border-right: 1px solid #e4e7f2;
        }

        .fullscreen #sidebar.active .profile-action ul.pro-action-mn li:first-child {
            border-left: 1px solid #e4e7f2;
        }

        .fullscreen #sidebar.active .metismenu li .mini-click-non {
            display: inline-block;
        }

        .fullscreen .sidebar-nav .metismenu a {
            text-align: left;
        }

        .fullscreen.mini-navbar .all-content-wrapper {
            margin-left: 200px;
        }

        .fullscreen #sidebar.active .mCSB_container {
            overflow: hidden;
        }

        .fullscreen #sidebar.active .sidebar-nav ul.metismenu li ul.submenu-angle {
            position: unset;
            box-shadow: none;
            width: 100%;
        }

        .fullscreen #sidebar.active .metismenu li .submenu-angle li a {
            padding: 12px 20px 12px 40px;
        }

        .fullscreen #sidebar.active .metismenu .has-arrow:after {
            display: block;
            position: absolute;
            content: "";
            width: .5em;
            height: .5em;
            border-width: 1px 0 0 1px;
            border-style: solid;
            border-color: initial;
            right: 1em;
            -webkit-transform: rotate(-45deg) translateY(-50%);
            -ms-transform: rotate(-45deg) translateY(-50%);
            -o-transform: rotate(-45deg) translateY(-50%);
            transform: rotate(-45deg) translateY(-50%);
            -webkit-transform-origin: top;
            -ms-transform-origin: top;
            -o-transform-origin: top;
            transform-origin: top;
            top: 50%;
            -webkit-transition: all .3s ease-out;
            -o-transition: all .3s ease-out;
            transition: all .3s ease-out;
        }

        /*----------------------------------------*/
        /*  57. Breadcomb CSS
/*----------------------------------------*/
        .breadcomb-area {
            margin-bottom: 30px;
        }

        .breadcomb-wp {
            display: flex;
        }

        .breadcomb-icon i {
            font-size: 20px;
            color: #00c292;
            padding: 15px;
            position: relative;
            border-radius: 50%;
            border-right: 1px solid #ccc;
            border-top: 1px solid #ccc;
            display: block;
        }

        .breadcomb-list {
            padding: 20px 20px;
            background: #fff;
        }

        .breadcomb-ctn {
            margin-left: 20px;
        }

        .breadcomb-ctn h2 {
            font-size: 20px;
            color: #333;
        }

        .breadcomb-ctn p {
            font-size: 14px;
            color: #333;
            margin: 0px;
        }

        .breadcomb-report {
            margin: 8px 0px;
            text-align: right;
        }

        .breadcomb-report .btn {
            background: #00c292;
            color: #fff;
            box-shadow: none;
            border-radius: 3px;
            outline: none;
        }

        .breadcomb-report .btn:focus,
        .breadcomb-report .btn:active,
        .breadcomb-report .btn:hover {
            background: #00c292;
            box-shadow: none;
            outline: none;
        }

        #sidebar.active .sidebar-nav ul.metismenu li ul.submenu-angle.layout-mini-tl {
            top: -322px;
        }

        /*----------------------------------------*/
        /*  58. Notika Icon CSS
/*----------------------------------------*/
        .notika-icon-pro a {
            text-align: center;
            background: #F6F8FA;
            padding: 10px 15px;
            border-radius: 3px;
            margin: 5px 5px;
        }

        .notika-icon-pro i {
            font-size: 25px;
            color: #333;
            position: relative;
            top: 2px;
        }

        /*----------------------------------------*/
        /*  59. Notika custom scrollbar CSS
/*----------------------------------------*/
        .mCS-light-1.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
            background-color: #00c292;
        }

        .mCS-light-1.mCSB_scrollTools .mCSB_draggerRail {
            background-color: #ccc;
        }
    </style>
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css1/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js1/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div class="summernote-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="summernote-wrap mg-t-30">
<<<<<<< HEAD
                        <!-- <div class="cmp-tb-hd">
                            <h2>HTML Editor</h2>
                            <p>Super Simple WYSIWYG Editor on Bootstrap</p>
                        </div> -->
                        <!-- <div class="cmp-tb-hd bsc-smp-sm">
                            <label>Basic Example</label>
                        </div> -->
=======
                        <div class="cmp-tb-hd">
                            <h2>HTML Editor</h2>
                            <p>Super Simple WYSIWYG Editor on Bootstrap</p>
                        </div>
                        <div class="cmp-tb-hd bsc-smp-sm">
                            <label>Basic Example</label>
                        </div>
>>>>>>> amir_dev1
                        <div class="html-editor"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD

=======
>>>>>>> amir_dev1
    <script src="js1/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js1/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js1/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js1/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js1/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js1/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js1/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js1/counterup/jquery.counterup.min.js"></script>
    <script src="js1/counterup/waypoints.min.js"></script>
    <script src="js1/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js1/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js1/sparkline/jquery.sparkline.min.js"></script>
    <script src="js1/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="js1/flot/jquery.flot.js"></script>
    <script src="js1/flot/jquery.flot.resize.js"></script>
    <script src="js1/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="js1/knob/jquery.knob.js"></script>
    <script src="js1/knob/jquery.appear.js"></script>
    <script src="js1/knob/knob-active.js"></script>
    <!-- Input Mask JS
        ============================================ -->
    <script src="js1/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="js1/icheck/icheck.min.js"></script>
    <script src="js1/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
        ============================================ -->
    <script src="js1/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js1/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="js1/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="js1/datapicker/bootstrap-datepicker.js"></script>
    <script src="js1/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="js1/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
        ============================================ -->
    <script src="js1/color-picker/farbtastic.min.js"></script>
    <script src="js1/color-picker/color-picker.js"></script>
    <!--  notification JS
        ============================================ -->
    <script src="js1/notification/bootstrap-growl.min.js"></script>
    <script src="js1/notification/notification-active.js"></script>
    <!--  summernote JS
        ============================================ -->
    <script src="js1/summernote/summernote-updated.min.js"></script>
    <script src="js1/summernote/summernote-active.js"></script>
    <!-- dropzone JS
        ============================================ -->
    <script src="js1/dropzone/dropzone.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="js1/wave/waves.min.js"></script>
    <script src="js1/wave/wave-active.js"></script>
    <!--  chosen JS
        ============================================ -->
    <script src="js1/chosen/chosen.jquery.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="js1/chat/jquery.chat.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="js1/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js1/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js1/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="js1/tawk-chat.js"></script>
</body>

</html>