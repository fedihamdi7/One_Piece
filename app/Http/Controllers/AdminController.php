<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
     //   $this->middleware('admin');
    }
    public function admin()
    {

        return view('admin.dashboardadmin');
    }
    public function userlist()
    {
        $users = DB::table('users')->get();
        // $users =User::get('name');
        return view('admin.userlist', ['users' => $users]);
    }
    public function add_user()
    {
        return view('admin.add_user');
    }
    public function request()
    {

        $user_requests = DB::table('user_requests')->get();
        // $users =User::get('name');

        return view('admin.request', ['user_requests' => $user_requests]);
    }

    public function clubs()
    {

        $clubs = DB::table('clubs')->get();
        // $users =User::get('name');

        return view('admin.AllClubs', ['clubs' => $clubs]);
    }
    public function department()
    {

    }
}
