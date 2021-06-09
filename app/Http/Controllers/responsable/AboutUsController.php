<?php

namespace App\Http\Controllers\responsable;

use App\Club_info;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('responsable');
    }

    public  function index(){
        $resp_id=Auth::user()->id;
        $club = DB::table('clubs')
        ->where('clubs.users_id',$resp_id)
        ->get('clubs.id');
        $club_id = $club->first()->id;
        $about = Club_info::where('club_id',$club_id)->get();
        // return dd($about);
        return view('responsable.about_us',['club_info' => $about]);
    }

    public function update(Request $request , Club_info $club_info)
    {
        // $club_info->about_us = $request -> aboutus;
        // $club_info->save();

        $resp_id=Auth::user()->id;
        $club = DB::table('clubs')
        ->where('clubs.users_id',$resp_id)
        ->get('clubs.id');
        $club_id = $club->first()->id;

        DB::table('club_infos')
              ->where('club_id', $club_id)
              ->update(['about_us' => $request -> aboutus]);
        // return dd($request->aboutus);
        return redirect()->route('aboutus',$club_info)->with('about_update','About us updated Successfully');



    }
   
    public function create(Request $request)
    {
        $resp_id=Auth::user()->id;
        $clubId = DB::table('clubs')
        ->where('clubs.users_id',$resp_id)
        ->get('id');
        $validateData=$request->validate([
            'about_us' =>'required',
        ]);
       $aboutus=new Club_info() ;
        $aboutus->about_us=$request->aboutus;
        $aboutus->club_id=$clubId->first()->id;
        $aboutus->save();
        // return dd($clubId->first()->id);
        return view('responsable.about_us', ['aboutus' => $aboutus])->with('storeAboutus','about has been added successfuly');
    }
}
