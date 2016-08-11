<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function testfunc()
    {


/* ///  Add Branch
$branch = new App\Branch;
$branch->name="b21";
$branch ->save();
*/
/* /// Add Field
$field = new App\Field ;
$field -> name ="f1";
$field->save();
*/
/* // connect field and branch
$b=App\Branch::all()->first();
$f=App\Field::all()->first();
$b->fields()->attach($f);
*/
/* // Add Work
$work=new App\Work ;
$work->subject="sub1";
$work->save();
*/
/* // connect work and field
$work=App\Work::all()->first();
$f=App\Field::all()->first();
$f->works()->attach($work);
*/
/* // test the fields of branch
$b= App\Branch::all()->first();
dd($b->fields()->get());
*/
/* // connect favorite field and branch with user
$user=App\User::all()->first();
$b= App\Branch::all()->first();
$f=App\Field::all()->first();
$user->favorite_fields()->attach($f);
$user->favorite_branchs()->attach($b);
*/
/* // test favorite fieldes
$f=App\Field::all()->first();
dd($f->users()->get());
*/
/* // save work for the user
$work=App\Work::all()->first();
$user=App\User::all()->first();
$user->works()->save($work);
*/
/* // add accepteds user by work
$user=App\User::all()->first();
$work=App\Work::all()->first();
$work->accepteds_users()->attach($user);
$user->applicants_works()->attach($work);
*/
/* // add ambiguty and save in triple table
$amb=new App\Ambiguity;
$amb->name ="amb3";
$amb->save();
$user=App\User::all()->find(3);
$work=App\Work::all()->first();
$work->ambiguitys_users()->attach($user, array("ambiguity_id"=>$amb->id));
*/
// // how can use data from triple table
/********************************************************************
$work=App\Work::all()->first();
$cal=$work->ambiguitys_users()->get();
//dd($cal[1]->pivot->ambiguity_id);
$cal=$cal->groupBy('id');
// $cal is colection and has random access with id ... . ***************************************
  foreach ($cal as $cc) {
    dd( $cc[0]->name);// $cc is colection of ambigiuty for on user********************************
    foreach ($cc as $dd) {
echo $dd->pivot->ambiguity_id;

  }}
 **************************************************************/
/*
$op = new App\Opinion;
$op->name ="first";
$op->o1 ="234234";
$op->save();
*/

    }
}
