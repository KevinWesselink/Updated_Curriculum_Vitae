<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    public function openSearchPage()
    {
        $users = User::get();

        return view('aboutuser.searchPage')->with('users', $users);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $users = User::where('userName', 'LIKE', "%{$query}%")
        ->orWhere('firstName', 'LIKE', "%{$query}%")
        ->orWhere('lastName', 'LIKE', "%{$query}%")
        ->orWhere('sex', 'LIKE', "%{$query}%")
        ->orWhere('telephoneNumber', 'LIKE', "%{$query}%")
        ->orWhere('address', 'LIKE', "%{$query}%")
        ->orWhere('postalCode', 'LIKE', "%{$query}%")
        ->orWhere('city', 'LIKE', "%{$query}%")
        ->orWhere('country', 'LIKE', "%{$query}%")
        ->orWhere('dateOfBirth', 'LIKE', "%{$query}%")
        ->orWhere('currentProfession', 'LIKE', "%{$query}%")
        ->orWhere('email', 'LIKE', "%{$query}%")
        ->get();

        return view('aboutuser.searchPage', compact('users'));
    }
}

