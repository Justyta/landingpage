<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    /**
     * Set the application locale
     */
    public function setLocale(Request $request, $locale)
    {
        // Validate the locale
        $supportedLocales = ['en', 'ar'];
        
        if (!in_array($locale, $supportedLocales)) {
            abort(404);
        }
        
        // Store the locale in session
        Session::put('locale', $locale);
        
        // Redirect back to the previous page
        return redirect()->back();
    }
}
