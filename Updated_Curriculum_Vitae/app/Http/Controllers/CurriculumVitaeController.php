<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Programming;
use App\Models\SoftSkills;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CurriculumVitaeController extends Controller
{
    // Show Homepage
    public function index() {
            return view('curriculumvitae.index', [
                $Experience = Experience::latest()->get(),
                $Education = Education::latest()->get(),
                $Courses = Courses::latest()->get()
            ])->with('Experience', $Experience)->with('Education', $Education)->with('Courses', $Courses);
    }

    // Show Choice Form
    public function choice() {
        return view('curriculumvitae.choice');
    }

     // Show Create Experience Form
     public function createExp() {
        return view('curriculumvitae.createExperience');
    }

    // Store Experience Data
    public function storeExp(Request $request) {
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

        $formFields['user_id'] = auth()->id();

        Experience::create($formFields);

        return redirect('/')->with('message', 'Nieuwe werkervaring aangemaakt');
    }

    // Show Create Education Form
    public function createEdu() {
        return view('curriculumvitae.createEducation');
    }

    // Store Education Data
    public function storeEdu(Request $request) {
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

        $formFields['user_id'] = auth()->id();

        Education::create($formFields);

        return redirect('/')->with('message', 'Nieuwe opleiding aangemaakt');
    }

    // Show Create Courses Form
    public function createCrs() {
        return view('curriculumvitae.createCourses');
    }

    // Store Courses Data
    public function storeCrs(Request $request) {
        $formFields = $request->validate([
            'educatorName' => 'required',
            'courseName' => 'required',
            'smallExplanation1' => 'required',
            'smallExplanation2' => '',
            'smallExplanation3' => '',
            'smallExplanation4' => '',
            'smallExplanation5' => '',
            'validityEarned' => 'required',
            'validUntil' => 'required',
            'certificationLocation' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Courses::create($formFields);

        return redirect('/')->with('message', 'Nieuwe cursus aangemaakt');
    }

    // Show Single Experience
    public function showExp(Experience $experience) {
        return view('curriculumvitae.show-experience', [
            'experience' => $experience
        ]);
    }

    // Show Single Experience
    public function showEdu(Education $education) {
        return view('curriculumvitae.show-education', [
            'education' => $education
        ]);
    }

    // Show Single Experience
    public function showCrs(Courses $courses) {
        return view('curriculumvitae.show-courses', [
        'courses' => $courses
        ]);
    }

    // Show Edit Experience Form
    public function editExp(Experience $experience) {
        return view('curriculumvitae.editExperience', ['experience' => $experience]);
    }

    // Update Experience Data
    public function updateExp(Request $request, Experience $experience) {

        // Make sure logged in user is owner
        if ($experience->user_id != auth()->id()) {
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
    public function destroyExp(Experience $experience) {
        // Make sure logged in user is owner
        if ($experience->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $experience->delete();
        return redirect('/')->with('message', 'Werkervaring verwijderd');
    }


    // Show Edit Education Form
    public function editEdu(Education $education) {
        return view('curriculumvitae.editEducation', ['education' => $education]);
    }

    // Update Education Data
    public function updateEdu(Request $request, Education $education) {

        // Make sure logged in user is owner
        if ($education->user_id != auth()->id()) {
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
    public function destroyEdu(Education $education) {
        // Make sure logged in user is owner
        if ($education->user_id != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze opleiding');
        }

        $education->delete();
        return redirect('/')->with('message', 'Opleiding verwijderd');
    }


    // Show Edit Courses Form
    public function editCrs(Courses $courses) {
        return view('curriculumvitae.editCourses', ['courses' => $courses]);
    }

    // Update Courses Data
    public function updateCrs(Request $request, Courses $courses) {

        // Make sure logged in user is owner
        if ($courses->user_id != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze cursus');
        }

        $formFields = $request->validate([
            'educatorName' => 'required',
            'courseName' => 'required',
            'smallExplanation1' => 'required',
            'smallExplanation2' => '',
            'smallExplanation3' => '',
            'smallExplanation4' => '',
            'smallExplanation5' => '',
            'validityEarned' => 'required',
            'validUntil' => 'required',
            'certificationLocation' => 'required',
        ]);

        $courses->update($formFields);

        return back()->with('message', 'Cursus geüpdatet');
    }

    // Delete Courses
    public function destroyCrs(Courses $courses) {
        // Make sure logged in user is owner
        if ($courses->user_id != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze cursus');
        }

        $courses->delete();
        return redirect('/')->with('message', 'Cursus verwijderd');
    }




    // Programming starts here


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

        $formFields['user_id'] = auth()->id();

        Programming::create($formFields);

        return redirect('/about/user')->with('message', 'Nieuwe programmeerervaring aangemaakt');
    }

    // Show Edit Programming Form
    public function editProgramming(Programming $programming) {
        return view('aboutuser.editProgramming', ['programming' => $programming]);
    }

    // Update Programming Data
    public function updateProgramming(Request $request, Programming $programming) {

        // Make sure logged in user is owner
        if ($programming->user_id != auth()->id()) {
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
        // Make sure logged in user is owner
        if ($programming->user_id != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze programmeerervaring');
        }

        $programming->delete();
        return redirect('/about/user')->with('message', 'Programmeerervaring verwijderd');
    }




    // Soft Skills starts here



    // Show Create SoftSkills Form
    public function createSoftSkills() {
        return view('aboutuser.createSoftSkills');
    }

    // Store Soft Skills Data
    public function storeSoftSkills(Request $request) {
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

        $formFields['user_id'] = auth()->id();

        SoftSkills::create($formFields);

        return redirect('/about/user')->with('message', 'Nieuwe soft skill aangemaakt');
    }

    // Show Edit Programming Form
    public function editSoftSkills(SoftSkills $softskills) {
        return view('aboutuser.editSoftSkills', ['softskills' => $softskills]);
    }

    // Update Programming Data
    public function updateSoftSkills(Request $request, SoftSkills $softskills) {

        // Make sure logged in user is owner
        if ($softskills->user_id != auth()->id()) {
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

        $softskills->update($formFields);

        return back()->with('message', 'Soft skill geüpdatet');
    }

    // Delete Programming
    public function destroySoftSkills(SoftSkills $softskills) {
        // Make sure logged in user is owner
        if ($softskills->user_id != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze soft skill');
        }

        $softskills->delete();
        return redirect('/about/user')->with('message', 'Soft skill verwijderd');
    }




    // Nav Bar pages start here


    // Return Manage Page View
    public function manage() {
        return view('users.manage');
    }

    // Return About Owner Page View
    public function aboutUser() {
        return view('users.aboutUser', [
            $Programming = Programming::latest()->get(),
            $SoftSkills = SoftSkills::latest()->get()
        ])->with('Programming', $Programming)->with('SoftSkills', $SoftSkills);
    }

    // Return About CurriculumVitae Page View
    public function aboutCV() {
        return view('curriculumvitae.aboutCurriculumVitae');
    }
}
