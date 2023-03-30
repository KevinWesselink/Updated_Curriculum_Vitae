<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Education;
use App\Models\Experience;

class CurriculumVitaeController extends Controller
{
    // Show homepage
    public function index() {
        return view('curriculumvitae.index', [
            'Education' => Education::latest(),
            'Experience' => Experience::latest(),
            'Courses' => Courses::latest()
        ]);
    }
}
