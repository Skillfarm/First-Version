<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\Work;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class WorkController extends Controller
{
    public function getworkpage($workid){

        $work = Work::findOrFail($workid);
        //dd($work->dead_time->addDays(8)->diffForHumans());

        return view('pages.work', compact('work'));
    }
    
    
    public function getaddworkpage(){
        return view('pages.addwork');
    }


    public function addwork(){

        $input = Request::all();
        $work = new Work();
        $work->subject = $input['subject'];
        $work->detail = $input['detail'];
        $work->department_id = $input['department_id'];
        $work->course_id = $input['course_id'];
        $work->dead_time = $input['dead_time'];

        $work->save();
        
        return redirect('/');
    }
}