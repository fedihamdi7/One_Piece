<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class themeController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('responsable');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resp_id=Auth::user()->id;
        $club = DB::table('clubs')
        ->where('clubs.users_id',$resp_id)
        ->get();
        return view('responsable.theme',['club' => $club]);

        return view('',['posts' => $post]);
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
        
        $this -> validate($request,[
            'logoimage' => 'image|max:1999|required'
        ]);

            $resp_id=Auth::user()->id;
            $club = DB::table('clubs')
            ->where('clubs.users_id',$resp_id)
            ->get();

               $update= DB::table('clubs')
              ->where('users_id',$resp_id)
              ->update(['club_theme ' => $filenametoStore]);

        // $request->file('logoimage')->store('images');
        // return dd($update);
        return view('responsable.theme',['club' => $club])->with('logoupload','Logo Uploaded Successfully');
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
