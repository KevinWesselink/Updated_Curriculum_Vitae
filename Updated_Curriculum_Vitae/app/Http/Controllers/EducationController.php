<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\UserLinks;

class EducationController extends Controller
{
     // Show Create Education Form
     public function createEducation() {
        return view('curriculumvitae.createEducation');
    }

    // Store Education Data
    public function storeEducation(Request $request) {
        $formFields = $request->validate([
            'schoolName' => 'required',
            'educationName' => 'required',
            'smallExplanation1' => 'required',
            'smallExplanation2' => '',
            'smallExplanation3' => '',
            'smallExplanation4' => '',
            'smallExplanation5' => '',
            'yearsFollowed' => 'required',
            'status' => 'required',
            'schoolLocation' => 'required',
        ]);

        $newEducation = Education::create($formFields);
        $educationId = $newEducation->id;

        $educationLinks = [];
        $educationLinks['user_id'] = auth()->id();
        $educationLinks['education_id'] = $educationId;

        UserLinks::create($educationLinks);

        return redirect('/')->with('message', 'Nieuwe opleiding aangemaakt');
    }

     // Show Single Education
     public function showEducation(Education $education) {
        return view('curriculumvitae.showEducation', [
            'education' => $education
        ]);
    }

    // Show Edit Education Form
    public function editEducation(Education $education) {
        return view('curriculumvitae.editEducation', ['education' => $education]);
    }

    // Update Education Data
    public function updateEducation(Request $request, Education $education) {

        $userLinkId = UserLinks::where('education_id', $education->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze werkervaring');
        }

        $formFields = $request->validate([
            'schoolName' => 'required',
            'educationName' => 'required',
            'smallExplanation1' => 'required',
            'smallExplanation2' => '',
            'smallExplanation3' => '',
            'smallExplanation4' => '',
            'smallExplanation5' => '',
            'yearsFollowed' => 'required',
            'status' => 'required',
            'schoolLocation' => 'required',
        ]);

        $education->update($formFields);

        return back()->with('message', 'Opleiding geüpdatet');
    }

    // Delete Education
    public function destroyEducation(Education $education) {

        $userLinkId = UserLinks::where('education_id', $education->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze opleiding');
        }

        UserLinks::where('education_id', $education->id)->delete();
        $education->delete();
        return redirect('/')->with('message', 'Opleiding verwijderd');
    }
}
