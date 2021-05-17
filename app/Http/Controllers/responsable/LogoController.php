<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LogoController extends Controller
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
        ->get();
        return view('responsable.change_logo',['club' => $club]);
    }

    public  function update(Request $request){

        $this -> validate($request,[
            'logoimage' => 'image|max:1999|required'
        ]);

        // if ($request->hasFile('logoimage')){
            //file name with the extension
            $fileNameWithExt = $request->file('logoimage')->getClientOriginalName();
            //just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //just extension
            $extension = $request ->file('logoimage')->getClientOriginalExtension();
            //filename to store
            $filenametoStore = $filename.'_'.time().'.'.$extension;
            //upload
            $path = $request->file('logoimage')->storeAs('public/images/club_logo/',$filenametoStore);
            // Save into database
            $resp_id=Auth::user()->id;
            $club = DB::table('clubs')
            ->where('clubs.users_id',$resp_id)
            ->get();

               $update= DB::table('clubs')
              ->where('users_id',$resp_id)
              ->update(['club_img' => $filenametoStore]);

        // $request->file('logoimage')->store('images');
        // return dd($update);
        return view('responsable.change_logo',['club' => $club])->with('logoupload','Logo Uploaded Successfully');
    }

}
