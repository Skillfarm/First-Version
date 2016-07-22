<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\Work;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class base extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function department(){

        $departments = Department::all();
        return view('welcome', compact('departments'));
    }

    public function getdeptpage($dpid){

        //return \Auth::user()->name;
        $department = Department::findOrFail($dpid);
        $courses = Course::where('department_id', '=', $dpid)->get();
        $works = Work::where('department_id', '=', $dpid)->latest()->get();
        //$works = Work::where('department_id', '=', $dpid)->haveTime()->latest()->get();
        //work haie ke hanuz vaght dare ro neshun mide!! :)
        
        return view('pages.department', compact('works', 'department', 'courses'));

    }


    public function getcoursepage($courseid){
        $works = Work::where('course_id', '=', $courseid)->latest()->get();
        return view('pages.course', compact('works'));
    }
}
