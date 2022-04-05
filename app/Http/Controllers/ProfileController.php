<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public static function upload(Request $request){
        $validation = $request->validate(['photo'=>'required']);
        $request->file('photo')->store('profiles');
        return redirect ('profile');
    }
}
