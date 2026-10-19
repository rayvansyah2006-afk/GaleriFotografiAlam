<?php

namespace App\Http\Controllers;

use App\Models\Photo;

class ProjectController extends Controller
{
    public function index()
{
    $projects = \App\Models\Photo::orderBy('id', 'asc')->paginate(6);

    return view('page.project', compact('projects'));
}

    public function show($id)
    {
        $project = \App\Models\Photo::findOrFail($id);

        return view('page.project-detail', compact('project'));
    }
}