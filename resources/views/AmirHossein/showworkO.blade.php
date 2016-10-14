<!DOCTYPE html>
<html lang="ar">
<!--
/**
 * Created by PhpStorm.
 * User: Amir Hossein
 * Date: 8/15/2016
 * Time: 1:43 PM
 */
 -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Intermediate</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('./AmirHossein/Css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./AmirHossein/Css/normalize.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./AmirHossein/Css/jquery.tagsinput.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./AmirHossein/Css/tagsinput.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./AmirHossein/Css/addwork_base.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./AmirHossein/Css/showwork.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./AmirHossein/Css/showworko.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./AmirHossein/Css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">

    <style>
        ul.messages {
            padding: 0;
            list-style: none;
        }

        .btn-success {
        //background: #26B99A;
        //border: 1px solid #169F85;
        }
        .btn {
            border-radius: 3px;
        }
        .buttons, button, .btn {
            margin-bottom: 0px;
            margin: auto;
        }
    </style>

    <style>
        /* The Modal (background) */
        .modall {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 10000000; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modall-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 50%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        /* The Close Button */
        .close2 {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close2:hover,
        .close2:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .modal-body {padding: 2px 16px;}

        .modall-footer {
            padding: 2px 2px;
            padding:0;
        //background-color: #5cb85c;
            color: white;
        }
    </style>

</head>

<body dir="rtl;" class="nav-md">

<div class="container body">
    <!-- top navigation -->
    <div class="top_nav " style="z-index: 1000000;">
        <div class="nav_menu" style="background-color: #222">
            <nav class="navbar navbar-inverse" style="margin: 0; border: 0;" role="navigation">

                <div>
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt="">{{Auth::user()->name}}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="{{url::to('/')}}/AmirHossein/Image/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="{{url::to('/')}}/AmirHossein/Image/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="{{url::to('/')}}/AmirHossein/Image/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="{{url::to('/')}}/AmirHossein/Image/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-offset-4 col-md-4" >

                    <div style="margin:0 auto; font-size: 30px; align-content: center; font-family: 'B Baran'; color: white">SkillFarm</div>
                </div>
                <div class="nav toggle col-md-offset-11 col-md-1 " style="float: right;">
                    <a id="menu_toggle pull-right" style="color: white;"><i class="fa fa-bars"></i></a>
                </div>

            </nav>
        </div>
    </div>
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left" style="margin-top: 1%;">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group top_search">
                    <div class="input-group">
                                <span class="input-group-btn">
                                     <button class="btn btn-default" type="button"> !جستجو </button>
                                 </span>
                        <input type="text" class="form-control" style="direction: RTL;" placeholder="جستجو در سایت...">
                    </div>
                </div>
            </div>
            <div class="title_right">
                <div class="form-group pull-right">
                    <h3> صفحه کار </h3>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">

                        <div class="col-md-4">
                            <ul class="nav nav-pills" role="tablist">

                                <li role="presentation" class="dropdown">

                                    <a id="drop4" href="#" class="dropdown-toggle" style="font-size: 15px;" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                        {{$workinf->status}}

                                        <span class="caret"></span>
                                    </a>
                                    <ul id="menu6" class="dropdown-menu animated fadeInDown" role="menu">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Active</a>
                                        </li>

                                        <li id="myBtn" role="presentation"><a tabindex="-1" role="menuitem" style=""  >InActive</a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                            <!-- The Modal Angular -->
                            <div id="myModal" class="modall">
                                <!-- Modal content -->
                                <div class="modall-content">
                                    <div class="modal-header">
                                        <span class="close2">×</span>
                                        <h2 style="direction: rtl">

                                        </h2>
                                    </div>
                                    <div class="modal-body" style="direction: rtl">
                                        <p style="color: black; font-size: 20px;">
                                            در صورت تایید دیگران دیگر قادر نخواهند بود تا باری انجام این پروژه داوطلب شوند!!!!
                                        </p>
                                        <p style="font-size: 17px; color: black;">
                                            در صورت اطمینان دکمه تایید را فشار دهید...
                                        </p>
                                    </div>
                                    <div class="modall-footer">
                                        <form action="/deactivate" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{$workinf->id}}" name="workid">
                                            <button type="submit" class="btn btn-success" style="border-radius: 0;">
                                                تایید
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--
                        <div class="col-md-3" style="margin: auto">
                            <a class="btn btn-success"> درخواست دهندگان <i class="fa fa-edit m-right-xs"></i></a>
                        </div>
                        -->

                        <div class="nav navbar-right panel_toolbox">
                            <h2> پنل مشاهده و بررسی پروژه </h2>
                        </div>

                        <!--

                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>

                        -->
                        <div class="clearfix"></div>
                    </div>

                    <!-- Contents in Page -->
                    <div class="x_content">

                        <!-- Owner and About Work -->
                        <div class="row" style="direction: RTL;">
                            <div class="col-md-12">




                                <div class="col-md-4 col-sm-3 col-xs-12 profile_left" style="float: right">
                                    <div class="x_content">

                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab1" class="nav nav-tabs bar_tabs right" dir="rtl" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab_content11" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"> درخواست دهندگان </a>
                                                </li>
                                                <!--
                                                    <li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false"> نظر کار دهنده </a>
                                                    </li>

                                                    <li role="presentation" class=""><a href="#tab_content33" role="tab" id="profile-tabb3" data-toggle="tab" aria-controls="profile" aria-expanded="false"> کارگیرنده </a>
                                                    </li>
                                                    <li role="presentation" class=""><a href="#tab_content44" role="tab" id="profile-tabb3" data-toggle="tab" aria-controls="profile" aria-expanded="false"> کاردهنده </a>
                                                    </li>
                                                </ul>
                                                <div id="myTabContent2" class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content11" aria-labelledby="home-tab">
                                                        <div class="x_content">
                                                            <ul class="list-unstyled msg_list" style="padding: 0;">

                                                                @foreach($apps as $app)
                                                        <li>
                                                            <!-- Owner and About Work -->
                                                <div class="col-md-12" style="direction: rtl; padding-right: 0;">
                                                    <!-- Work Owner Introduction Part -->
                                                    <div class="col-sm-12 col-xs-12 profile_left" style="float: right; padding-right: 4px; padding-left: 0px; width: 12%;">
                                                        <a class="nota" style="padding:0px 0px !important;">
                                                                                        <span class="image">
                                                                                            <img src="{{URL::to('/')}}/AmirHossein/Image/img.jpg" alt="img" />
                                                                                        </span>
                                                            <button class="btn btn-success btn-xs" style="float: left; width: 90%; border: none; border-radius: 0;" type="button"> <i class="fa fa-user">
                                                                </i> <i class="fa fa-comments-o"></i> </button>
                                                        </a>
                                                    </div>

                                                    <!-- /Work Owner Introduction Part -->
                                                    <div class="col-md-11 col-sm-3 col-xs-12 profile_left amir" style="padding-left: 0; width: 87%; direction: rtl;">
                                                        <div>
                                                            <div class="page-title" style="padding: 0;  height: auto">
                                                                <div class="title_left">
                                                                    <div class="col-md-5 col-sm-5 col-xs-12 top_search" style="padding: 0;">
                                                                        <div class="pull-right" style="padding: 0; margin: 0;">
                                                                                                            <span class="time">
                                                                                                                3 دقیقه پیش
                                                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="title_right" style="padding: 0;">
                                                                    <div class="pull-right" style="padding: 0;">
                                                                                                    <span>
                                                                                                        امیرحسین سروری
                                                                                                    </span>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div dir="rtl"  style="float: right; direction: rtl; text-align: right;">
                                                                                        <span class="message" style="float: right; ">
                                                                                            <p style="float: right; ">
                                                                                                تسیاسیاتسا تسیاتساتسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتساتسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتساتسیاتسا تسیاتسا تسیاتسا تسیاتسا
                                                                                            </p>
                                                                                        </span>
                                                        </div>

                                                    </div>
                                                </div>

                                                </li>
                                                @endforeach

                                            </ul>
                                            <div style="margin: auto; float:left; margin-left: 11px;">
                                                {{ $apps->links() }}
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content22" aria-labelledby="profile-tab">
                                        <div class="col-md-12 col-xs-12  widget_tally_box" style="float: right; width: 100%">
                                            <div class="x_panel fixed_height_390" >

                                                <div class="x_content">

                                                    <div style="text-align: center; margin-bottom: 17px">
                                                        <ul class="verticle_bars list-inline">
                                                            <li>
                                                                <div class="progress vertical progress_wide bottom">
                                                                    <div aria-valuenow="65" style="height: 65%;" class="progress-bar progress-bar-dark" role="progressbar" data-transitiongoal="65"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="progress vertical progress_wide bottom">
                                                                    <div aria-valuenow="85" style="height: 85%;" class="progress-bar progress-bar-gray" role="progressbar" data-transitiongoal="85"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="progress vertical progress_wide bottom">
                                                                    <div aria-valuenow="45" style="height: 45%;" class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="45"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="progress vertical progress_wide bottom">
                                                                    <div aria-valuenow="65" style="height: 65%;" class="progress-bar progress-bar-dark" role="progressbar" data-transitiongoal="65"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="progress vertical progress_wide bottom">
                                                                    <div aria-valuenow="85" style="height: 85%;" class="progress-bar progress-bar-gray" role="progressbar" data-transitiongoal="85"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="progress vertical progress_wide bottom">
                                                                    <div aria-valuenow="45" style="height: 45%;" class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="45"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="divider"></div>

                                                    <ul class="legend list-unstyled" style="margin-right: 0; padding-right: 0;">
                                                        <li>
                                                            <p>
                                                                <span class="icon"><i class="fa fa-square dark"></i></span> <span class="name"> فاکتور سنجش اول </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span class="icon"><i class="fa fa-square grey"></i></span> <span class="name"> فاکتور سنجش دوم </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span class="icon"><i class="fa fa-square blue"></i></span> <span class="name"> فاکتور سنجش سوم </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span class="icon"><i class="fa fa-square green"></i></span> <span class="name"> فاکتو سنجش چهارم </span>
                                                            </p>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content33" aria-labelledby="profile-tab">

                                        <div dir="rtl" class="col-md-12 col-sm-3 col-xs-12 profile_left" style="float: right">
                                            <div class="col-md-4 profile_img" style="float: right">
                                                <!-- end of image cropping -->
                                                <div id="crop-avatar"><img class="img-responsive avatar-view" src="{{URL::to('/')}}/AmirHossein/Image/picture.jpg" alt="Avatar" title="Change the avatar"></div>
                                                <!-- end of image cropping -->
                                                <a class="btn btn-success" style="margin-top: 5px; margin-right: 2px"><i class="fa fa-edit m-right-xs"></i>GoTo Profile</a>
                                            </div>

                                            <div class="col-md-8"><h3>Desmond Davison</h3>
                                                <!-- Information About Owner -->
                                                <ul class="list-unstyled user_data">
                                                    <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                                                    </li>

                                                    <li>
                                                        <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                                                    </li>

                                                    <li class="m-top-xs">
                                                        <i class="fa fa-external-link user-profile-icon"></i>
                                                        <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                                                    </li>
                                                </ul>
                                                <!-- /Information About Owner -->
                                                <br />
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 5px;">
                                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                                booth letterpress, commodo enim craft beer mlkshk </p>
                                        </div>
                                        <!--
                                        <div class="col-md-12" style="border-bottom: 2px solid #E6E9ED; padding-right: 10%; margin-bottom: 10px;"></div>
                                        -->
                                        <div class="clearfix"></div>

                                        <section class="panel" style="margin-top: 10px;">
                                            <div class="x_title" style="direction: RTL;">
                                                <h4>Skills</h4>
                                                <div class="clearfix"></div>
                                            </div>
                                            <!--
                                            <div class="panel-body">
                                                <div class="col-md-12 col-xs-12  widget_tally_box" style="float: right; width: 100%; margin-top: 2px;">
                                                    <div class="x_panel fixed_height_390" >

                                                        <div class="x_content">

                                                            <div style="text-align: center; margin-bottom: 17px">
                                                                <ul class="verticle_bars list-inline">
                                                                    <li>
                                                                        <div class="progress vertical progress_wide bottom">
                                                                            <div aria-valuenow="65" style="height: 65%;" class="progress-bar progress-bar-dark" role="progressbar" data-transitiongoal="65"></div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="progress vertical progress_wide bottom">
                                                                            <div aria-valuenow="85" style="height: 85%;" class="progress-bar progress-bar-gray" role="progressbar" data-transitiongoal="85"></div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="progress vertical progress_wide bottom">
                                                                            <div aria-valuenow="45" style="height: 45%;" class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="45"></div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="progress vertical progress_wide bottom">
                                                                            <div aria-valuenow="65" style="height: 65%;" class="progress-bar progress-bar-dark" role="progressbar" data-transitiongoal="65"></div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="progress vertical progress_wide bottom">
                                                                            <div aria-valuenow="85" style="height: 85%;" class="progress-bar progress-bar-gray" role="progressbar" data-transitiongoal="85"></div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="progress vertical progress_wide bottom">
                                                                            <div aria-valuenow="45" style="height: 45%;" class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="45"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="divider"></div>

                                                            <ul class="legend list-unstyled" style="margin-right: 0; padding-right: 0;">
                                                                <li>
                                                                    <p>
                                                                        <span class="icon"><i class="fa fa-square dark"></i></span> <span class="name"> فاکتور سنجش اول </span>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p>
                                                                        <span class="icon"><i class="fa fa-square grey"></i></span> <span class="name"> فاکتور سنجش دوم </span>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p>
                                                                        <span class="icon"><i class="fa fa-square blue"></i></span> <span class="name"> فاکتور سنجش سوم </span>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p>
                                                                        <span class="icon"><i class="fa fa-square green"></i></span> <span class="name"> فاکتو سنجش چهارم </span>
                                                                    </p>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            -->
                                            <div class="panel-body">
                                                <!-- start skills -->
                                                <ul class="list-unstyled user_data">
                                                    <li>
                                                        <p>Web Applications</p>
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p>Website Design</p>
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p>Automation & Testing</p>
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p>UI / UX</p>
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- end of skills -->
                                            </div>
                                        </section>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content44" aria-labelledby="profile-tab">

                                        <div dir="rtl" class="col-md-12 col-sm-3 col-xs-12 profile_left" style="float: right">
                                            <div class="col-md-4 profile_img" style="float: right">
                                                <!-- end of image cropping -->
                                                <div id="crop-avatar"><img class="img-responsive avatar-view" src="{{URL::to('/')}}/AmirHossein/Image/picture.jpg" alt="Avatar" title="Change the avatar"></div>
                                                <!-- end of image cropping -->
                                                <a class="btn btn-success" style="margin-top: 5px; margin-right: 2px"><i class="fa fa-edit m-right-xs"></i>GoTo Profile</a>
                                            </div>

                                            <div class="col-md-8"><h3>Desmond Davison</h3>
                                                <!-- Information About Owner -->
                                                <ul class="list-unstyled user_data">
                                                    <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                                                    </li>

                                                    <li>
                                                        <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                                                    </li>

                                                    <li class="m-top-xs">
                                                        <i class="fa fa-external-link user-profile-icon"></i>
                                                        <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                                                    </li>
                                                </ul>
                                                <!-- /Information About Owner -->

                                                <br /></div>


                                        </div>
                                        <div class="col-md-12" style="margin-top: 5px;">
                                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                                booth letterpress, commodo enim craft beer mlkshk </p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    -->

                    <!-- About Work -->
                    <div class="col-md-8 col-sm-3 col-xs-12 profile_left" style="float: right"  role="main">
                        <div class="col-md-12" style="display: flex;">
                            <!--
                                        //profile part that i think this isn't a suitable place for it in the page!!!

                                        <div class="col-md-3" style="padding-left: 0%; align-items: stretch;">

                                            <div class="row" >
                                                <div class="col-md-12" style="padding: 0; border-bottom: 1px solid #e8e8e8;">
                                                    <div class= "col-md-12">
                                                        <div class="profile">
                                                            <div class="col-md-6">
                                                                <div class="profile_pic" style="">
                                                                    <img src="{{ URL::to('/') }}/AmirHossein/Image/amir.png" alt="..." class="img-circle profile_img">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <p style="float: right; font-size: 20px;"> کاردهنده </p>
                                                            </div>

                                                        </div>

                                                        <div class= "col-md-12"  style=" margin-bottom: 10px;">
                                                            <div class="profile">
                                                                <div class="profile_info">
                                                                    <h2 style="">John Doe</h2>
                                                                    <span>person</span>
                                                                    <span class="badge bg-green">220</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" style="padding: 0; margin-top: 10px">
                                                    <div class= "col-md-12">
                                                        <div class="profile">
                                                            <div class="col-md-6">
                                                                <div class="profile_pic" style="">
                                                                    <img src="{{ URL::to('/') }}/AmirHossein/Image/img.jpg" alt="..." class="img-circle profile_img">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <p style="float: right; font-size: 20px;"> کارگیرنده </p>
                                                            </div>

                                                        </div>

                                                        <div class= "col-md-12">
                                                            <div class="profile">
                                                                <div class="profile_info">
                                                                    <h2 style="">John Doe</h2>
                                                                    <span>person</span>
                                                                    <span class="badge bg-green">99</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                            </div>
                                            </div>
                                            -->

                            <div class="col-md-12" style="direction: RTL;">
                                <!-- start project-detail sidebar -->
                                <div class="col-md-12 col-sm-3 col-xs-12">
                                    <!-- About Work Panel -->
                                    <section class="panel">
                                        <div class="x_title" style="direction: RTL;">
                                            <h2 style="float: right;" > درباره پروژه </h2>
                                            <!-- Edit Work Only Owner -->
                                            <form action="Aeditwork" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{$workinf->id}}" name="workid">
                                                <div class="col-md-1" style="float: left;">
                                                    <button type="submit" class="btn btn-sm btn-default"> Edit </button>
                                                </div>
                                            </form>
                                            <!-- /Edit Work Only Owner -->
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="panel-body">
                                            <!-- title -->
                                            <h3 class="green"><i class="fa fa-paint-brush"></i> {{$workinf->subject}} </h3>
                                            <!-- /title -->

                                            <!-- details -->
                                            <p> {{$workinf->details}} </p>
                                            <!-- /details -->

                                            <br>
                                            <div class="project_detail">
                                                <br>
                                                <!-- Project Files -->
                                                <h5 style="font-size: 15px;" > فایل های پروژه </h5>
                                                <!---->
                                                <ul class="list-unstyled project_files">
                                                    <li><a href="{{ asset('AmirHossein/app/'.$workinf->filename) }}"><i class="fa fa-file-word-o"></i> Functional-requirements.docx</a>
                                                    </li>
                                                    <!--
                                                    <li><a href=""><i class="fa fa-file-pdf-o"></i> UAT.pdf</a>
                                                    </li>
                                                    <li><a href=""><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a>
                                                    </li>
                                                    <li><a href=""><i class="fa fa-picture-o"></i> Logo.png</a>
                                                    </li>
                                                    <li><a href=""><i class="fa fa-file-word-o"></i> Contract-10_12_2014.docx</a>
                                                    </li>
                                                    -->
                                                </ul>
                                                <!-- /Project Files -->
                                                <br>
                                                <!-- Connections to Fields -->
                                                <div class="col-md-12">
                                                    <h4> زیر شاخه های مرتبط با پروژه </h4>
                                                    <span class="label label-primary">programming</span>
                                                    <span class="label label-success">three</span>
                                                    <span class="label label-info">four</span>
                                                    <span class="label label-warning">five</span>
                                                    <span class="badge badge-success">42</span>
                                                </div>
                                                <!-- /Connections to Fields -->

                                                <!-- Budget and Date Informations -->
                                                <div class="col-md-12" style="margin-top: 40px; ">
                                                    <ul class="stats-overview">
                                                        <li>
                                                            <span class="name"> تاریخ بارگزاری </span>
                                                            <span class="value text-success"> {{$workinf->created_at}} </span>
                                                        </li>

                                                        <li>
                                                            <span class="name"> هزینه پیشنهادی </span>
                                                            <span class="value text-success"> {{$workinf->wage}} </span>
                                                        </li>

                                                        <li class="hidden-phone">
                                                            <span class="name"> تاریخ پایان کار </span>
                                                            <span class="value text-success"> {{$workinf->deadtime}} </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /Budget and Date Informations -->
                                                <!--
                                                <p class="title">Client Company</p>
                                                <p>Deveint Inc</p>
                                                <p class="title">Project Leader</p>

                                                <p>Tony Chicken</p>
                                                -->
                                            </div>
                                            <div style="align-content: center; ">
                                                <button type="button" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-success col-md-2" style="margin: 0 auto; text-align: center; margin-bottom: 10px; " > درخواست انجام کار </button>
                                                <div class="col-md-12" style="border-bottom: 3px solid #E6E9ED; padding-right: 10%; "></div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- About Work Panel -->

                                    @if($applicButton == 'Y')
                                            <!--
                                                        <button type="button" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-success col-md-2" style="margin-left: 5px; text-align: center; margin-bottom: 10px;" > درخواست انجام کار </button>
                                                        <div class="col-md-12" style="border-bottom: 3px solid #E6E9ED; padding-right: 10%; "></div>
                                                        -->
                                    @endif
                                            <!-- modals -->
                                    <!-- Large modal -->
                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <div class="x_title" style="border-bottom: none; margin-bottom: 0;">
                                                        <h2 style="float: right;" > فرم ثبت کار <small></small></h2>
                                                        <button type="button" class="close" style="float: left;" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                        </button>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <form class="form-horizontal form-label-left" action="Anewapplicant" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="modal-body">
                                                        <br />
                                                        <div class="form-group">
                                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                                <textarea class="form-control" rows="3" name="details" style="direction:RTL;" placeholder='توضیحات را وارد کنید...'></textarea>
                                                            </div>
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> توضیحات <span class="required">*</span>
                                                            </label>
                                                            <input type="hidden" value="{{$workinf->id}}" name="workid">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"> انصراف </button>
                                                        <button type="submit" class="btn btn-success"> تایید </button>
                                                        <!--
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                        -->
                                                    </div>
                                                </form>
                                                <!--
                                                    <h4>Text in a modal</h4>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    -->

                                            </div>
                                        </div>
                                    </div>

                                    <!--
                                    <div class="col-md-11 col-md-offset-1" style=" padding: 5px; margin: 1px; color: black;">
                                        تمنکستیبکنتشکسمینتبکشسینتبکشسنیتبکنتشکسیشکسنبکمسنیئکمتبکشتسنمیشبتکمنتشسیبشسیبشسیبشسزیشبقشسش شسیبش-
                                        <a href="alaki">amir</a>
                                    </div >
                                    <div class="col-md-12" style="border-bottom: 1px solid #E6E9ED; padding-right: 10%; "></div>
                                    <div class="col-md-11 col-md-offset-1" style=" padding: 5px; margin: 1px; color: black;">
                                        شکسنمتیبکنشتس شسنیکبت نتسشیکن سشکنیتب نشتسی بکشسینب شنسی شکسنمیب شنسیت کسشمینتب کمنشسیت کشسنیتب کنمتتسیش کشمسنیتب نکمنسیشتکبنتکشسنیتبکنشس-
                                        <a href="alaki">mohsen</a>
                                    </div>
                                    <div class="col-md-12" style="border-bottom: 1px solid #E6E9ED; padding-right: 10%;"></div>
                                    <div class="col-md-11 col-md-offset-1" style=" padding: 5px; margin: 1px; color: black;">
                                        سشنیتبکنشتسیبنشسمسنیسشکین شسکمنیتبکشمسنینبتشمکسی کشنسیتبکنت شکمسنیتب-
                                        <a href="alaki">sara</a>
                                    </div>
                                    <div class="col-md-12" style="border-bottom:1px solid #E6E9ED; padding-right: 10%;"></div>
                                    -->
                                    <br>
                                    <br>
                                    <br>
                                    <h4> نظرات کاربران درمورد مشکلات پروژه </h4>

                                    <!-- end of user messages -->
                                    <ul class="messages">

                                        @foreach($ambigs as $app)
                                            <li>
                                                <img src="{{URL::to('/')}}/AmirHossein/Image/picture.jpg" class="avatar" alt="Avatar">
                                                <div class="message_date">
                                                    <a href="" style="margin: 2px;">
                                                        <span class="glyphicon glyphicon-ok" style="color: green; font-size: 20px" aria-hidden="true"></span>
                                                    </a>
                                                    <a href="" style="margin: 2px;">
                                                        <span class="glyphicon glyphicon-remove" style="color: darkgray; font-size: 20px" aria-hidden="true"></span>
                                                    </a>

                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">{{$app->name}}</h4>
                                                    <blockquote class="message">
                                                        {{$app->description}}
                                                    </blockquote>
                                                    <!--
                                                    <br>
                                                    -->
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                    <div style="margin: auto; float: left;">
                                        {{ $ambigs->links() }}
                                    </div>
                                    <!-- end of user messages -->

                                    <button type="button" data-toggle="modal" style="font-size: 20px; color: darkgray;" data-target=".bs-example-modal-lg-1" class="btn btn-link" style="text-align: center; margin-bottom: 10px;" > ثبت نظر </button>
                                    <!-- modals -->
                                    <!-- Large modal -->
                                    <div class="modal fade bs-example-modal-lg-1" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <div class="x_title" style="border-bottom: none; margin-bottom: 0;">
                                                        <h2 style="float: right;" > فرم ثبت کار <small></small></h2>
                                                        <button type="button" class="close" style="float: left;" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                        </button>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <form class="form-horizontal form-label-left" action="Anewambiguity" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="modal-body">
                                                        <br />
                                                        <div class="form-group">
                                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                                <textarea class="form-control" rows="3" name="details" style="direction:RTL;" placeholder='توضیحات را وارد کنید...'></textarea>
                                                            </div>
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> توضیحات <span class="required">*</span>
                                                            </label>
                                                            <input type="hidden" value="{{$workinf->id}}" name="workid">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"> انصراف </button>
                                                        <button type="submit" class="btn btn-success"> تایید </button>
                                                        <!--
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                        -->
                                                    </div>
                                                </form>
                                                <!--
                                                    <h4>Text in a modal</h4>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    -->

                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- end project-detail sidebar -->
                            </div>
                        </div>
                        <!-- Request Modal Button -->

                        <!-- Request Modal Button -->

                    </div>
                    <!-- /About Work -->
                </div>
            </div>
            <!-- /Owner and About Work -->

            <!-- Opinion Part -->
            <div dir="rtl" class="col-md-8 col-sm-9 col-xs-12">

                <!-- echarts of the profile page -->
                <!--
                <div id="mainb" style="height:350px;"></div>
                -->
                <!-- /echarts of the profile page -->
                <div style="display: inline-block;">

                </div>
            </div>
            <!-- /Opinion Part -->

            <!-- start project-detail sidebar -->
            <!--
            <div dir="rtl" class="col-md-3 col-sm-3 col-xs-12">

                <section class="panel">

                    <div class="x_title">
                        <h2 style="float: right;" >Project Description</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <h3 class="green"><i class="fa fa-paint-brush"></i> Gentelella</h3>

                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        <br />

                        <div class="project_detail">

                            <p class="title">Client Company</p>
                            <p>Deveint Inc</p>
                            <p class="title">Project Leader</p>
                            <p>Tony Chicken</p>
                        </div>

                        <br />
                        <h5>Project files</h5>
                        <ul class="list-unstyled project_files">
                            <li><a href=""><i class="fa fa-file-word-o"></i> Functional-requirements.docx</a>
                            </li>
                            <li><a href=""><i class="fa fa-file-pdf-o"></i> UAT.pdf</a>
                            </li>
                            <li><a href=""><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a>
                            </li>
                            <li><a href=""><i class="fa fa-picture-o"></i> Logo.png</a>
                            </li>
                            <li><a href=""><i class="fa fa-file-word-o"></i> Contract-10_12_2014.docx</a>
                            </li>
                        </ul>
                        <br />

                        <div class="text-center mtop20">
                            <a href="#" class="btn btn-sm btn-primary">Add files</a>
                            <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                        </div>
                    </div>

                </section>

            </div>
            -->
            <!-- end project-detail sidebar -->
        </div>
        <!-- /Contents in Page -->
    </div>
</div>
</div>

</div>
</div>

<!-- Scripts -->
<script src="{{URL::asset('./AmirHossein/Js/jquery.min.js')}}"></script>
<script src="{{URL::asset('./AmirHossein/Js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('./AmirHossein/Js/jquery.tagsinput.js')}}"></script>
<script src="{{URL::asset('./AmirHossein/Js/nprogress.js')}}"></script>
<script src="{{URL::asset('./AmirHossein/Js/nprogress2.js')}}"></script>
<script src="{{URL::asset('.AmirHossein/Js/echarts.min.js')}}"></script>
<script src="{{URL::asset('.AmirHossein/Js/bootstrap-progressbar.min.js')}}"></script>
<script src="{{URL::asset('.AmirHossein/Js/progress.js')}}"></script>
<script src="{{URL::asset('./AmirHossein/Js/custom.min.js')}}"></script>
<!-- /Scripts -->


<!-- Angular modal -->

<script>
    // Get the modal
    var modall = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close2")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        console.log("Open");
        modall.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        console.log("Close");
        modall.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        console.log("OOmd? : ",event.target);
        console.log("Modal : ",span);
        if (event.target == modall) {
            consle.log("Close In If");
            modall.style.display = "none";
        }
    }
