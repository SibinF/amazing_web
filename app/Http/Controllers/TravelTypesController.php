<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Travel_type;

use DB;

class Travel_typesController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
	{
	    return view('travel_types.index', []);
	}

	public function create(Request $request)
	{
	    return view('travel_types.add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$travel_type = Travel_type::findOrFail($id);
	    return view('travel_types.add', [
	        'model' => $travel_type	    ]);
	}

	public function show(Request $request, $id)
	{
		$travel_type = Travel_type::findOrFail($id);
	    return view('travel_types.show', [
	        'model' => $travel_type	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM travel_types a ";
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
		$travel_type = null;
		if($request->id > 0) { $travel_type = Travel_type::findOrFail($request->id); }
		else { 
			$travel_type = new Travel_type;
		}
	    

	    		
			    $travel_type->id = $request->id?:0;
				
	    		
					    $travel_type->name = $request->name;
		
	    		
					    $travel_type->description = $request->description;
		
	    	    //$travel_type->user_id = $request->user()->id;
	    $travel_type->save();

	    return redirect('/travel_types');

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$travel_type = Travel_type::findOrFail($id);

		$travel_type->delete();
		return "OK";
	    
	}

	
}