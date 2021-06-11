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
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('responsable');
    }
    public function index(Request $request)
    {  
        /****search methode 1 */
        // $teams = team::query();
        // if (request('term')) {
        //     $teams->where('team_name', 'Like', '%' . request('term') . '%');
        // }

        // return $teams->orderBy('id', 'DESC')->paginate(10);
// dd($request);
$resp_id=Auth::user()->id;
$clubId = DB::table('clubs')
->where('clubs.users_id',$resp_id)
->get('id');
$team = DB::table('teams')
->join('clubs','clubs.id','=','teams.club_id')
->where('clubs.id',$clubId->first()->id)
->get('teams.*');
/****search methode 2*/
// $teams= team::where([
//     ['team_name', '!=', Null],
//     [function ($query) use ($request) {
//     if (($term = $request->term)) {
//     $query->orWhere('team_name', 'Like', '%' . request('term') . '%')->get();
//     }
// }]
//     ])
//     ->orderBy("id", "desc")
//     ->paginate(10);
    
// return view('responsable.Team.teams',['teams' => $team],compact('teams'))
// ->with('i', (request()->input('page', 1) - 1) * 5);


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
        $resp_id=Auth::user()->id;
        $clubId = DB::table('clubs')
        ->where('clubs.users_id',$resp_id)
        ->get('id');

        $fileNameWithExt = $request->file('team_img')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request ->file('team_img')->getClientOriginalExtension();
        $filenametoStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('team_img')->storeAs('public/images/club_team_image/',$filenametoStore);
        $validateData=$request->validate($this->validationrules());
        $team=new team ;
        $team->team_name=$request->team_name;
        $team->team_titre=$request->team_titre;
        $team->team_img=$filenametoStore;
        $team->team_fb=$request->team_fb;
        $team->team_insta=$request->team_insta;
        $team->team_linkedin=$request->team_linkedin;
        $team->team_twitter=$request->team_twitter;
        $team->club_id=$clubId->first()->id;
        $team->save();
        return view('responsable.Team.show', ['team' => $team])->with('storeTeam','member has been added successfuly');

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
        $fileNameWithExt = $request->file('team_img')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request ->file('team_img')->getClientOriginalExtension();
        $filenametoStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('team_img')->storeAs('public/images/club_team_image/',$filenametoStore);
   
        $validateData=$request->validate($this->validationrules());
        // dd($filenametoStore);
        // $team->team_img=$filenametoStore;
        $team->team_fb=$request->team_fb;
        $team->team_insta=$request->team_insta;
        $team->team_linkedin=$request->team_linkedin;
        $team->team_twitter=$request->team_twitter;
        $team->update($validateData);
        DB::table('teams')
        ->where('id',$request->id)
        ->update(['team_img' => $filenametoStore]);
        return redirect()->route('teams.show', $team)->with('updateTeam','member has been updated successfuly');
    

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index')->with('deletTeam','member has been deleted successfuly');
    }
    private function validationrules(){
     return [
        'team_name' => 'required',
        'team_titre' => 'required',
        'team_img' => 'required',
       
        ];
    }
        /****search with ajax */
        // function action(Request $request)
        // {
        //  if($request->ajax())
        //  {
        //   $output = '';
        //   $query = $request->get('query');
        //   if($query != '')
        //   {
        //    $team = DB::table('teams')
        //      ->where('team_name', 'like', '%'.$query.'%')
        //      ->orWhere('team_titre', 'like', '%'.$query.'%')
        //      ->orWhere('City', 'like', '%'.$query.'%')
        //      ->orWhere('PostalCode', 'like', '%'.$query.'%')
        //      ->orWhere('Country', 'like', '%'.$query.'%')
        //      ->orderBy('id', 'desc')
        //      ->get();
             
        //   }
        //   else
        //   {
        //    $team = DB::table('teams')
        //      ->orderBy('id', 'desc')
        //      ->get();
        //   }
        //   $total_row = $team->count();
        //   if($total_row > 0)
        //   {
        //    foreach($team as $row)
        //    {
        //     $output .= '
        //     <tr>
        //      <th>'.$row->team_name.'</th>
        //      <th>'.$row->team_titre.'</th>
        //      <th>'.$row->team_img.'</th>
        //      <th>'.$row->team_fb.'</th>
        //      <th>'.$row->team_insta.'</th>
        //      <th>'.$row->team_twitter.'</th>
        //      <th>'.$row->team_linkedin.'</th>
        //     </tr>
        //     ';
        //    }
        //   }
        //   else
        //   {
        //    $output = '
        //    <tr>
        //     <th align="center" colspan="5">No Data Found</th>
        //    </tr>
        //    ';
        //   }
        //   $team = array(
        //    'table_data'  => $output,
        //    'total_data'  => $total_row
        //   );
    
        //   echo json_encode($team);
        //  }
        // }
}
