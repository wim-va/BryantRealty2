<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class StateController extends Controller
{
    function authCheck(array $attempt) //), string $intended) //: Redirect
    {



        return ('Hier zijn we dan');
        /*

        if (Auth::attempt($attempt)) {
            session()->regenerate();
            return redirect()->intended(route($intended))->with('success', 'New Agent successfully created');;
        }
        return redirect()->back();
    }
    */
    }
}
