<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CurriculumVitaeController extends Controller
{
    // Show Homepage
    public function index() {
            $Experience = Experience::all();
            // dd($Experience);
            $Education = Education::all();
            $Courses = Courses::all();
            return view('/curriculumvitae.index')->with('Experience', $Experience)->with('Education', $Education)->with('Courses', $Courses);
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

        return redirect('/')->with('message', 'Nieuwe werkervaring aangemaakt.');
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

        return redirect('/')->with('message', 'Nieuwe opleiding aangemaakt.');
    }

    // Show Create Courses Form
    public function createCrs() {
        return view('curriculumvitae.createCourses');
    }

    
}