</script>
<!-- Angular modal -->

<!-- ECharts -->
<script>
    var theme = {
        color: [
            '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
            '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
        ],

        title: {
            itemGap: 8,
            textStyle: {
                fontWeight: 'normal',
                color: '#408829'
            }
        },

        dataRange: {
            color: ['#1f610a', '#97b58d']
        },

        toolbox: {
            color: ['#408829', '#408829', '#408829', '#408829']
        },

        tooltip: {
            backgroundColor: 'rgba(0,0,0,0.5)',
            axisPointer: {
                type: 'line',
                lineStyle: {
                    color: '#408829',
                    type: 'dashed'
                },
                crossStyle: {
                    color: '#408829'
                },
                shadowStyle: {
                    color: 'rgba(200,200,200,0.3)'
                }
            }
        },

        dataZoom: {
            dataBackgroundColor: '#eee',
            fillerColor: 'rgba(64,136,41,0.2)',
            handleColor: '#408829'
        },
        grid: {
            borderWidth: 0
        },

        categoryAxis: {
            axisLine: {
                lineStyle: {
                    color: '#408829'
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['#eee']
                }
            }
        },

        valueAxis: {
            axisLine: {
                lineStyle: {
                    color: '#408829'
                }
            },
            splitArea: {
                show: true,
                areaStyle: {
                    color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['#eee']
                }
            }
        },
        timeline: {
            lineStyle: {
                color: '#408829'
            },
            controlStyle: {
                normal: {color: '#408829'},
                emphasis: {color: '#408829'}
            }
        },

        k: {
            itemStyle: {
                normal: {
                    color: '#68a54a',
                    color0: '#a9cba2',
                    lineStyle: {
                        width: 1,
                        color: '#408829',
                        color0: '#86b379'
                    }
                }
            }
        },
        map: {
            itemStyle: {
                normal: {
                    areaStyle: {
                        color: '#ddd'
                    },
                    label: {
                        textStyle: {
                            color: '#c12e34'
                        }
                    }
                },
                emphasis: {
                    areaStyle: {
                        color: '#99d2dd'
                    },
                    label: {
                        textStyle: {
                            color: '#c12e34'
                        }
                    }
                }
            }
        },
        force: {
            itemStyle: {
                normal: {
                    linkStyle: {
                        strokeColor: '#408829'
                    }
                }
            }
        },
        chord: {
            padding: 4,
            itemStyle: {
                normal: {
                    lineStyle: {
                        width: 1,
                        color: 'rgba(128, 128, 128, 0.5)'
                    },
                    chordStyle: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        }
                    }
                },
                emphasis: {
                    lineStyle: {
                        width: 1,
                        color: 'rgba(128, 128, 128, 0.5)'
                    },
                    chordStyle: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        }
                    }
                }
            }
        },
        gauge: {
            startAngle: 225,
            endAngle: -45,
            axisLine: {
                show: true,
                lineStyle: {
                    color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                    width: 8
                }
            },
            axisTick: {
                splitNumber: 10,
                length: 12,
                lineStyle: {
                    color: 'auto'
                }
            },
            axisLabel: {
                textStyle: {
                    color: 'auto'
                }
            },
            splitLine: {
                length: 18,
                lineStyle: {
                    color: 'auto'
                }
            },
            pointer: {
                length: '90%',
                color: 'auto'
            },
            title: {
                textStyle: {
                    color: '#333'
                }
            },
            detail: {
                textStyle: {
                    color: 'auto'
                }
            }
        },
        textStyle: {
            fontFamily: 'Arial, Verdana, sans-serif'
        }
    };

    var echartBarLine = echarts.init(document.getElementById('mainb'), theme);

    echartBarLine.setOption({
        title: {
            x: 'center',
            y: 'top',
            padding: [0, 0, 20, 0],
            text: 'Project Perfomance :: Revenue vs Input vs Time Spent',
            textStyle: {
                fontSize: 15,
                fontWeight: 'normal'
            }
        },
        tooltip: {
            trigger: 'axis'
        },
        toolbox: {
            show: true,
            feature: {
                dataView: {
                    show: true,
                    readOnly: false,
                    title: "Text View",
                    lang: [
                        "Text View",
                        "Close",
                        "Refresh",
                    ],
                },
                restore: {
                    show: true,
                    title: 'Restore'
                },
                saveAsImage: {
                    show: true,
                    title: 'Save'
                }
            }
        },
        calculable: true,
        legend: {
            data: ['Revenue', 'Cash Input', 'Time Spent'],
            y: 'bottom'
        },
        xAxis: [{
            type: 'category',
            data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        }],
        yAxis: [{
            type: 'value',
            name: 'Amount',
            axisLabel: {
                formatter: '{value} ml'
            }
        }, {
            type: 'value',
            name: 'Hours',
            axisLabel: {
                formatter: '{value} °C'
            }
        }],
        series: [{
            name: 'Revenue',
            type: 'bar',
            data: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3]
        }, {
            name: 'Cash Input',
            type: 'bar',
            data: [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3]
        }, {
            name: 'Time Spent',
            type: 'line',
            yAxisIndex: 1,
            data: [2.0, 2.2, 3.3, 4.5, 6.3, 10.2, 20.3, 23.4, 23.0, 16.5, 12.0, 6.2]
        }]
    });
</script>
<!-- /ECharts -->

</body>


</html>