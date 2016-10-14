<!--
/**
 * Created by PhpStorm.
 * User: Amir Hossein
 * Date: 8/20/2016
 * Time: 8:25 PM
 */
 -->
<!DOCTYPE html>
<html lang="en">
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

</head>


<body class="nav-md">
<div class="container body">
    <!-- top navigation -->
    <div class="top_nav " style="z-index: 1000000;">
        <div class="nav_menu">
            <nav class="" role="navigation">

                <div>
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="/Image/img.jpg" alt="">{{Auth::user()->name}}
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
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
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
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
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
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
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
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
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

                <div class="nav toggle col-md-offset-11 col-md-1 " style="float: right;">
                    <a id="menu_toggle pull-right"><i class="fa fa-bars"></i></a>
                </div>

            </nav>
        </div>
    </div>
    <!-- /top navigation -->

    <!-- left column -->
    <!--
    <div class="left_col col-md-2" >
        <h1>Hello</h1>
    </div>
    -->
    <!-- /left column -->

    <!-- page content -->
    <div class="right_col col-md-12" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
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
                        <h3> درخواست انجام کار </h3>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">

                <div class="col-md-8 col-xs-12" style="margin-left: 20%;">
                    <div class="x_panel">
                        <div class="x_title">
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"> 1 فرم نوع</a>
                                        </li>
                                        <li><a href="#"> 2 فرم نوع </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <h2> فرم ثبت کار <small></small></h2>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            <br />
                            <form class="form-horizontal form-label-left" action="Aedited/{{$work->id}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="workid" value="{{ $work->id }}">
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="subject" style="direction:RTL;" placeholder="عنوان را وارد کنید..." value="{{$work->subject}}">
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> عنوان </label>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <textarea class="form-control" rows="3" name="details" style="direction:RTL;" placeholder='توضیحات را وارد کنید...' >{{$work->details}}</textarea>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> توضیحات <span class="required">*</span>
                                    </label>
                                </div>
                                <!--<div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <select class="form-control" style="direction:RTL;">
                                            <option>زمینه مربوطه را وارد کنید...</option>
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> زمینه مربوطه </label>

                                </div>
                                -->

                                <div class="form-group" id="selectors"></div>

                                <div class="">
                                    <h2></h2>
                                    <button type="button" class="newbtn btn btn-link col-md-offset-9" href="#"> ایجاد زیر شاخه جدید </button>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-3 xdisplay_inputx has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="single_cal2" name="deadtime" value="{{$work->deadtime}}" placeholder="Due Date" aria-describedby="inputSuccess2Status2">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                    </div>

                                    <div class="col-lg-6 col-sm-6 col-12 col-md-6">
                                        <div class="input-group">
                                            <label class="input-group-btn">
                                                        <span class="btn btn-primary">
                                                            Browse&hellip; <input type="file" name="file" style="display: none;" multiple>
                                                        </span>
                                            </label>
                                            <input type="text" class="form-control" readonly value="">
                                        </div>
                                    </div>

                                    <div class="col-md-3 xdisplay_inputx has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="single_cal2" name="wage" placeholder="wage" value="{{$work->wage}}" aria-describedby="inputSuccess2Status2">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"> </span>
                                        <span  class="alaki form-control-feedback right" aria-hidden="true"> ریال </span>
                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input id="tags_1" type="text" name="tags" class="tags form-control" value="social, adverts, sales" />
                                        <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                    </div>
                                </div>

                                <!--
                                <div class="control-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />
                                        <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> تگ ها </label>
                                </div>
                                -->

                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary"> انصراف </button>
                                        <button type="submit" class="btn btn-success"> تایید </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /page content -->
    </div>
    <!-- /page content -->
</div>

<!-- Scripts -->
<script src="{{URL::asset('./AmirHossein/Js/jquery.min.js')}}"></script>
<script src="{{URL::asset('./AmirHossein/Js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('./AmirHossein/Js/moment.min.js')}}"></script>
<script src="{{URL::asset('./AmirHossein/Js/daterangepicker.js')}}"></script>
<script src="{{URL::asset('./AmirHossein/Js/ion.rangeSlider.min.js')}}"></script>
<script src="{{URL::asset('./AmirHossein/Js/jquery.tagsinput.js')}}"></script>
<script src="{{URL::asset('./AmirHossein/Js/custom.min.js')}}"></script>
<!-- /Scripts -->

<!-- jQuery Tags Input -->
<script>
    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
    }

    $(document).ready(function() {
        $('#tags_1').tagsInput({
            width: 'auto'
        });
    });
</script>
<!-- /jQuery Tags Input -->

<!-- file input button -->
<script>
    $(function() {

        // We can attach the `fileselect` event to all file inputs on the page
        $(document).on('change', ':file', function() {
            var input = $(this),
                    numFiles = input.get(0).files ? input.get(0).files.length : 1,
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
        });

        // We can watch for our custom `fileselect` event like this
        $(document).ready( function() {
            $(':file').on('fileselect', function(event, numFiles, label) {

                var input = $(this).parents('.input-group').find(':text'),
                        log = numFiles > 1 ? numFiles + ' files selected' : label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

            });
        });

    });
