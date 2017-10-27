<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Package_tag;

use DB;

class Package_tagsController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
	{
	    return view('package_tags.index', []);
	}

	public function create(Request $request)
	{
	    return view('package_tags.add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$package_tag = Package_tag::findOrFail($id);
	    return view('package_tags.add', [
	        'model' => $package_tag	    ]);
	}

	public function show(Request $request, $id)
	{
		$package_tag = Package_tag::findOrFail($id);
	    return view('package_tags.show', [
	        'model' => $package_tag	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM package_tags a ";
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
		$package_tag = null;
		if($request->id > 0) { $package_tag = Package_tag::findOrFail($request->id); }
		else { 
			$package_tag = new Package_tag;
		}
	    

	    		
					    $package_tag->package_id = $request->package_id;
		
	    		
					    $package_tag->tag_id = $request->tag_id;
		
	    	    //$package_tag->user_id = $request->user()->id;
	    $package_tag->save();

	    return redirect('/package_tags');

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$package_tag = Package_tag::findOrFail($id);

		$package_tag->delete();
		return "OK";
	    
	}

	
}