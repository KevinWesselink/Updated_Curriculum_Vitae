<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\UserLinks;

class ExperienceController extends Controller
{
    // Show Create Experience Form
    public function createExperience() {
        return view('curriculumvitae.createExperience');
    }

    // Store Experience Data
    public function storeExperience(Request $request) {
        $formFields = $request->validate([
            'companyName' => 'required',
            'jobTitle' => 'required',
            'smallExplanation1' => 'required',
            'smallExplanation2' => '',
            'smallExplanation3' => '',
            'smallExplanation4' => '',
            'smallExplanation5' => '',
            'yearsWorked' => 'required',
            'companyLocation' => 'required',
        ]);

        $newExperience = Experience::create($formFields);
        $experienceId = $newExperience->id;

        $experienceLinks = [];
        $experienceLinks['user_id'] = auth()->id();
        $experienceLinks['experience_id'] = $experienceId;

        UserLinks::create($experienceLinks);

        return redirect('/')->with('message', 'Nieuwe werkervaring aangemaakt');
    }

     // Show Single Experience
     public function showExperience(Experience $experience) {
        return view('curriculumvitae.showExperience', [
            'experience' => $experience
        ]);
    }

     // Show Edit Experience Form
     public function editExperience(Experience $experience) {
        return view('curriculumvitae.editExperience', ['experience' => $experience]);
    }

    // Update Experience Data
    public function updateExperience(Request $request, Experience $experience) {

        $userLinkId = UserLinks::where('experience_id', $experience->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'companyName' => 'required',
            'jobTitle' => 'required',
            'smallExplanation1' => 'required',
            'smallExplanation2' => '',
            'smallExplanation3' => '',
            'smallExplanation4' => '',
            'smallExplanation5' => '',
            'yearsWorked' => 'required',
            'companyLocation' => 'required',
        ]);

        $experience->update($formFields);

        return back()->with('message', 'Werkervaring geüpdatet');
    }

    // Delete Experience
    public function destroyExperience(Experience $experience) {

        $userLinkId = UserLinks::where('experience_id', $experience->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        UserLinks::where('experience_id', $experience->id)->delete();
        $experience->delete();
        return redirect('/')->with('message', 'Werkervaring verwijderd');
    }
}
