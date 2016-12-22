<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Mohsen extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
public function getContentspage()
{
	return view ('Mohsen.Contentspage');
}
public function ajaxview()
{
	return view ('Mohsen.ajax');
}
public function ajax()
{
	  $msg = "This is a simple message.";
	  
      return response()->json(array('msg'=> $msg), 200);
}
public function testdb ()
{
	/*for ($j=0;$j<6;$j++)
	{$br=new App\Branch;
	$br ->name="br".$j+1;
	$br -> save();
	
	
	for( $i=0;$i<5;$i++)
		{$f= new App\field;
	$r= rand();
	
	$f -> name =$i."field";
	$f-> save();
	$f->branchs()->save($br);
	}}
	*/
	/*
$br= App\Branch::with('fields')->get();
dd ($br[3]->fields);
return $br;

	*/
/*
$work=new App\Work;
	$work->subject="sub5";
	$work->save();

$branch = App\Field::all()->first();
	$branch->works()->attach($work);
*/

	$f=new App\Field ;
	$f -> name= "field name";
	$f ->save();
	$br= App\Branch::all()->first();
	$br->fields()->attach($f);
}

public function fieldworkspage(App\Field $field)
{
	$works= $field->works()->paginate(3);

	$branch=$field->branchs()->get()->first();
	//$branch = App\Branch::all()->find(1);
	return view('Mohsen/viewworks',['works'=>$works ,'branch'=>$branch]);
}

public function branchworkspage(App\Branch  $branch)
{
	$fields= $branch->fields()->with('works')->get();
	$works = collect();
	foreach($fields as $field)
	{
		$works->push($field->Works);

	}


	return view('Mohsen/viewworks',['works'=>$works ,'branch'=>$branch]);

}
}