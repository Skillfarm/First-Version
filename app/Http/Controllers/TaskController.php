<?php

namespace App\Http\Controllers;

use App\Department;
use App\Course;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;
use App\Work;
use App\Repositories\TaskRepository;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */

    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->works()->create([
            'subject' => $request->name,
        ]);

        return redirect('/tasks');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);
        $task->delete();
        return redirect('/tasks');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */



    //Amir's Functions
    public function userWorks(Request $request){
        //$All = Work::all();
        //$work = $All->users()->forUser($request->user());
        //dd(Work::all());
        //$new = $request->user()->works();
        //dd();
        //$work = new Work();
       // dd($work);
        //$work = $request->user()->works();
        $work = Work::where('user_id','=',$request->user()->id)->get();
        //dd($work);
        return view('layouts.work', ['tasks' => $work]);
    }

    public function useraddworks(Request $request){
        return view('layouts.addwork');
    }

    public function addthework(Request $request){
        $work = new Work();
        $work->subject = $request->subject;
        $work->dead_time = $request->ddate;
        $work->save();
        $firstD = Department::where('name','=',$request->firstd. " engineering")->firstOrFail();
        $secondD = Department::where('name','=',$request->secondd. " engineering")->firstOrFail();
        $firstD->work()->save($work);
        //$secondD->work()->save($work);
        $course = Course::where('name','=',$request->rcourse)->firstOrFail();
        $course->works()->save($work);
        //dd($course);
        // $work->user()->save($request->user());
        $request->user()->works()->save($work);
        return redirect('/addwork');
    }

    public function Departments(Request $request){
        $link = 'addArtwork';
        $departments = Department::all();
        //dd($departments);
        $var = array();
        for($i = 0;$i < count($departments);$i++){
            $var[] = $departments[$i];
        }

        $course = Course::where('name','=','math')->firstOrFail();
        //dd($course);

        $works = array();
        for($i = 0;$i < count($var);$i++){
            $temp = $var[$i];
            $works[] = $var[$i]->work()->get();
        }
        //dd($works);
        //dd($var);
        return view('layouts.departments',['departments' => $departments,'links' => $link,'works' => $works]);
    }
    public function home(Request $request){
        return view('layouts.homepage');
    }
    
}
