<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resnews = DB::select("select n.id as idnews,n.tittle,n.content from tbl_news as n inner join tbl_category as c on n.id_category = c.id");
        $test = "ini var";
        return view('news.index',compact('resnews'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.add');

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
       
        $resfindnews = DB::select("SELECT * from tbl_news where id=".$id);
        $findnews = $resfindnews[0];
        return view('news.edit',compact('findnews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $tittle = $request->tittle;
        $content = $request->content;

        $updatenews = DB::update("UPDATE tbl_news SET tittle = '".$tittle."', content = '".$content."' WHERE id = ".$id."; ");
        
        return redirect()->route('getnews');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletenews = DB::delete("DELETE FROM tbl_news WHERE id=".$id.";");
        return redirect()->route('getnews');

    }
}
