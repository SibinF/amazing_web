<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Package_trip_itinerary;

use DB;

class Package_trip_itinerariesController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
	{
	    return view('package_trip_itineraries.index', []);
	}

	public function create(Request $request)
	{
	    return view('package_trip_itineraries.add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$package_trip_itinerary = Package_trip_itinerary::findOrFail($id);
	    return view('package_trip_itineraries.add', [
	        'model' => $package_trip_itinerary	    ]);
	}

	public function show(Request $request, $id)
	{
		$package_trip_itinerary = Package_trip_itinerary::findOrFail($id);
	    return view('package_trip_itineraries.show', [
	        'model' => $package_trip_itinerary	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM package_trip_itineraries a ";
		if($_GET['search']['value']) {	
			$presql .= " WHERE trip_itinerary_id LIKE '%".$_GET['search']['value']."%' ";
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
		$package_trip_itinerary = null;
		if($request->id > 0) { $package_trip_itinerary = Package_trip_itinerary::findOrFail($request->id); }
		else { 
			$package_trip_itinerary = new Package_trip_itinerary;
		}
	    

	    		
					    $package_trip_itinerary->package_id = $request->package_id;
		
	    		
					    $package_trip_itinerary->trip_itinerary_id = $request->trip_itinerary_id;
		
	    	    //$package_trip_itinerary->user_id = $request->user()->id;
	    $package_trip_itinerary->save();

	    return redirect('/package_trip_itineraries');

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$package_trip_itinerary = Package_trip_itinerary::findOrFail($id);

		$package_trip_itinerary->delete();
		return "OK";
	    
	}

	
}