<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\Label;
use App\Work;
use App\Http\Requests\AddWorkRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WorkController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('auth', ['only' => 'create']);
        $this->middleware('auth', ['except' => 'show']);
    }


    //show a specific work: work1
    public function show(Work $work){ //($workid)

        //$work = Work::findOrFail($workid); //instead of this I added line 29 in RouteServiceProvider.php "$router->model('work', 'App\Work');"
        //dd($work->dead_time->addDays(8)->diffForHumans());
        return view('work.show', compact('work'));
    }
    
    
    public function create(){

//        if (Auth::guest())
//        {
//            return redirect('/');
//        }
        $labels = Label::lists('name', 'id');
        return view('work.create', compact('labels'));
    }


    public function store(AddWorkRequest $request){

//        $twork = new Work($request->all());
//        Auth::user()->works()->save($twork);
        $work = Auth::user()->works()->create($request->all()); //instead of 2 above instructions, we can use this! I don't exactly know why so I don't use it!!

        $work->labels()->attach($request->input('label_list'));

        //session()->flash('flash_message', 'Your work has been added correctly!! :D');flash1
        //session()->flash('flash_message_important', true);flash1

//        $input = $request->all();
//        $work = new Work();
//        $work->subject = $input['subject'];
//        $work->detail = $input['detail'];
//        $work->department_id = $input['department_id'];
//        $work->course_id = $input['course_id'];
//        $work->dead_time = $input['dead_time'];
        //$work->user_id = $input['user_id'];

 //       $work->save();

        //return redirect('/');flash1
        /*return redirect('/')->with([   ******************flash2
            'flash_message' => 'Your work has been added correctly!! :D',
             'flash_message_important' => true
        ]);*/

        //flash3
        flash()->success('Your work has been added correctly!! :D');
        //flash()->overlay('Your work has been added correctly!! :D', 'Good Job!!');
        return redirect('/');


    }

    //show a page of existing work
    public function edit(Work $work){ //$workid

        //$work = Work::findOrFail($workid);
        $labels = Label::lists('name', 'id');
        return view('work.edit', compact('work', 'labels'));
    }


    public function update(Work $work, AddWorkRequest $request){

        //$work = Work::findOrFail($workid);
        $work->update($request->all());

        return redirect('/');
    }

//for getting errors for filling the form we can use bellow function instead of CreateAddWordRequests
//    public function addwork(Request $request){
//
//        $this->validate($request, [
//            'subject' => 'required',
//            'detail' => 'required|min:5',
//            'department_id' => 'required',
//            'course_id' => 'required',
//            'dead_time' => 'required|date'
//        ]);
//        $input = $request->all();
//        $work = new Work();
//        $work->subject = $input['subject'];
//        $work->detail = $input['detail'];
//        $work->department_id = $input['department_id'];
//        $work->course_id = $input['course_id'];
//        $work->dead_time = $input['dead_time'];
//
//        $work->save();
//
//        return redirect('/');
//    }

}