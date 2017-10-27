<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Trip_activity;

use DB;

class Trip_activitiesController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
	{
	    return view('trip_activities.index', []);
	}

	public function create(Request $request)
	{
	    return view('trip_activities.add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$trip_activity = Trip_activity::findOrFail($id);
	    return view('trip_activities.add', [
	        'model' => $trip_activity	    ]);
	}

	public function show(Request $request, $id)
	{
		$trip_activity = Trip_activity::findOrFail($id);
	    return view('trip_activities.show', [
	        'model' => $trip_activity	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM trip_activities a ";
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
		$trip_activity = null;
		if($request->id > 0) { $trip_activity = Trip_activity::findOrFail($request->id); }
		else { 
			$trip_activity = new Trip_activity;
		}
	    

	    		
			    $trip_activity->id = $request->id?:0;
				
	    		
					    $trip_activity->name = $request->name;
		
	    		
					    $trip_activity->description = $request->description;
		
	    		
					    $trip_activity->thumb_image = $request->thumb_image;
		
	    		
					    $trip_activity->banner_Image = $request->banner_Image;
		
	    	    //$trip_activity->user_id = $request->user()->id;
	    $trip_activity->save();

	    return redirect('/trip_activities');

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$trip_activity = Trip_activity::findOrFail($id);

		$trip_activity->delete();
		return "OK";
	    
	}

	
}