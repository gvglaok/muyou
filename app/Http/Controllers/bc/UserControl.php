<?php

namespace App\Http\Controllers\bc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserControl extends Controller
{
    public function UserList()
    {
        $users = User::paginate(15);
        return view('bcon.URP',['users'=>$users]);
    }
}
