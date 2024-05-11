<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function setLocale(Request $request, $locale)
    {
        //if the locale exist
        if (in_array($locale, ['en', 'ar'])) {
            App::setLocale($locale);
        } else {
            abort(400);
        }
        return view('index');
    }
}
