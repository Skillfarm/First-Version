@extends('layouts.app')
@inject('Departments','App\Department')
@inject('Courses','App\Course')
@inject('Works','App\Work')
<?php
$departments = $Departments::all();
$courses = $Courses::all();
$works=$Works::all();
?>



@section('content')
    <div class="container">
        <div class="col-sm-offset-1 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Work
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                            <!-- New Task Form -->
                    <form action="/addthework" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                                <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-2 control-label">Work</label>
                            <div class="col-sm-10">
                                <input type="text" name="subject" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                       <!-- <div class="form-group">
                            <div class="col-sm-12">
                            <h3 class="">Related Departments</h3>
                            </div>
                        </div>
                        -->
                        <div class="form-group">

                            <label for="fselect" class="col-sm-2 control-label"> First Department </label>
                            <div class="col-sm-10">
                                <br>
                                <select id ="fselect" class="form-control" name="firstd">
                                    @foreach($departments as $var)
                                            <!--$names = $var->name;-->
                                    <option value = {{$var->name}}> {{$var->name}} </option>
                                    @endforeach
                                </select>
                                </br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"> Second Department </label>
                            <div class="col-sm-10">
                                <br>
                                <select id ="fselect" class="form-control" name="secondd">
                                    @foreach($departments as $var)
                                            <!--$names = $var->name;-->
                                    <option value={{$var->name}}> {{$var->name}} </option>
                                    @endforeach
                                </select>
                                </br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"> Related Course </label>
                            <div class="col-sm-10">
                                <br>
                                <select id ="fselect" class="form-control" name="rcourse">
                                    @foreach($courses as $var)
                                            <!--$names = $var->name;-->
                                    <option value = {{$var->name}}> {{$var->name}} </option>
                                    @endforeach
                                </select>
                                </br>
                            </div>
                        </div>

                        <div class="form-group">

                                <label class="col-sm-2 control-label">Due Date</label>
                                <div class="col-sm-10">
                                    <input class="w3-input w3-hover-blue w3-animate-input form-control" name="ddate" style="width:30%"type="date">
                                </div>

                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-8 col-sm-1">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Work
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection