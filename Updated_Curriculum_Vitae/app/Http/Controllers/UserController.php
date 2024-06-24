<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Courses;
use App\Models\Countries;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Internship;
use App\Models\SoftSkills;
use App\Models\Programming;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create() {
        $countries = Countries::all();

        return view('users.register')->with('countries', $countries);
    }

    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'userName' => ['required', 'min:3'],
            'firstName' => ['required', 'min:2'],
            'lastName' => ['required', 'min:3'],
            'sex' => ['required'],
            'telephoneNumber' => ['required', 'min:8', 'integer'], 
            'address' => ['required', 'min:3'],
            'postalCode' => ['required', 'min:6', 'max:7'],
            'city' => ['required', 'min:3'],
            'country' => ['required'], // Specifieke postcode als land Nederland is
            'dateOfBirth' => ['required', 'after_or_equal:1945-01-01'],
            'currentProfession' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'Gebruiker aangemaakt en ingelogd');
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Gebruiker uitgelogd');
    }

    // Show Login Form
    public function login() {
        return view('users.login');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Gebruiker ingelogd');
        }

        return back()->withErrors(['email' => 'Ongeldige Gegevens'])->onlyInput('email');
    }

    // Relationship With Experience
    public function Experience() {
        return $this->hasMany(Experience::class, 'user_id');
    }

    // Relationship With Education
    public function Education() {
        return $this->hasMany(Education::class, 'user_id');
    }

    // Relationship With Courses
    public function Courses() {
        return $this->hasMany(Courses::class, 'user_id');
    }

    // Relationship With Programming
    public function Programming() {
        return $this->hasMany(Programming::class, 'user_id');
    }

    // Relationship With Soft Skills
    public function SoftSkills() {
        return $this->hasMany(SoftSkills::class, 'user_id');
    }

    // Relationship With Internships
    public function Internships() {
        return $this->hasMany(Internship::class, 'user_id');
    }
}