</script>
<!-- /file input button -->

<!-- select Generator -->
<script type="text/javascript">
    /* $(document).ready(function(){
     var counter = 2;

     $(".newbtn").click(function() {
     $("#selectors").append(
     "<div class='col-md-9 col-sm-9 col-xs-12'>" +
     "<select class='form-control' name='field"+counter+"'style='direction:RTL;'>" +
     "<option>زیر شاخه مربوطه را وارد کنید...</option>" +
     "<option value='one'>Option one</option>" +
     "<option value='two'>Option two</option>" +
     "<option value='three'>Option three</option>" +
     "<option value='four'>Option four</option>" +
     "</select>" +
     "</div>" +
     "<label class='control-label col-md-3 col-sm-3 col-xs-12'>"+counter++ + " زیر شاخه  </label> <br> <br> <br>");
     if(counter == 5){
     $(".newbtn").hide();
     }
     });
     });*/
    var counter = 1;
    $(document).ready(function(){

        <?php $k = 0; ?>
        @foreach($fields as $fie)
            $("#selectors").append(
                    "<div class='col-md-9 col-sm-9 col-xs-12'>" +
                    "<select class='form-control' style='direction:RTL;' name='field1'>" +
                    "<option value='<?php echo $fie->name;?>'> <?php echo $fie->name;?> </option>" +
                    "@foreach($allField as $field)" +
                    "<option value='{{$field->name}}'>{{$field->name}}</option>" +
                    "@endforeach" +
                    "</select>" +
                    "</div>" +
                    "<label class='control-label col-md-3 col-sm-3 col-xs-12'>" +counter++ + " زیر شاخه </label> <br> <br> ");
        @endforeach
    });

    $(document).ready(function(){
        $(".newbtn").click(function() {
            $("#selectors").append(
                    "<div class='col-md-9 col-sm-9 col-xs-12'>" +
                    "<select class='form-control' style='direction:RTL;' name='field1'>" +
                    "<option value='null' >زیر شاخه مربوطه را وارد کنید...</option>" +
                    "@foreach($allField as $field)" +
                    "<option value='{{$field->name}}'>{{$field->name}}</option>" +
                    "@endforeach" +
                    "</select>" +
                    "</div>" +
                    "<label class='control-label col-md-3 col-sm-3 col-xs-12'>" +counter++ + " زیر شاخه </label> <br> <br> ");
            if(counter == 5){
                $(".newbtn").hide();
            }
        });
    });


</script>
<!-- /select Generator -->

<!-- bootstrap-daterangepicker -->
<script>
    $(document).ready(function() {
        var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'right',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };

        $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

        $('#reportrange_right').daterangepicker(optionSet1, cb);

        $('#reportrange_right').on('show.daterangepicker', function() {
            console.log("show event fired");
        });
        $('#reportrange_right').on('hide.daterangepicker', function() {
            console.log("hide event fired");
        });
        $('#reportrange_right').on('apply.daterangepicker', function(ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange_right').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired");
        });

        $('#options1').click(function() {
            $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
        });

        $('#options2').click(function() {
            $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
        });

        $('#destroy').click(function() {
            $('#reportrange_right').data('daterangepicker').remove();
        });

    });
</script>
<script>
    $(document).ready(function() {
        var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
            $('#reportrange').data('daterangepicker').remove();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#single_cal1').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_1"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal2').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_2"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal3').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_3"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal4').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_4"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#reservation').daterangepicker(null, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>
<!-- /bootstrap-daterangepicker -->

<!-- Ion.RangeSlider -->
<script>
    $(document).ready(function() {
        $("#range_27").ionRangeSlider({
            type: "double",
            min: 1000000,
            max: 2000000,
            grid: true,
            force_edges: true
        });
        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 0,
            max: 5000,
            from: 1000,
            to: 4000,
            type: 'double',
            step: 1,
            prefix: "$",
            grid: true
        });
        $("#range_25").ionRangeSlider({
            type: "double",
            min: 1000000,
            max: 2000000,
            grid: true
        });
        $("#range_26").ionRangeSlider({
            type: "double",
            min: 0,
            max: 10000,
            step: 500,
            grid: true,
            grid_snap: true
        });
        $("#range_31").ionRangeSlider({
            type: "double",
            min: 0,
            max: 100,
            from: 30,
            to: 70,
            from_fixed: true
        });
        $(".range_min_max").ionRangeSlider({
            type: "double",
            min: 0,
            max: 100,
            from: 30,
            to: 70,
            max_interval: 50
        });
        $(".range_time24").ionRangeSlider({
            min: +moment().subtract(12, "hours").format("X"),
            max: +moment().format("X"),
            from: +moment().subtract(6, "hours").format("X"),
            grid: true,
            force_edges: true,
            prettify: function(num) {
                var m = moment(num, "X");
                return m.format("Do MMMM, HH:mm");
            }
        });
    });
</script>
<!-- /Ion.RangeSlider -->
<script>
    function rtl(element)
    {
        if(element.setSelectionRange){
            element.setSelectionRange(0,0);
        }
    }
</script>

</body>

</html>