<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein
 * Date: 8/10/2016
 * Time: 7:09 PM
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Work;
use App\Nazar;
use App\User;
use App\Accepted;
use App\Tag;
use App\Field;
use Illuminate\Support\ServiceProvider;
use App\Repositories\TaskRepository;
use \File;
use Validator;
use Storage;

class AmirHossein extends Controller
{
    /* Addwork */
    public function addwork(Request $request){
        return view('AmirHossein/addwork');
    }

    public function newwork(Request $request){

        //dd($request);
        //creating work
        $work = new Work();
        $work->subject = $request->subject;
        $work->details = $request->details;
        $work->deadtime = $request->deadtime;
        $work->wage = $request->wage;
        $work->status = 'active';

        $file = $request->file('file');
        $fileName = time().''.$request->file('file')->getClientOriginalName();
        $fileName = str_replace(' ', '_', $fileName);
        $work->filename=$fileName;
        $work->save();
        Storage::disk('work')->put(
            $work->filename,
            file_get_contents($request->file('file')->getRealPath())
        );

        //saving work for it's user
        /*$user = $request->user();
        $user->works()->save($work);*/


        //dd(after (',', $request->tags));

        $tag = new Tag();
        $tag->name = $request->tags;
        $tag->save();
        $tag->works()->attach($work);

        //saving the connection between work and it's fields
        $field1 = $request->field1;
        $field2 = $request->field2;
        $field3 = $request->field3;
        $field4 = $request->field4;

        //$field11 = Field::where('name', '=' , $field1)->firstOrFail();
       // $field11->works()->attach($work);

        if($field2 != ''){
            $field12 = Field::where('name', '=' , $field2)->firstOrFail();
            $field12->works()->attach($work);
        }
        if($field3 != ''){
            $field13 = Field::where('name', '=' , $field3)->firstOrFail();
            $field13->works()->attach($work);
        }
        if($field4 != ''){
            $field14 = Field::where('name', '=' , $field4)->firstOrFail();
            $field14->works()->attach($work);
        }




        return redirect('/Aaddwork');
    }
    /* /Addwork */

    /* Editwork */
    //Gets The Page View
    public function editwork(Request $request){

        //  Today DATE and Time
        /*
         *
         * //it returns the current date and time;
             $mytime = Carbon\Carbon::now();
             echo $mytime->toDateTimeString();
         *
         * */
        //  /Today DATE and Time

        //dd($request->workid);
        $work = Work::where('id', '=', $request->workid)->firstOrFail();
        $fields = $work->fields()->get();
        $allfields = Field::all();
        $count = count($fields);
        //dd($count);
        //Need to a little change the addwork resource using jquery  (It's OK!!)
    /*
        //work information [subject,details,deadtime,wage,filename,status]
        $workinf = Work::find($request->workid);
        //dd($workinf->filename);
        $filepath = storage_path().'/app/'.$workinf->filename;
        //work fields
        $fields = $workinf->fields()->get();
        //dd($fields);
        //work applicatns
        $applicants = $workinf->applicants_users()->get();
        //dd($applicants);
        //work_user
        $work_user = $workinf->user()->firstOrFail();
        //dd($work_user);
    */
        return view('AmirHossein/editwork', ['work' => $work, 'fields' => $fields, 'num' => $count, 'allField' => $allfields]);
    }
    /* /Editwork */

    public function edited(Request $request, Work $work){
        $work->subject = $request->subject;
        $work->details = $request->details;
        $work->deadtime = $request->deadtime;
        $work->wage = $request->wage;

        $file = $request->file('file');
        $fileName = time().''.$request->file('file')->getClientOriginalName();
        $fileName = str_replace(' ', '_', $fileName);
        $work->filename=$fileName;
        $work->save();
        Storage::disk('work')->put(
            $work->filename,
            file_get_contents($request->file('file')->getRealPath())
        );

        $tag = new Tag();
        $tag->name = $request->tags;
        $tag->save();
        $tag->works()->attach($work);

        //saving the connection between work and it's fields
        $field1 = $request->field1;
        $field2 = $request->field2;
        $field3 = $request->field3;
        $field4 = $request->field4;

        //$field11 = Field::where('name', '=' , $field1)->firstOrFail();
        // $field11->works()->attach($work);

        if($field2 != ''){
            $field12 = Field::where('name', '=' , $field2)->firstOrFail();
            $field12->works()->attach($work);
        }
        if($field3 != ''){
            $field13 = Field::where('name', '=' , $field3)->firstOrFail();
            $field13->works()->attach($work);
        }
        if($field4 != ''){
            $field14 = Field::where('name', '=' , $field4)->firstOrFail();
            $field14->works()->attach($work);
        }
        return redirect('/Ashowwork');
    }

