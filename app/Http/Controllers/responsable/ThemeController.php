<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ThemeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('responsable');
    }

    public function update(Request $request)
    {
    //    return dd($request);

       $resp_id=Auth::user()->id;
        $club = DB::table('clubs')
        ->where('clubs.users_id',$resp_id)
        ->get();

               $update= DB::table('clubs')
              ->where('users_id',$resp_id)
              ->update(['club_theme' => $request->color]);

              return redirect(route('ClubTheme'))->with('themeUpdate','Theme updated Successfully');
            }
}
