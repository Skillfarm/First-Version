
<!--/**
 * Created by PhpStorm.
 * User: Amir Hossein
 * Date: 9/27/2016
 * Time: 8:15 PM
 */-->

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
                    <h3 style="color: #777; font-size: 30px;" > درخواست دهندگان </h3>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div>
                    <div class="x_panel">
                    <div class="x_title">

                        <div class="col-md-4">
                            <ul class="nav nav-pills" role="tablist">
                                <li role="presentation" class="dropdown">
                                </li>
                            </ul>
                        </div>
                        <!--
                        <div class="col-md-3" style="margin: auto">
                            <a class="btn btn-success"> درخواست دهندگان <i class="fa fa-edit m-right-xs"></i></a>
                        </div>
                        -->

                        <div class="nav navbar-right panel_toolbox">
                            <h2>
                                پنل بررسی درخواست دهندگان
                            </h2>
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
                                <div class="x_content">
                                    <ul class="list-unstyled msg_list" style="padding: 0;">
                                        @foreach($applicants as $app)
                                        <li style="background: white; ">
                                            <!-- Owner and About Work -->
                                            <div class="col-md-12" style="direction: rtl; padding-right: 0;">
                                                <!-- Work Owner Introduction Part -->
                                                <div class="col-sm-12 col-xs-12 profile_left" style="float: right; padding-right: 4px; padding-left: 0px; width: 12%;">
                                                    <a class="nota" style="padding:0px 0px !important;">
                                                        <span class="image">
                                                            <img class="img-circle" src="{{URL::to('/')}}/AmirHossein/Image/img.jpg" alt="img" />
                                                        </span>

                                                        <form action="/Aaccept/{{$app->user_id}}" method="post">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="workid" value="{{$app->work_id}}">
                                                            <button type="submit" class="btn btn-success btn-xs" style="float: left; width: 90%; border: none; border-radius: 0;" > <i class="fa fa-user">
                                                                </i> <i class="fa fa-comments-o"></i> </button>
                                                        </form>
                                                    </a>
                                                </div>

                                                <!-- /Work Owner Introduction Part -->
                                                <div class="col-md-11 col-sm-3 col-xs-12 profile_left amir" style="padding-left: 0; width: 87%; direction: rtl;">
                                                    <div>
                                                        <div class="page-title" style="padding: 0;  height: auto">
                                                            <div class="title_left">
                                                                <div class="col-md-5 col-sm-5 col-xs-12 top_search" style="padding: 0;">
                                                                    <div class="pull-right" style="padding: 0; margin: 0;">
                                                                        <span class="time" style="color: #444">
                                                                                                                3 دقیقه پیش
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="title_right" style=" padding: 0;">
                                                                <div class="pull-right" style=" padding: 0;">
                                                                    <span style="color: #444;">{{$app->name}}</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div dir="rtl"  style="float: right; direction: rtl; text-align: right; margin-left: 68px; padding-left: 45px;">
                                                                                        <span class="message" style="float: right; ">
                                                                                            <p style="font-size:17px; color: #444; float: right;  ">
                                                                                                تسیاسیاتسا تسیاتساتسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتساتسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتسا تسیاتساتسیاتسا تسیاتسا تسیاتسا تسیاتسا
                                                                                            </p>
                                                                                        </span>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>
                                        <div class="col-md-12" style="border-bottom: 1px solid #E6E9ED; padding: 10px; "></div>
                                        @endforeach
                                    </ul>
                                    {{$applicants->links()}}
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /Contents in Page -->
                </div>
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