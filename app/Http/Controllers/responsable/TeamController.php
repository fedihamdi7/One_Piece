<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('responsable.Team.teams',['teams'=>teams::paginate(10)]);
$resp_id=Auth::user()->id;
$clubId = DB::table('clubs')
->where('clubs.users_id',$resp_id)
->get('id');
$team = DB::table('teams')
->join('clubs','clubs.id','=','teams.club_id')
->where('clubs.id',$clubId->first()->id)
->get('teams.*');
return view('responsable.Team.teams',['teams' => $team]);
// return view('responsable.Team.teams',['teams'=>team::paginate(6)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responsable.Team.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'team_name' => 'required',
            'team_titre' => 'required',
            'team_img' => 'required',
            'team_fb' => 'required',
            'team_insta' => 'required',
            'team_twitter' => 'required',
            'team_linkdlin' => 'required',
        ]);
        $team = Team::create($validatedData);
        return redirect()->route('teams.show', $team);

        // dd($request);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        // $team=teams::$find('id');
        // return view('responsable.Team.show',['teams' => $team]);
        return view('responsable.Team.show', ['team' => $team]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
