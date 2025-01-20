<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\UserLinks;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Show Create Project Form
    public function createProject() {
        return view('curriculumvitae.createProject');
    }

    // Store Project
    public function storeProject(Request $request) {
        $formfields = $request->validate([
            'projectName' => 'required|min:3',
            'projectDescription' => 'required',
            'projectLink' => 'required',
            'projectImage' => '',
            'projectStartDate' => 'required|date|after_or_equal:1945-01-01',
            'projectEndDate' => 'required|date|after_or_equal:projectStartDate',
            'projectRole' => 'required',
            'projectType' => 'required',
            'projectTechnologies' => 'required',
            'projectTeamSize' => 'required|min:1',
            'projectClient' => 'required',
            'projectLocation' => 'required',
            'projectStatus' => 'required',
        ]);

        $newProject = Project::create($formfields);
        $projectId = $newProject->id;

        $projectLinks = [];
        $projectLinks['user_id'] = auth()->id();
        $projectLinks['project_id'] = $projectId;
                
        UserLinks::create($projectLinks);

        return redirect('/')->with('message', 'Project aangemaakt');
    }

    // Show Single Project
    public function showProject(Project $project) {
        return view('curriculumvitae.showProject')->with('project', $project);
    }

    // Show Edit Project Form
    public function editProject(Project $project) {
        return view('curriculumvitae.editProject')->with('project', $project);
    }

    // Update Project
    public function updateProject(Request $request, Project $project) {
        $formfields = $request->validate([
            'projectName' => 'required|min:3',
            'projectDescription' => 'required',
            'projectLink' => 'required',
            'projectImage' => '',
            'projectStartDate' => 'required|date|after_or_equal:1945-01-01',
            'projectEndDate' => 'required|date|after_or_equal:projectStartDate',
            'projectRole' => 'required',
            'projectType' => 'required',
            'projectTechnologies' => 'required',
            'projectTeamSize' => 'required|min:1',
            'projectClient' => 'required',
            'projectLocation' => 'required',
            'projectStatus' => 'required',
        ]);

        $project->update($formfields);

        return redirect('/')->with('message', 'Project bijgewerkt');
    }

    // Delete Project
    public function destroyProject(Project $project) {
        $project->delete();

        return redirect('/')->with('message', 'Project verwijderd');
    }
}
