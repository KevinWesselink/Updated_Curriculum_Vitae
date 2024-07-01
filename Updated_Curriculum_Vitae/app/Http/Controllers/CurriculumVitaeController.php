<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Courses;
use App\Models\Education;
use App\Models\UserLinks;
use App\Models\Experience;
use App\Models\Internship;
use App\Models\SoftSkills;
use App\Models\Programming;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class CurriculumVitaeController extends Controller
{
    // Show Homepage
    public function index() {
        if(auth()->user() != null) {
            $userId = auth()->user()->id;

            $experience = DB::table('user_links')
            ->join('experience', 'user_links.experience_id', '=', 'experience.id')
            ->where('user_links.user_id', $userId)
            ->select('experience.*')
            ->get();

            $education = DB::table('user_links')
            ->join('education', 'user_links.education_id', '=', 'education.id')
            ->where('user_links.user_id', $userId)
            ->select('education.*')
            ->get();

            $courses = DB::table('user_links')
            ->join('courses', 'user_links.courses_id', '=', 'courses.id')
            ->where('user_links.user_id', $userId)
            ->select('courses.*')
            ->get();

            $internships = DB::table('user_links')
                ->join('internships', 'user_links.internships_id', '=', 'internships.id')
                ->where('user_links.user_id', $userId)
                ->select('internships.*')
                ->get();

        } else {
            $experience = Experience::get();
            $education = Education::get();
            $courses = Courses::get();
            $internships = Internship::get();
        }
        

        return view('curriculumvitae.index', [
        ])->with('experience', $experience)
        ->with('education', $education)
        ->with('courses', $courses)
        ->with('internships', $internships);
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

        $newExperience = Experience::create($formFields);
        $experienceId = $newExperience->id;

        $experienceLinks = [];
        $experienceLinks['user_id'] = auth()->id();
        $experienceLinks['experience_id'] = $experienceId;

        UserLinks::create($experienceLinks);

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

        $newEducation = Education::create($formFields);
        $educationId = $newEducation->id;

        $educationLinks = [];
        $educationLinks['user_id'] = auth()->id();
        $educationLinks['education_id'] = $educationId;

        UserLinks::create($educationLinks);

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

        $newCourse = Courses::create($formFields);
        $courseId = $newCourse->id;

        $courseLinks = [];
        $courseLinks['user_id'] = auth()->id();
        $courseLinks['courses_id'] = $courseId;

        UserLinks::create($courseLinks);

        return redirect('/')->with('message', 'Nieuwe cursus aangemaakt');
    }

    // Show Single Experience
    public function showExp(Experience $experience) {
        return view('curriculumvitae.show-experience', [
            'experience' => $experience
        ]);
    }

    // Show Single Education
    public function showEdu(Education $education) {
        return view('curriculumvitae.show-education', [
            'education' => $education
        ]);
    }

    // Show Single Course
    public function showCrs(Courses $courses) {
        return view('curriculumvitae.show-courses', [
        'courses' => $courses
        ]);
    }

    // Show Single Internship
    public function showInternships(Internship $internships) {
        return view('curriculumvitae.show-internships', [
            'internships' => $internships
        ]);
    }

    // Show Edit Experience Form
    public function editExp(Experience $experience) {
        return view('curriculumvitae.editExperience', ['experience' => $experience]);
    }

    // Update Experience Data
    public function updateExp(Request $request, Experience $experience) {

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
    public function destroyExp(Experience $experience) {

        $userLinkId = UserLinks::where('experience_id', $experience->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        UserLinks::where('experience_id', $experience->id)->delete();
        $experience->delete();
        return redirect('/')->with('message', 'Werkervaring verwijderd');
    }


    // Show Edit Education Form
    public function editEdu(Education $education) {
        return view('curriculumvitae.editEducation', ['education' => $education]);
    }

    // Update Education Data
    public function updateEdu(Request $request, Education $education) {

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
    public function destroyEdu(Education $education) {

        $userLinkId = UserLinks::where('education_id', $education->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze opleiding');
        }

        UserLinks::where('education_id', $education->id)->delete();
        $education->delete();
        return redirect('/')->with('message', 'Opleiding verwijderd');
    }


    // Show Edit Courses Form
    public function editCrs(Courses $courses) {
        return view('curriculumvitae.editCourses', ['courses' => $courses]);
    }

    // Update Courses Data
    public function updateCrs(Request $request, Courses $courses) {

        $userLinkId = UserLinks::where('courses_id', $courses->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
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

        $userLinkId = UserLinks::where('courses_id', $courses->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze cursus');
        }

        UserLinks::where('courses_id', $courses->id)->delete();
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

        $newProgramming = Programming::create($formFields);
        $programmingId = $newProgramming->id;

        $programmingLinks = [];
        $programmingLinks['user_id'] = auth()->id();
        $programmingLinks['programming_id'] = $programmingId;

        UserLinks::create($programmingLinks);

        return redirect('/about/user/{id}')->with('message', 'Nieuwe programmeerervaring aangemaakt');
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

        UserLinks::where('programming_id', $programming->id)->delete();
        $programming->delete();
        return redirect('/about/user/{id}')->with('message', 'Programmeerervaring verwijderd');
    }




    // SoftSkills starts here



    // Show Create SoftSkills Form
    public function createSoftSkills() {
        return view('aboutuser.createSoftSkills');
    }

    // Store SoftSkills Data
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

        $newSoftSkill = SoftSkills::create($formFields);
        $softSkillId = $newSoftSkill->id;

        $softSkillLink = [];
        $softSkillLink['user_id'] = auth()->id();
        $softSkillLink['softSkills_id'] = $softSkillId;

        UserLinks::create($softSkillLink);

        return redirect('/about/user/{id}')->with('message', 'Nieuwe soft skill aangemaakt');
    }

    // Show Edit SoftSkills Form
    public function editSoftSkills(SoftSkills $softskills) {
        return view('aboutuser.editSoftSkills', ['softskills' => $softskills]);
    }

    // Update SoftSkills Data
    public function updateSoftSkills(Request $request, SoftSkills $softskills) {

        $userLinkId = UserLinks::where('softskills_id', $softskills->id)->value('user_id');

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

        $softskills->update($formFields);

        return back()->with('message', 'Soft skill geüpdatet');
    }

    // Delete SoftSkills
    public function destroySoftSkills(SoftSkills $softskills) {

        $userLinkId = UserLinks::where('softskills_id', $softskills->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze soft skill');
        }

        UserLinks::where('softskills_id', $softskills->id)->delete();
        $softskills->delete();
        return redirect('/about/user/{id}')->with('message', 'Soft skill verwijderd');
    }





    // Internships start here


    
    // Show Internships page
    public function createInternship() {
        return view('curriculumvitae.createInternship');
    }

    // Store Internships Data
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

    // Show Edit Internships Form
    public function editInternships(Internship $internships) {
        return view('curriculumvitae.editInternships', ['internships' => $internships]);
    }

    // Update Internships Data
    public function updateInternships(Request $request, Internship $internships) {

        $userLinkId = UserLinks::where('internship_id', $internships->id)->value('user_id');

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

        $internships->update($formFields);

        return back()->with('message', 'Stage geüpdatet');
    }

    // Delete Internships
    public function destroyInternships(Internship $internships) {

        $userLinkId = UserLinks::where('internship_id', $internships->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze stage');
        }

        UserLinks::where('internship_id', $internships->id)->delete();
        $internships->delete();
        return redirect('/')->with('message', 'Stage verwijderd');
    }


    // Nav Bar pages start here


    // Return Manage Page View
    public function manage() {
        $userId = auth()->user()->id;
    
        $educations = DB::table('user_links')
            ->join('education', 'user_links.education_id', '=', 'education.id')
            ->where('user_links.user_id', $userId)
            ->select('education.*')
            ->get();
    
        $experiences = DB::table('user_links')
            ->join('experience', 'user_links.experience_id', '=', 'experience.id')
            ->where('user_links.user_id', $userId)
            ->select('experience.*')
            ->get();
    
        $courses = DB::table('user_links')
            ->join('courses', 'user_links.courses_id', '=', 'courses.id')
            ->where('user_links.user_id', $userId)
            ->select('courses.*')
            ->get();
    
        $internships = DB::table('user_links')
            ->join('internships', 'user_links.internship_id', '=', 'internships.id')
            ->where('user_links.user_id', $userId)
            ->select('internships.*')
            ->get();
    
        $programming = DB::table('user_links')
            ->join('programming', 'user_links.programming_id', '=', 'programming.id')
            ->where('user_links.user_id', $userId)
            ->select('programming.*')
            ->get();
    
        $softSkills = DB::table('user_links')
            ->join('softskills', 'user_links.softskills_id', '=', 'softskills.id')
            ->where('user_links.user_id', $userId)
            ->select('softskills.*')
            ->get();
    
        return view('users.manage')
            ->with('educations', $educations)
            ->with('experiences', $experiences)
            ->with('courses', $courses)
            ->with('internships', $internships)
            ->with('programming', $programming)
            ->with('softSkills', $softSkills);
    }

    // Return About Owner Page View
    public function aboutUser() {

        $userId = auth()->user()->id;
        $user = User::find($userId);

        $programming = DB::table('user_links')
        ->join('programming', 'user_links.programming_id', '=', 'programming.id')
        ->where('user_links.user_id', $userId)
        ->select('programming.*')
        ->get();

        $softSkills = DB::table('user_links')
            ->join('softskills', 'user_links.softskills_id', '=', 'softskills.id')
            ->where('user_links.user_id', $userId)
            ->select('softskills.*')
            ->get();

        return view('users.aboutUser')->with('programming', $programming)->with('softSkills', $softSkills)->with('user', $user);
    }

    // Return About CurriculumVitae Page View
    public function aboutCV() {
        return view('curriculumvitae.aboutCurriculumVitae');
    }
}
