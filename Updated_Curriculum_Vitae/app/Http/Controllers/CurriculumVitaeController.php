<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Courses;
use App\Models\Project;
use App\Models\Education;
use App\Models\UserLinks;
use App\Models\Experience;
use App\Models\Internship;
use App\Models\SoftSkills;
use App\Models\Programming;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Models\ProfileAccessRequest;

class CurriculumVitaeController extends Controller
{
    // Show Homepage
    public function index() {
        if(auth()->user() != null) {
            $userId = auth()->user()->id;

            $experiences = Userlinks::
            join('experience', 'user_links.experience_id', '=', 'experience.id')
            ->where('user_links.user_id', $userId)
            ->select('experience.*')
            ->get();

            $educations = Userlinks::
            join('education', 'user_links.education_id', '=', 'education.id')
            ->where('user_links.user_id', $userId)
            ->select('education.*')
            ->get();

            $courses = Userlinks::
            join('courses', 'user_links.courses_id', '=', 'courses.id')
            ->where('user_links.user_id', $userId)
            ->select('courses.*')
            ->get();

            $internships = Userlinks::
                join('internships', 'user_links.internship_id', '=', 'internships.id')
                ->where('user_links.user_id', $userId)
                ->select('internships.*')
                ->get();

            $projects = Userlinks::
                join('projects', 'user_links.project_id', '=', 'projects.id')
                ->where('user_links.user_id', $userId)
                ->select('projects.*')
                ->get();

        } else {
            $experiences = Experience::get();
            $educations = Education::get();
            $courses = Courses::get();
            $internships = Internship::get();
            $projects = Project::get();
        }
        
        return view('curriculumvitae.index', [
        ])->with('experiences', $experiences)
        ->with('educations', $educations)
        ->with('courses', $courses)
        ->with('internships', $internships)
        ->with('projects', $projects);
    }

    // Show Choice Form
    public function choice() {
        return view('curriculumvitae.choice');
    }

    // Nav Bar pages start here


    // Return Manage Page View
    public function manage() {
        $userId = auth()->user()->id;
    
        $educations = Userlinks::
            join('education', 'user_links.education_id', '=', 'education.id')
            ->where('user_links.user_id', $userId)
            ->select('education.*')
            ->get();
    
        $experiences = Userlinks::
            join('experience', 'user_links.experience_id', '=', 'experience.id')
            ->where('user_links.user_id', $userId)
            ->select('experience.*')
            ->get();
    
        $courses = Userlinks::
            join('courses', 'user_links.courses_id', '=', 'courses.id')
            ->where('user_links.user_id', $userId)
            ->select('courses.*')
            ->get();
    
        $internships = Userlinks::
            join('internships', 'user_links.internship_id', '=', 'internships.id')
            ->where('user_links.user_id', $userId)
            ->select('internships.*')
            ->get();
    
        $programming = Userlinks::
            join('programming', 'user_links.programming_id', '=', 'programming.id')
            ->where('user_links.user_id', $userId)
            ->select('programming.*')
            ->get();
    
        $softSkills = Userlinks::
            join('softskills', 'user_links.softskills_id', '=', 'softskills.id')
            ->where('user_links.user_id', $userId)
            ->select('softskills.*')
            ->get();

        $projects = Userlinks::
            join('projects', 'user_links.project_id', '=', 'projects.id')
            ->where('user_links.user_id', $userId)
            ->select('projects.*')
            ->get();
    
        return view('users.manage')
            ->with('educations', $educations)
            ->with('experiences', $experiences)
            ->with('courses', $courses)
            ->with('internships', $internships)
            ->with('programming', $programming)
            ->with('softSkills', $softSkills)
            ->with('projects', $projects)
            ->with('userId', $userId);
    }

    // Return About Owner Page View
    public function aboutUser(User $user) {

        $userId = $user->id;

        $programming = Userlinks::
        join('programming', 'user_links.programming_id', '=', 'programming.id')
        ->where('user_links.user_id', $userId)
        ->select('programming.*')
        ->get();

        $softSkills = Userlinks::
            join('softskills', 'user_links.softskills_id', '=', 'softskills.id')
            ->where('user_links.user_id', $userId)
            ->select('softskills.*')
            ->get();

        $requestStatus = ProfileAccessRequest::
            where('user_id', auth()->id())
            ->where('profile_owner_id', $userId)
            ->value('status');

        // dd($user, $programming, $softSkills, $requestStatus);

        return view('users.aboutUser')
        ->with('programming', $programming)
        ->with('softSkills', $softSkills)
        ->with('requestStatus', $requestStatus)
        ->with('user', $user);
    }

    // Return About CurriculumVitae Page View
    public function aboutCV() {
        return view('curriculumvitae.aboutCurriculumVitae');
    }
}
