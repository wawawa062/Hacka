<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function checkAndRedirect()
    {
        if (rand(1,2) == 1) {
            return redirect('/surprise/show');
        }
    
        return view('/');    
    }
}
