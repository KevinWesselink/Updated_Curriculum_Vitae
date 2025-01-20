<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\UserLinks;

class CourseController extends Controller
{
    // Show Create Course Form
    public function createCourse() {
        return view('curriculumvitae.createCourse');
    }

    // Store Course Data
    public function storeCourse(Request $request) {
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

    // Show Single Course
    public function showCourse(Courses $course) {
        return view('curriculumvitae.showCourse', [
        'courses' => $course
        ]);
    }

     // Show Edit Course Form
     public function editCourse(Courses $course) {
        return view('curriculumvitae.editCourse', ['course' => $course]);
    }

    // Update Courses Data
    public function updateCourse(Request $request, Courses $course) {

        $userLinkId = UserLinks::where('courses_id', $course->id)->value('user_id');

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

        $course->update($formFields);

        return back()->with('message', 'Cursus geüpdatet');
    }

    // Delete Courses
    public function destroyCourse(Courses $course) {

        $userLinkId = UserLinks::where('courses_id', $course->id)->value('user_id');

        // Make sure logged in user is owner
        if ($userLinkId != auth()->id()) {
            abort(403, 'Je bent niet de eigenaar van deze cursus');
        }

        UserLinks::where('courses_id', $course->id)->delete();
        $course->delete();
        return redirect('/')->with('message', 'Cursus verwijderd');
    }
}
