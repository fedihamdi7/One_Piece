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
        // return view('responsable.Team.create');
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
        // $validatedData = $request->validate([
        //     'team_name' => 'required',
        //     'team_titre' => 'required',
            
        //     'team_fb' => 'required',
        //     'team_insta' => 'required',
        //     'team_twitter' => 'required',
        //     'team_linkdlin' => 'required',
        // ]);
        // $team = Team::create($validatedData);
        // return redirect()->route('teams.show', $team);

        // dd($request);
        // var_dump($request);
        // die();
        // $resp_id=Auth::user()->id;
        // $clubId = DB::table('clubs')
        // ->where('clubs.users_id',$resp_id)
        // ->get('id');
        $validateData=$request->validate([
            'team_name' => 'required',
            'team_titre' => 'required',
            // 'team_img' => 'required',
            // 'team_fb' => 'required',
            // 'team_insta' => 'required',
            // 'team_linkedin' => 'required',
            // 'team_twitter' => 'required',
        ]);
        // $team=new team ;
        // $team->team_name=$request->team_name;
        // $team->team_titre=$request->team_titre;
        // $team->team_image=$request->team_image;
        // $team->team_fb=$request->team_fb;
        // $team->team_insta=$request->team_insta;
        // $team->team_linkedin=$request->team_linkedin;
        // $team->team_twitter=$request->team_twitter;
        // $team->club_id=$clubId->first()->id;
        // $team->save();
        // return dd($clubId->first()->id);
        $team = Team::create($validateData);
        return redirect()->route('teams.show', $team);
        // return view('teams.show', ['team' => $team]);

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
        return view('responsable.Team.edit', ['team' => $team]);

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
        $validateData=$request->validate([
            'team_name' => 'required',
            'team_titre' => 'required',
        ]);
        $team->update($validateData);
        return redirect()->route('teams.show', $team);


        
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
