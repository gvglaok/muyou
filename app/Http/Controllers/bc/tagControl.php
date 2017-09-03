<?php

namespace App\Http\Controllers\bc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class tagControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::select("tag","id")->where("parentId",0)->get();
        return view('bcon.tags',['tags'=>$tags]);
    }

    public function quickAddTag(Request $request)
    {

        $tagArr = explode(",",$request->tags);

        for ($i=0; $i <count($tagArr) ; $i++) { 
            Tag::create(['tag'=>$tagArr[$i]]);
        }

        return redirect()->back();
        
    }

    public function nestableJson($parentID=0)
    {
        // $json = '[{"id":1,"content":"11bar"},{"id":2,"content":"bar22"},{"id":3,"content":"bar333","children":[{"id":4},{"id":5,"content":"bar"}]}]';
        // $arr = json_decode($json);
        echo "<pre>";
        // print_r($arr);

        /*
        <div class="dd" id="nestable-json"></div>

        <script>
        var json = '[{"id":1,"content":"11bar"},{"id":2,"content":"bar22"},{"id":3,"content":"bar333","children":[{"id":4},{"id":5,"content":"bar"}]}]';
        var options = {'json': json}
        $('#nestable-json').nestable(options);
        </script>
        */
        $tags = Tag::select("id","tag","parentId")->get();

        $childTags = $tags->where('parentId','<>',0);

        $tags = $tags->each(function($item,$key){
            $item->put(["content"=>$item->tag]);
        });
        
        $grouped = $childTags -> groupBy("parentId");
        
        $jsonArr=[];


        print_r($grouped->toArray());


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
        //
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
        $tag = Tag::find($id);
        $tag -> tag = $request -> tag;
        $tag -> info = $request -> info;
        $tag -> show_name = $request -> sname;
        $tag -> save();
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
        Tag::find($id)->delete();
        return redirect()->back();
    }
}
