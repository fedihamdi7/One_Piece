<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResponsableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('responsable');
    }
   public function responsable(){
     return view('responsable.dashboard');
    }
    public function event(){
        return view('responsable.event');
       }
       public  function change_lo(){
        return view('responsable.change_lo');
    }
    public function teams(){
        $team = DB::table('teams')->get();
 return view('responsable.teams',['teams' => $team]);
    }
    public  function themes(){
        return view('responsable.theme');
    }
    public function posts(){
        return view('responsable.posts');
    }
    public function about(){
        return view('responsable.about');
    }
    public function event_list(){
        $resp_id=Auth::user()->id;
        $clubId = DB::table('clubs')
        ->where('clubs.users_id',$resp_id)
        ->get('id');
        $event = DB::table('events')
        ->join('clubs','clubs.id','=','events.club_id')
        ->where('clubs.id',$clubId->first()->id)
        ->get();
 return view('responsable.event_list',['events' => $event]);
    }
}
