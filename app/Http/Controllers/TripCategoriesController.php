<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Trip_category;

use DB;

class Trip_categoriesController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
	{
	    return view('trip_categories.index', []);
	}

	public function create(Request $request)
	{
	    return view('trip_categories.add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$trip_category = Trip_category::findOrFail($id);
	    return view('trip_categories.add', [
	        'model' => $trip_category	    ]);
	}

	public function show(Request $request, $id)
	{
		$trip_category = Trip_category::findOrFail($id);
	    return view('trip_categories.show', [
	        'model' => $trip_category	    ]);
	}

	public function grid(Request $request)
	{
		//$len = $_GET['length'];
		//$start = $_GET['start'];
        $len=100;
        $start=1;

		$select = "SELECT *,1,2 ";
		$presql = " FROM trip_categories a ";
		/*if($_GET['search']['value']) {
			$presql .= " WHERE name LIKE '%".$_GET['search']['value']."%' ";
		}*/
		
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
		$trip_category = null;
		if($request->id > 0) { $trip_category = Trip_category::findOrFail($request->id); }
		else { 
			$trip_category = new Trip_category;
		}
	    

	    		
			    $trip_category->id = $request->id?:0;
				
	    		
					    $trip_category->name = $request->name;
		
	    		
					    $trip_category->description = $request->description;
		
	    		
					    $trip_category->thumb_image = $request->thumb_image;
		
	    		
					    $trip_category->banner_image = $request->banner_image;
		
	    	    //$trip_category->user_id = $request->user()->id;
	    $trip_category->save();

	    return redirect('/trip_categories');

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$trip_category = Trip_category::findOrFail($id);

		$trip_category->delete();
		return "OK";
	    
	}

	
}