    /* Showwork */
    //Gets The Page View
    public function showwork(){
        //work information [subject,details,deadtime,wage,filename,status]
        $workinf = Work::find('47');
        //dd($workinf->filename);
        $filepath = storage_path().'/app/'.$workinf->filename;
        //work fields
        $fields = $workinf->fields()->get();
        //dd($fields);
        //work applicatns
        $applicants = $workinf->applicants_users()->get();
        //dd($applicants);
        //work_user
        $work_user = $workinf->user()->firstOrFail();
        //dd($work_user);
        //  /pagination used in applicants modal
        $app = DB::table('applicants')->paginate(5);
        // /pagination used in applicants modal
        $ambiguities = DB::table('nazars')->select('nazars.id','description','user_id','work_id','users.name')->join('users', function ($join) {
            $join->on('nazars.user_id', '=', 'users.id')->where('work_id','=','47');
        })->paginate(3);
        $tags = $workinf->tags();
        //dd($ambiguities);
       // dd($ambiguities);
        //Control Variables
        $user = Auth::user();
        //user for controlling edit,applicants,work owner part,
        $applicButton = '';
        $editB = '';
        $workownerPB= '';
        $ambiguityB = '';
        $workApplic = '';
        $removeAmbig = '';
        if($user == $work_user){
            //dd("This is the work owner");
            $applicButton = 'N';
            $editB = 'Y';
            $workownerPB = 'N';
            $ambiguityB = 'N';
            $workApplic = 'Y';
            $removeAmbig = 'Y';
        }
        elseif($user != $work_user){
            //dd("this is not the work owner");
            if(DB::table('applicants')->where('user_id', '=', $user->id)->exists() && !DB::table('nazars')->where('user_id', '=', $user->id)->exists()){
                //dd("this is the applicant");
                $applicButton = 'N';
                $editB = 'N';
                $workownerPB = 'Y';
                $ambiguityB = 'Y';
                $workApplic = 'N';
                $removeAmbig = 'N';
            }
            elseif(!DB::table('applicants')->where('user_id', '=', $user->id)->exists() && DB::table('nazars')->where('user_id', '=', $user->id)->exists()){
                $applicButton = 'Y';
                $editB = 'N';
                $workownerPB = 'Y';
                $ambiguityB = 'N';
                $workApplic = 'N';
                $removeAmbig = 'N';
            }
            else if(DB::table('applicants')->where('user_id', '=', $user->id)->exists() && DB::table('nazars')->where('user_id', '=', $user->id)->exists()){
                $applicButton = 'N';
                $editB = 'N';
                $workownerPB = 'Y';
                $ambiguityB = 'N';
                $workApplic = 'N';
                $removeAmbig = 'N';
            }
            else{
                //dd("This is noone");
                $applicButton = 'Y';
                $editB = 'N';
                $workownerPB = 'Y';
                $ambiguityB = 'Y';
                $workApplic = 'N';
                $removeAmbig = 'N';
            }
        }
        //dd($applicButton);
        //dd($user);

        return view('AmirHossein/showwork', ['workinf' => $workinf ,'file' => $filepath ,'ownuser' => $work_user ,'applicants' => $applicants ,'apps' =>
        $app,'ambigs' => $ambiguities, 'applicButton' => $applicButton, 'tags' => $tags, 'editB' => $editB, 'workownerPB' => $workownerPB,
        'ambiguityB' => $ambiguityB, 'workApplic' => $workApplic, 'removeAmbig' => $removeAmbig]);
    }
    /* /Showwork */

    /* ShowworkO */
    public function showWO(Request $request){
        //work information [subject,details,deadtime,wage,filename,status]
        $workinf = Work::find('47');
        //dd($workinf->filename);
        $filepath = storage_path().'/app/'.$workinf->filename;
        //work fields
        $fields = $workinf->fields()->get();
        //dd($fields);
        //work applicatns
        $applicants = $workinf->applicants_users()->get();
        //dd($applicants);
        //work_user
        $work_user = $workinf->user()->firstOrFail();
        //dd($work_user);

        // pagination used in applicants modal,   ready to use it in the applicants part
        $app = DB::table('applicants')->join('users', function ($join) {
            $join->on('users.id', '=', 'applicants.user_id')->where('work_id','=','47');
        })->paginate(5);
        //dd($app);

        // /pagination used in applicants modal

        return view('AmirHossein/showworkO', ['workinf' => $workinf ,'file' => $filepath ,'ownuser' => $work_user ,'applicants' => $applicants ,'apps' =>
            $app]);
    }
    /* /ShowworkO */

    /* newapplicant */
    public function newapplicant(Request $request){
        $user = $request->user();

        //dd('Ready To Save The New Applicant');
        //dd($request->workid);
        $work = Work::where('id', '=' , $request->workid)->firstOrFail();
        //dd($work);
        $user = $request->user();
        $user->applicants_works()->attach($work);
        //ready to save the new applicant (needs a little change in database to save the description of the applicant for the owner.)
        return;
    }
    /* //newapplicant */

    /* addAmbiguity */
    public function Addamiguity(Request $request){
        $nazar = new Nazar();
        //dd($request);
        $nazar->description = $request->details;
        $nazar->save();
        $request->user()->nazar()->save($nazar);
        $work = Work::where('id','=',$request->workid)->firstOrFail();
        $work->nazar()->save($nazar);
        //dd($work);

        //$nazar->work()->attach($request->workid);
        return redirect('/Ashowwork');
    }
    /* //addAmbiguity */

    /* deactivation */
    public function deactivate(){
        //Ready to get it works
    }

    public function getApplicants(Request $request){

        $app = DB::table('applicants')->join('users', function ($join) {
            $join->on('users.id', '=', 'applicants.user_id')->where('work_id','=','47');
        })->paginate(7);

        //dd(Accepted::all());
        //dd($app);
        return view('AmirHossein/applicants', ['applicants' => $app]);
    }

    public function ignore(Request $request,Nazar $nazar){
        dd($nazar);
    }

    public function remove(Request $request, Nazar $nazar){
        dd($nazar);
    }

    public function accept(Request $request, User $user){
        $work = Work::where('id', '=' , $request->workid)->get();
        $user->accepteds_works()->attach($work);
    }
}