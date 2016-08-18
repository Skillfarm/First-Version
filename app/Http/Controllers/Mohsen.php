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



$br= App\Branch::with('fields')->get();

dd ($br[3]->fields);



	return $br;
}

public function fieldworkspage(Field $f)
{

}

public function branchworkspage(Branch  $b)
{
	
}
}