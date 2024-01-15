<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Request $request)
    {

        // $results = Project::with('technology', 'types', 'technology.projects')->paginate(10);
        $results = Project::all();

        return response()->json([
            'results' => $results,
            'success' => true
        ]);
    }    
}
