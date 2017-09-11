<?php

namespace App\Http\Controllers\bc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Permission;

class PermissionControl extends Controller
{
    //权限赋值 给 role
    /* $admin->attachPermission($createPost);
    // equivalent to $admin->perms()->sync(array($createPost->id));
    $owner->attachPermissions(array($createPost, $editUser));
    // equivalent to $owner->perms()->sync(array($createPost->id, $editUser->id)); */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       return view('bcon.permission', ['perms'=>Permission::all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),[
            'name' => 'required|string|max:100',
            'dname' => 'max:100',
            'description' => 'max:255',
        ]);
        $perm  = new Permission();
        $perm -> name         = $request -> name;
        $perm -> display_name = $request -> dname; // optional
        $perm -> description  = $request -> description; // optional
        $perm -> save();
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(),[
            'name' => 'required|string|max:100',
            'dname' => 'max:100',
            'description' => 'max:255',
        ]);
        $perm = Permission::find($id);
        $perm->name         = $request -> name;
        $perm->display_name = $request -> dname; // optional
        $perm->description  = $request -> description; // optional
        $perm->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prem = Permission::find($id)->delete();
        return redirect()->back();
    }
}
