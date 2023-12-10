<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with('type','tecnologies')->paginate(20);


        return response()->json($projects);
    }

    public function getProjectBySlug($slug){
		$project = Project::where("slug", $slug)->with("type","tecnologies")->first( );
		return response( ) -> json( $project );
	}
}
