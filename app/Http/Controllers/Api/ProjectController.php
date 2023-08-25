<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function projectIndex(){
        $projects = Project :: all();
        return response()->json([
            'projects'=>$projects
        ]);
    }

    public function projectShow($id){
        $project = Project :: findOrFail($id);
        return response()->json([
            'project'=>$project
        ]);
    }
}
