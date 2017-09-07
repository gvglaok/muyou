<?php

namespace App\Http\Controllers\bc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

use App\Models\Role;

class RoleControl extends Controller
{
    public function addRole(Request $request)
    {
        $owner = new Role();
        $owner->name         = $request->name;
        $owner->display_name = $request->dname; // optional
        $owner->description  = $request->description; // optional
        $owner->save();
    }
}
