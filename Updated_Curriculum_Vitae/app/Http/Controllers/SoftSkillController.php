<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoftSkills;
use App\Models\UserLinks;

class SoftSkillController extends Controller
{
   // Show Create SoftSkill Form
    public function createSoftSkill() {
        return view('aboutuser.createSoftSkill');
    }

    // Store SoftSkill Data
    public function storeSoftSkill(Request $request) {
        $formFields = $request->validate([
            'skillName' => 'required',
            'experienceLevel' => 'required',
            'smallExplanation1' => 'required',
            'smallExplanation2' => '',
            'smallExplanation3' => '',
            'smallExplanation4' => '',
            'smallExplanation5' => '',
            'startedWith' => 'required',
            'workedWithUntil' => 'required',
        ]);

        $newSoftSkill = SoftSkills::create($formFields);
        $softSkillId = $newSoftSkill->id;

        $softSkillLink = [];
        $softSkillLink['user_id'] = auth()->id();
        $softSkillLink['softskills_id'] = $softSkillId;

        UserLinks::create($softSkillLink);

        $userId = auth()->user()->id;

        return redirect(route('aboutUser', $userId))->with('message', 'Nieuwe soft skill aangemaakt');
    }

    // Show Edit SoftSkill Form
    public function editSoftSkill(SoftSkills $softskill) {
        return view('aboutuser.editSoftSkill', ['softskill' => $softskill]);
    }

    // Update SoftSkills Data
    public function updateSoftSkill(Request $request, SoftSkills $softskill) {

        $userLinkId = UserLinks::where('softskills_id', $softskill->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze soft skill');
        }

        $formFields = $request->validate([
            'skillName' => 'required',
            'experienceLevel' => 'required',
            'smallExplanation1' => 'required',
            'smallExplanation2' => '',
            'smallExplanation3' => '',
            'smallExplanation4' => '',
            'smallExplanation5' => '',
            'startedWith' => 'required',
            'workedWithUntil' => 'required',
        ]);

        $softskill->update($formFields);

        return back()->with('message', 'Soft skill geüpdatet');
    }

    // Delete SoftSkill
    public function destroySoftSkill(SoftSkills $softskill) {

        $userLinkId = UserLinks::where('softskills_id', $softskill->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze soft skill');
        }

        $userId = auth()->user()->id;

        UserLinks::where('softskills_id', $softskill->id)->delete();
        $softskill->delete();
        return redirect(route('aboutUser', $userId))->with('message', 'Soft skill verwijderd');
    }
}
