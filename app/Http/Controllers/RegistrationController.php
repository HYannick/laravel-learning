<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $req)
    {

        $req->persist();
        session()->flash('message', 'Welcome here!');
        return redirect()->home();
    }
}
