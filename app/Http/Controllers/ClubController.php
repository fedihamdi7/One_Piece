<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function one_club($id)
    {

        $user_type = Auth::user()->type;


        $infos = DB::table('clubs')
        ->join('club_infos', 'clubs.id', '=', 'club_infos.club_id')
        ->join('departments', 'clubs.departments_id', '=', 'departments.id')
        ->join('posts', 'clubs.id', '=', 'posts.club_id')
        ->join('events', 'clubs.id', '=', 'events.club_id')
        ->join('teams', 'clubs.id', '=', 'teams.club_id')
        ->where('clubs.id',$id)
        ->get();

        $events = DB::table('clubs')
        ->join('events', 'clubs.id', '=', 'events.club_id')
        ->where('clubs.id',$id)
        ->get();

        $teams = DB::table('clubs')
        ->join('teams', 'clubs.id', '=', 'teams.club_id')
        ->where('clubs.id',$id)
        ->get();
        return view('club',['infos' => $infos , 'teams' => $teams , 'events' => $events , 'type'=>$user_type]);
        // return dd($infos);
        // return $infos->first()->club_name;
    }
    public function clubs()
    {
        $clubs = DB::table('clubs')
            ->join('club_infos', 'clubs.id', '=', 'club_infos.club_id')
            ->get();
        return view('clubs', ['clubs' => $clubs]);

    }
}
