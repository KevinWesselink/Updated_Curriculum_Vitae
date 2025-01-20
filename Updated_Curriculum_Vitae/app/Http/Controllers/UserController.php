<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Courses;
use App\Models\Project;
use App\Models\Countries;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Internship;
use App\Models\SoftSkills;
use App\Models\Programming;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Models\ProfileAccessRequest;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

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

        $mailController = new MailController();
        $email = $formFields['email'];
        $mailController->registerMail($email);

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

    // Forgot Password Form
    public function forgotPassword() {
        return view('users.forgotPassword');
    }

    // Send Reset Password Link
    public function sendPasswordResetLink(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email']
        ]);

        $user = User::where('email', $formFields['email'])->first();

        if ($user) {
            $mailController = new MailController();
            $mailController->resetPasswordMail($user);

            return redirect('/')->with('message', 'Wachtwoord reset link verzonden');
        }

        return back()->withErrors(['email' => 'Ongeldige Gegevens'])->onlyInput('email');
    }

    // Reset Password Form
    public function resetPassword($token, Request $request) {
        $email = urldecode($request->query('email'));
    
        $passwordReset = DB::table('password_reset_tokens')
            ->where('email', $email)
            ->first();
    
        if (!$passwordReset || !Hash::check($token, $passwordReset->token)) {
            return redirect('/')->withErrors(['message' => 'Ongeldig of verlopen reset token.']);
        }
    
        $user = User::where('email', $email)->first();
    
        if (!$user) {
            return redirect('/')->withErrors(['message' => 'Gebruiker niet gevonden.']);
        }
    
        return view('users.resetPassword', ['user' => $user]);
    }

    // Update Password
    public function updatePassword(Request $request, User $user) {
        $formFields = $request->validate([
            'password' => 'required|confirmed|min:6'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user->update($formFields);

        return redirect('/')->with('message', 'Wachtwoord geupdate');
    }

    public function userExport()
    {
        // Return Excel document
        // return Excel::download(new UsersExport, 'users.xlsx');
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

    // Relationship With Projects
    public function Projects() {
        return $this->hasMany(Project::class, 'user_id');
    }

    // Show Edit User Form
    public function edit(User $user) {
        $countries = Countries::all();

        return view('users.editUser')->with('user', $user)->with('countries', $countries);
    }

    // Update User
    public function update(Request $request, User $user) {
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
        ]);

        $user->update($formFields);

        return redirect(url('/manage/' . $user->id))->with('message', 'Gebruiker gegevens geupdate');
    }

    // Open Settings Page
    public function settings(User $user) {
        return view('users.settings')->with('user', $user);
    }

    // Update Settings
    public function updateSettings(Request $request)
    {
        DB::enableQueryLog();

        $formfields = $request->validate([
            'notifications' => 'required|boolean',
            'email_notifications' => 'required|boolean',
            'profile_visibility' => 'required|in:public,private',
        ]);

        $user = auth()->user();
        $user->update($formfields);

        return redirect()->back()->with('message', 'Instellingen bijgewerkt');
    }

    // Request Profile Access
    public function requestAccess(User $user) {
        $formfields = [
            'profile_owner_id' => $user->id,
            'user_id' => auth()->id(),
            'status' => 'pending'
        ];

        ProfileAccessRequest::create($formfields);

        $mailController = new MailController();
        $mailController->requestAccessMail($user);

        return redirect()->back()->with('message', 'Toegang aangevraagd');
    }

    // Manage Profile Access Form
    public function manageProfileAccess()
    {
        $profileAccessRequests = ProfileAccessRequest::where('profile_owner_id', auth()->id())
            ->with('requester')
            ->get();

        return view('users.manageProfileAccess')->with('profileAccessRequests', $profileAccessRequests);
    }

    // Manage Profile Access
    public function manageAccess(Request $request, User $user) {
        $formfields = $request->validate([
            'status' => 'required|in:approved,rejected'
        ]);

        $profileAccessRequest = ProfileAccessRequest::where('user_id', $user->id)->where('profile_owner_id', auth()->id())->first();
        $profileAccessRequest->update($formfields);

        return redirect()->back()->with('message', 'Toegang bijgewerkt');
    }

    // Approve Profile Access
    public function approve($id)
    {
        $profileAccessRequest = ProfileAccessRequest::findOrFail($id);

        if ($profileAccessRequest->profile_owner_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $profileAccessRequest->update(['status' => 'approved']);

        return redirect()->back()->with('message', 'Toegang goedgekeurd');
    }

    // Reject Profile Access
    public function reject($id)
    {
        $profileAccessRequest = ProfileAccessRequest::findOrFail($id);

        if ($profileAccessRequest->profile_owner_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $profileAccessRequest->update(['status' => 'rejected']);

        return redirect()->back()->with('message', 'Toegang geweigerd');
    }
}
