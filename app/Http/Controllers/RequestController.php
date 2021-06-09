<?php

namespace App\Http\Controllers;

use App\User_request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('request.form');
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
        $this -> validate($request,[
            'Cname' => 'max:30|required',
            'about_club' => 'max:255|required',
            'club_logo' => 'image|required',

        ]);

        return dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User_request  $user_request
     * @return \Illuminate\Http\Response
     */
    public function show(User_request $user_request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User_request  $user_request
     * @return \Illuminate\Http\Response
     */
    public function edit(User_request $user_request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User_request  $user_request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_request $user_request)
    {
        $this -> validate($request,[
            'club_logo' => 'image|max:1999|required',
            'Cname' => 'required|max:30',
            'about_club' => 'required|max:255',
            'Deps' => 'required',
        ]);

        // if ($request->hasFile('logoimage')){
            //file name with the extension
            $fileNameWithExt = $request->file('club_logo')->getClientOriginalName();
            //just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //just extension
            $extension = $request ->file('club_logo')->getClientOriginalExtension();
            //filename to store
            $filenametoStore = $filename.'_'.time().'.'.$extension;
            //upload
            $path = $request->file('club_logo')->storeAs('public/images/club_logo/',$filenametoStore);
            // Save into database

               $update= DB::table('user_requests')
              ->where('id',$request->id)
              ->update(['club_logo' => $filenametoStore,
                        'about_us'=>$request->about_club,
                        'club_name' => $request->Cname,
                        'department' => $request->Deps]);
            return redirect(route('login'))->with('responsablePending','Your request has been sent and waiting for administration approval , keep checking your email');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User_request  $user_request
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_request $user_request)
    {
        //
    }

    public function model()
    {
        return view('request.ClubModel');
    }
}
