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

    // Show Create Education Form
    public function createEdu() {
        return view('curriculumvitae.createEducation');
    }

    // Show Create Courses Form
    public function createCrs() {
        return view('curriculumvitae.createCourses');
    }

    // Store Listing Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }
}
