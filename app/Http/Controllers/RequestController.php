<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class RequestController extends Controller
{
    public function create()
    {
    	 return view('pages.req');
    }


    public function store()
    {
    	$input = Request::all();
    	return $input;

    	// Task::create($input);

    	// return redirect('tasks');
    }
}
