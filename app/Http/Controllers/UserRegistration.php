<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    // Retrieve the name input field
    public function postRegister(Request $request)
    {
        // Retrieve the name input field
        $name = $request->input('name');
    }

}
