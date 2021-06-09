<?php

namespace App\Http\Controllers;
use App\Club;
use App\Event;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        return view('home');
        return view('welcome');
    }
    public function welcome()
    {

        $clubs = DB::table('clubs')
        ->join('club_infos','clubs.id','=','club_infos.club_id')
        ->get();
        $events = DB::table('clubs')
        ->join('departments','clubs.departments_id','=','departments.id')
        ->join('events','clubs.id','=','events.club_id')
        ->limit(6)
        ->orderBy('event_date','desc')
        ->get();

        $CountEvents = $events->count() ;
        $CountClubs = $clubs ->count();
        $CountUsers = DB::table('users')->get()->count();

        $user_type = Auth::user()->type;
        return view('welcome',[
        'clubs'=>$clubs,
        'events'=>$events,
        'type'=>$user_type,
        'CountClubs'=>$CountClubs,
        'CountEvents'=>$CountEvents,
        'CountUsers'=>$CountUsers
        ]);

        // return dd($user_type);
    }
}


