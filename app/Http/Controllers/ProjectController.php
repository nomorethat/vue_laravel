<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = \App\Project::all();
        return response()->json([
            'projects' => $projects->toArray()
        ]);
    }

    public function show($id)
    {
        $model = new \App\Access;
        $users = $model->getUsersByID($id);
        return response()->json([
            'users' => $users->toArray()
        ]);
    }
}
