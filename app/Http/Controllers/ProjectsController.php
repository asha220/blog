<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //
    public function index()
    {

        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function show($id)
    {

        $project = Project::findOrFail($id);

        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        Project::create(request(['title','description']));

        return redirect('/projects');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {

        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(\request(['title', 'description']));
        

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
      $project->delete();
        //
        // $project->title
        return redirect('/projects');
    }
}
