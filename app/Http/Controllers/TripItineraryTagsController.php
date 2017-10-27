<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Trip_itinerary_tag;

use DB;

class Trip_itinerary_tagsController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
	{
	    return view('trip_itinerary_tags.index', []);
	}

	public function create(Request $request)
	{
	    return view('trip_itinerary_tags.add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$trip_itinerary_tag = Trip_itinerary_tag::findOrFail($id);
	    return view('trip_itinerary_tags.add', [
	        'model' => $trip_itinerary_tag	    ]);
	}

	public function show(Request $request, $id)
	{
		$trip_itinerary_tag = Trip_itinerary_tag::findOrFail($id);
	    return view('trip_itinerary_tags.show', [
	        'model' => $trip_itinerary_tag	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM trip_itinerary_tags a ";
		if($_GET['search']['value']) {	
			$presql .= " WHERE tag_id LIKE '%".$_GET['search']['value']."%' ";
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
		$trip_itinerary_tag = null;
		if($request->id > 0) { $trip_itinerary_tag = Trip_itinerary_tag::findOrFail($request->id); }
		else { 
			$trip_itinerary_tag = new Trip_itinerary_tag;
		}
	    

	    		
					    $trip_itinerary_tag->trip_itinerary_id = $request->trip_itinerary_id;
		
	    		
					    $trip_itinerary_tag->tag_id = $request->tag_id;
		
	    	    //$trip_itinerary_tag->user_id = $request->user()->id;
	    $trip_itinerary_tag->save();

	    return redirect('/trip_itinerary_tags');

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$trip_itinerary_tag = Trip_itinerary_tag::findOrFail($id);

		$trip_itinerary_tag->delete();
		return "OK";
	    
	}

	
}