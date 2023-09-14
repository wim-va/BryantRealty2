<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Controllers\LoginController;
use App\Http\Requests\UpdateAgentRequest;




// LoginController

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('agents.index', ['agents' => Agent::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('agents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* */

        /* 
        $validated = $request->validate([
            "firstName" => "required|regex:/^[A-Za-zs\/-]/|min:3",
            "lastName" => "required|regex:/^[A-Za-zs\/-]/|min:3",
            "address" => "required",
            "postcode" => "required|numeric|digits:4",
            "city" => "required|alpha|min:3",
            "telephone" => "min:9|regex:/\+?\d{9,11}/",
            "email" => "required|email:dns",
            "website" => "required|active_url",
            "company" => "required|regex:/[a-zA-Z0-9\s]+/|min:3",
            "vat_number" => ['size:14', 'required', 'regex:/^(BE|be)[0-9]{4}.[0-9]{3}.[0-9]{3}$/'],
            // "vat_number" => "[required|regex:/^(BE|be)[0-9]{4}.[0-9]{3}.[0-9]{3}/]",
            // "password" => "min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",
            "password" => "min:8|required|confirmed",
                  ]);
                   */



        $validated = [
            "firstName" => "Señor Pequeña",
            "lastName" => "Pendejo",
            "address" => "Kerstr 7",
            "postcode" => "3000",
            "city" => "Leuven",
            "telephone" => "+3216400639",
            "email" => "wim.purple+" . rand(1, 100000000) . "@gmail.com",
            "website" => "https://stackoverflow.com/",
            "company" => "Kok & Bollz",
            "vat_number" => "BE1234.123.123",
            // "vat_number" => "[required|regex:/^(BE|be)[0-9]{4}.[0-9]{3}.[0-9]{3}/]",
            // "password" => "min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",
            "password" => bcrypt('Password'),
        ];


        $validated['is_admin'] = false;
        $validated['is_agent'] = true;
        User::create($validated);

        $attempt = [
            'email' => $validated['email'],
            'password' => $validated['password'],
        ];

        return ($attempt);

        if (Auth::attempt($attempt, true)) {
            session()->regenerate();
            return redirect(route('agents.index'))->with('success', 'New Agent successfully created');
        }

        return redirect()->back();

















        // $request->authenticate();

        // $request->session()->regenerate();

        // \^(BE|be)[0-9]{4}\.[0-9]{3}\.[0-9]{3}$



        // regex:/^[A-Za-zs\/-]/
        // /^[A-Za-zs\-]+$

        return redirect(
            route(

                'agents.index'
            )
        )->with('success', 'New Agent successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        //w
        return view('agents.show', ['agent' => $agent]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        //
        return view('agents.edit', ['agent' => $agent]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        //
    }


    function login()
    {
        return view('agents.login');
    }



    function verify(Request $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect('listings.index')->with('success', 'Welcome back, Agent Smith!');
    }
    function
    logout()
    {
        return ('logging out agent');
    }
}
