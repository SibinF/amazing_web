<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Trip_itinerary;

use DB;

class Trip_itinerariesController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
	{
	    return view('trip_itineraries.index', []);
	}

	public function create(Request $request)
	{
	    return view('trip_itineraries.add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$trip_itinerary = Trip_itinerary::findOrFail($id);
	    return view('trip_itineraries.add', [
	        'model' => $trip_itinerary	    ]);
	}

	public function show(Request $request, $id)
	{
		$trip_itinerary = Trip_itinerary::findOrFail($id);
	    return view('trip_itineraries.show', [
	        'model' => $trip_itinerary	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM trip_itineraries a ";
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
		$trip_itinerary = null;
		if($request->id > 0) { $trip_itinerary = Trip_itinerary::findOrFail($request->id); }
		else { 
			$trip_itinerary = new Trip_itinerary;
		}
	    

	    		
			    $trip_itinerary->id = $request->id?:0;
				
	    		
					    $trip_itinerary->name = $request->name;
		
	    		
					    $trip_itinerary->description = $request->description;
		
	    		
					    $trip_itinerary->thumb_image = $request->thumb_image;
		
	    		
					    $trip_itinerary->banner_image_one = $request->banner_image_one;
		
	    		
					    $trip_itinerary->banner_image_two = $request->banner_image_two;
		
	    		
					    $trip_itinerary->banner_image_three = $request->banner_image_three;
		
	    		
					    $trip_itinerary->banner_image_four = $request->banner_image_four;
		
	    	    //$trip_itinerary->user_id = $request->user()->id;
	    $trip_itinerary->save();

	    return redirect('/trip_itineraries');

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$trip_itinerary = Trip_itinerary::findOrFail($id);

		$trip_itinerary->delete();
		return "OK";
	    
	}

	
}