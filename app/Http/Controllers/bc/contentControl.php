<?php

namespace App\Http\Controllers\bc;

use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Image;
use Htmldom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content;


class contentControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bcon.content');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bcon.contentAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'title'=>'required|max:255',
                'tags'=>'required|max:255',
                'info'=>'max:255',
                'content'=>'required',
            ]);
        $shd = new \Htmldom;
        $html = $shd->str_get_html($request->content);

        $img=Image::make("http://ww2.sinaimg.cn/large/0060lm7Tly1fj7ywm4i7xj305k05kwet.jpg")->blur(15);
        Storage::put("public/".time().".jpg", $img);

        foreach ($html->find('img') as $value) {
            echo($value->src."<br>");
            
        }


        $content = new Content;
        $content -> authorID = Auth::id();
        $content -> title = $request -> title;
        $content -> tags = $request -> tags;
        $content -> info = $request -> info;
        $content -> content = $request -> content;
        //$content -> save();

        //return redirect()->back()->withErrors($validator)->withInput();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
