<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tag;

use DB;

class TagsController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
	{
	    return view('tags.index', []);
	}

	public function create(Request $request)
	{
	    return view('tags.add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$tag = Tag::findOrFail($id);
	    return view('tags.add', [
	        'model' => $tag	    ]);
	}

	public function show(Request $request, $id)
	{
		$tag = Tag::findOrFail($id);
	    return view('tags.show', [
	        'model' => $tag	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM tags a ";
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
		$tag = null;
		if($request->id > 0) { $tag = Tag::findOrFail($request->id); }
		else { 
			$tag = new Tag;
		}
	    

	    		
			    $tag->id = $request->id?:0;
				
	    		
					    $tag->name = $request->name;
		
	    		
					    $tag->icon = $request->icon;
		
	    		
					    $tag->thumb_image = $request->thumb_image;
		
	    	    //$tag->user_id = $request->user()->id;
	    $tag->save();

	    return redirect('/tags');

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$tag = Tag::findOrFail($id);

		$tag->delete();
		return "OK";
	    
	}

	
}