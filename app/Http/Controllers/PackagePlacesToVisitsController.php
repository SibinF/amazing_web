<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Package_places_to_visit;

use DB;

class Package_places_to_visitsController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
	{
	    return view('package_places_to_visits.index', []);
	}

	public function create(Request $request)
	{
	    return view('package_places_to_visits.add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$package_places_to_visit = Package_places_to_visit::findOrFail($id);
	    return view('package_places_to_visits.add', [
	        'model' => $package_places_to_visit	    ]);
	}

	public function show(Request $request, $id)
	{
		$package_places_to_visit = Package_places_to_visit::findOrFail($id);
	    return view('package_places_to_visits.show', [
	        'model' => $package_places_to_visit	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM package_places_to_visits a ";
		if($_GET['search']['value']) {	
			$presql .= " WHERE places_to_visit_id LIKE '%".$_GET['search']['value']."%' ";
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
		$package_places_to_visit = null;
		if($request->id > 0) { $package_places_to_visit = Package_places_to_visit::findOrFail($request->id); }
		else { 
			$package_places_to_visit = new Package_places_to_visit;
		}
	    

	    		
					    $package_places_to_visit->package_id = $request->package_id;
		
	    		
					    $package_places_to_visit->places_to_visit_id = $request->places_to_visit_id;
		
	    	    //$package_places_to_visit->user_id = $request->user()->id;
	    $package_places_to_visit->save();

	    return redirect('/package_places_to_visits');

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$package_places_to_visit = Package_places_to_visit::findOrFail($id);

		$package_places_to_visit->delete();
		return "OK";
	    
	}

	
}