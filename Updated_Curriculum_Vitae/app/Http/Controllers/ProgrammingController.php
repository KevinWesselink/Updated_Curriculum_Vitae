<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programming;
use App\Models\UserLinks;

class ProgrammingController extends Controller
{
    // Show Create Programming Form
    public function createProgramming() {
        return view('aboutuser.createProgramming');
    }

    // Store Programming Data
    public function storeProgramming(Request $request) {
        $formFields = $request->validate([
            'languageName' => 'required',
            'experienceLevel' => 'required',
            'smallExplanation1' => 'required',
            'smallExplanation2' => '',
            'smallExplanation3' => '',
            'smallExplanation4' => '',
            'smallExplanation5' => '',
            'startedWith' => 'required',
            'workedWithUntil' => 'required',
        ]);

        $newProgramming = Programming::create($formFields);
        $programmingId = $newProgramming->id;

        $programmingLinks = [];
        $programmingLinks['user_id'] = auth()->id();
        $programmingLinks['programming_id'] = $programmingId;

        UserLinks::create($programmingLinks);

        $userId = auth()->user()->id;

        return redirect('/about/user/' . $userId)->with('message', 'Nieuwe programmeerervaring aangemaakt');
    }

    // Show Edit Programming Form
    public function editProgramming(Programming $programming) {
        return view('aboutuser.editProgramming', ['programming' => $programming]);
    }

    // Update Programming Data
    public function updateProgramming(Request $request, Programming $programming) {

        $userLinkId = UserLinks::where('programming_id', $programming->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze programmeerervaring');
        }

        $formFields = $request->validate([
            'languageName' => 'required',
            'experienceLevel' => 'required',
            'smallExplanation1' => 'required',
            'smallExplanation2' => '',
            'smallExplanation3' => '',
            'smallExplanation4' => '',
            'smallExplanation5' => '',
            'startedWith' => 'required',
            'workedWithUntil' => 'required',
        ]);

        $programming->update($formFields);

        return back()->with('message', 'Programmeerervaring geüpdatet');
    }

    // Delete Programming
    public function destroyProgramming(Programming $programming) {

        $userLinkId = UserLinks::where('programming_id', $programming->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze programmeerervaring');
        }

        $userId = auth()->user()->id;

        UserLinks::where('programming_id', $programming->id)->delete();
        $programming->delete();
        return redirect('/about/user/' . $userId)->with('message', 'Programmeerervaring verwijderd');
    }
}
