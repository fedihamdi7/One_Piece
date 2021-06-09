<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('responsable');
    }

    public function stats()
    {
        $resp_id=Auth::user()->id;
        $clubId = DB::table('clubs')
        ->where('clubs.users_id',$resp_id)
        ->get('id');
        $Cid = $clubId->first()->id;

        $events = DB::table('events')
        ->where('club_id',$Cid)
        ->get()->count();

        $teams = DB::table('teams')
        ->where('club_id',$Cid)
        ->get()->count();

        return view('responsable.dashboard',['statEvents'=>$events,'statTeams'=>$teams]);
    }
}
