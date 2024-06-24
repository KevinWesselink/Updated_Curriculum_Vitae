<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang(Request $request)
    {
        $lang = $request->input('lang');
        if (array_key_exists($lang, config('languages'))) {
            Session::put('applocale', $lang);
            App::setLocale($lang);
        }
        
        return redirect()->back();
    }
}
