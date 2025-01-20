<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\UserLinks;

class InternshipController extends Controller
{
    // Show Internship page
    public function createInternship() {
        return view('curriculumvitae.createInternship');
    }

    // Store Internship Data
    public function storeInternship(Request $request) {
        $formFields = $request->validate([
            'companyName' => 'required',
            'functionName' => 'required',
            'smallExplanation1' => 'required',
            'smallExplanation2' => '',
            'smallExplanation3' => '',
            'smallExplanation4' => '',
            'smallExplanation5' => '',
            'internshipStartedAt' => 'required|date',
            'internshipEndedAt' => 'required|date|after_or_equal:internshipStartedAt',
            'finalAssessment' => 'required',
            'companyLocation' => 'required',
        ]);

        $newInternship = Internship::create($formFields);
        $internshipId = $newInternship->id;

        $internshipLinks = [];
        $internshipLinks['user_id'] = auth()->id();
        $internshipLinks['internship_id'] = $internshipId;

        UserLinks::create($internshipLinks);

        return redirect('/')->with('message', 'Nieuwe stage aangemaakt');
    }

    // Show Single Internship
    public function showInternship(Internship $internship) {
        return view('curriculumvitae.showInternship', [
            'internship' => $internship
        ]);
    }

    // Show Edit Internship Form
    public function editInternship(Internship $internship) {
        return view('curriculumvitae.editInternship', ['internship' => $internship]);
    }

    // Update Internship Data
    public function updateInternship(Request $request, Internship $internship) {

        $userLinkId = UserLinks::where('internship_id', $internship->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze stage');
        }

        $formFields = $request->validate([
            'companyName' => 'required',
            'functionName' => 'required',
            'smallExplanation1' => 'required',
            'smallExplanation2' => '',
            'smallExplanation3' => '',
            'smallExplanation4' => '',
            'smallExplanation5' => '',
            'internshipStartedAt' => 'required|date',
            'internshipEndedAt' => 'required|date|after_or_equal:internshipStartedAt',
            'finalAssessment' => 'required',
            'companyLocation' => 'required',
        ]);

        $internship->update($formFields);

        return back()->with('message', 'Stage geüpdatet');
    }

    // Delete Internship
    public function destroyInternship(Internship $internship) {

        $userLinkId = UserLinks::where('internship_id', $internship->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze stage');
        }

        UserLinks::where('internship_id', $internship->id)->delete();
        $internship->delete();
        return redirect('/')->with('message', 'Stage verwijderd');
    }
}
