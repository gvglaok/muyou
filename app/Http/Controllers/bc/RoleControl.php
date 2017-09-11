<?php

namespace App\Http\Controllers\bc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Role;

class RoleControl extends Controller
{


    // role attach alias
    /* $user->attachRole($admin); // parameter can be an Role object, array, or id

    // or eloquent's original technique
    $user->roles()->attach($admin->id); // id only */


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('bcon.role',['roles'=>Role::all()]);
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
        
        $owner = new Role();
        $owner->name         = $request->name;
        $owner->display_name = $request->dname;  
        $owner->description  = $request->description;
        $owner->save();

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
        
        $owner = Role::find($id);
        $owner->name         = $request->name;
        $owner->display_name = $request->dname;  
        $owner->description  = $request->description;
        $owner->save();
        
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
        $role = Role::whereId($id)->delete();
        return redirect()->back();
    }
}
