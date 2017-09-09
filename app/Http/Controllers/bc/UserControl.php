<?php

namespace App\Http\Controllers\bc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\UserInfo;
use Validator;
use Image;
use Storage;
use Auth;
use Hash;

class UserControl extends Controller
{
    public function login(Request $request)
    {
        $vali = Validator::make($request->all(),[
            'email' => 'required|string|email|max:100',
            'pwd' => 'required|string|min:6',
        ]);

        $em = $request->email;
        $pwd = $request->pwd;
        
        if(Auth::attempt(['email' => $em, 'password' => $pwd]))
        {
            return redirect('/');
        } else {
            return redirect()->back()->withErrors($vali)->withInput();
        }
        

    }
    public function UserList()
    {
        $users = User::paginate(15);
        return view('bcon.URP',['users'=>$users]);
    }
    
    public function regist(Request $request)
    {
        $vali = Validator::make($request->all(),[
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:100|unique:users',
            'pwd' => 'required|string|min:6|confirmed',
            'myimg' => 'image'
        ]);
        
        $user = new User;
        $user-> name = $request->name;
        $user-> email = $request->email;
        $user-> password = bcrypt($request->pwd);
        $user->save();
        
        if(isset($request->myimg))
        {
            $path = $request->file('myimg')->store('userCover','public');    
            $userInfo = new UserInfo;
            $userInfo-> user_id = $user->id;
            $userInfo-> cover_img = $path;
            $userInfo-> save();   
        }
        return redirect()->back('/')->withErrors($vali)->withInput();
    }

    public function userEdit($id=0)
    {
        $user = User::find($id);
        return view('bcon.userEdit',['user'=>$user]);
    }

    public function update(Request $request)
    {
        $vali = Validator::make($request->all(),[
            'uid' => 'required|numeric',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'pwd' => 'string|min:6|confirmed',
            'myimg' => 'image'
        ]);
        $uid = $request->uid;
        
        $user = User::find($uid);

        if(isset($request->myimg))
        {
            $path = $request->file('myimg')->store('userCover','public');
        } else {
            $path = NULL;
        }

        $user-> name = $request->name;
        $user-> email = $request->email;

        if(isset($request->pwd))
        {
            $user-> password = bcrypt($request->pwd);
        }
        
        if($user->userinfo && isset($path))
        {
            $user->userinfo->cover_img = $path;
            $user->save();
        } else if(isset($path)) {
            $userinfo = new UserInfo;
            $userinfo -> user_id = $uid;
            $userinfo -> cover_img = $path;
            $userinfo -> save();
            $user->save();
        } else {
            $user->save();
        }
        return redirect()->back();
    }

    public function delete($id)
    {
        $user = User::find($id);
        if($user->userinfo){
            $userCover = $user->userinfo->cover_img;
            Storage::disk('public')->delete($userCover);
            $user->userinfo->delete();
        }
        $user->delete();
        
        return redirect()->back();
    }

}
