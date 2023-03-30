<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Education;
use App\Models\Experience;

class CurriculumVitaeController extends Controller
{
    // Show homepage
    public function index() {
            $Experience = Experience::all();
            // dd($Experience);
            $Education = Education::all();
            $Courses = Courses::all();
            return view('/curriculumvitae.index')->with('Experience', $Experience)->with('Education', $Education)->with('Courses', $Courses);
    }
}
