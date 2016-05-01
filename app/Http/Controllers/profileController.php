<?php

namespace App\Http\Controllers;

use Request;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class profileController extends Controller
{
    public function index()
    {
    	$tasks = Task::all();

    	return view('pages.profile', compact('tasks'));    	//return 'sara';
    }

    public function show($id)
    {
    	$task = Task::find($id);

    	return $task->name;
    }


     public function store()
    {
    	$input = Request::all();

    	return $input;
    }
    
}
