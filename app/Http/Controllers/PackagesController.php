<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Package;

use DB;

class PackagesController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
	{
	    return view('packages.index', []);
	}

	public function create(Request $request)
	{
	    return view('packages.add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$package = Package::findOrFail($id);
	    return view('packages.add', [
	        'model' => $package	    ]);
	}

	public function show(Request $request, $id)
	{
		$package = Package::findOrFail($id);
	    return view('packages.show', [
	        'model' => $package	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM packages a ";
		if($_GET['search']['value']) {	
			$presql .= " WHERE name LIKE '%".$_GET['search']['value']."%' ";
		}
		
		$presql .= "  ";

		$sql = $select.$presql." LIMIT ".$start.",".$len;


		$qcount = DB::select("SELECT COUNT(a.id) c".$presql);
		//print_r($qcount);
		$count = $qcount[0]->c;

		$results = DB::select($sql);
		$ret = [];
		foreach ($results as $row) {
			$r = [];
			foreach ($row as $value) {
				$r[] = $value;
			}
			$ret[] = $r;
		}

		$ret['data'] = $ret;
		$ret['recordsTotal'] = $count;
		$ret['iTotalDisplayRecords'] = $count;

		$ret['recordsFiltered'] = count($ret);
		$ret['draw'] = $_GET['draw'];

		echo json_encode($ret);

	}


	public function update(Request $request) {
	    //
	    /*$this->validate($request, [
	        'name' => 'required|max:255',
	    ]);*/
		$package = null;
		if($request->id > 0) { $package = Package::findOrFail($request->id); }
		else { 
			$package = new Package;
		}
	    

	    		
			    $package->id = $request->id?:0;
				
	    		
					    $package->name = $request->name;
		
	    		
					    $package->quote = $request->quote;
		
	    		
					    $package->description = $request->description;
		
	    		
					    $package->thumb_image = $request->thumb_image;
		
	    		
					    $package->banner_image_one = $request->banner_image_one;
		
	    		
					    $package->banner_image_two = $request->banner_image_two;
		
	    		
					    $package->banner_image_three = $request->banner_image_three;
		
	    		
					    $package->trip_sub_category_id = $request->trip_sub_category_id;
		
	    		
					    $package->no_of_day = $request->no_of_day;
		
	    		
					    $package->no_of_night = $request->no_of_night;
		
	    		
					    $package->travel_type_id = $request->travel_type_id;
		
	    		
					    $package->depature_date = $request->depature_date;
		
	    	    //$package->user_id = $request->user()->id;
	    $package->save();

	    return redirect('/packages');

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$package = Package::findOrFail($id);

		$package->delete();
		return "OK";
	    
	}

	
}