<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;#import model

class RegisterController extends Controller
{
    function addData(Request $request)
    {
        $registration = new Register();
        $registration->firstName = $request->firstName;
        $registration->lastName = $request->lastName;
        $registration->gender = $request->gender;
        $registration->email = $request->email;
        $registration->password = $request->password;
        $registration->number = $request->number;
        $registration->save();
        return redirect('formulario');
    }
}