<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User_request;
use App\User;
use App\Club;
use App\Mail\AcceptedRequest;
use Illuminate\Http\Request;
use Illuminate\Http\uploadedfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PendingRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.request',['user_requests'=>User_request::paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user= User::create([

            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>$request['password'],
            'image'=>$request['image'],
            'type'=>$request['type']
        ]);
        if($user)
        {
          $club = Club::create([
            'club_name' => $request['club_name'],
            'club_logo'=>$request['club_logo'],
            //'about_us'=>$request['about_us'],
            // 'club_theme  '=>$request['club_theme'],
            'departments_id'=>$request['departments_id'],
            'users_id'=>$user->id
             ]);

        }
        return redirect()->route('PendingRequest.index');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function clubs(User_request $id){
        $user=User_request::find($id);
        echo $id;
        dd($id);
        return view('admin.userlist.request',$user);


    }
    // public function store(Request $request)
    // {
    //    dd($request);
    //     $user= User::create([

    //         'name'=>$request['name'],
    //         'email'=>$request['email'],
    //         'password'=>$request['password'],
    //         'image'=>$request['image'],
    //         'type'=>$request['type']
    //     ]);
    //     if($user)
    //     {
    //       $club = Club::create([
    //         'club_name' => $request['club_name'],
    //         'club_logo'=>$request['club_logo'],
    //         //'about_us'=>$request['about_us'],
    //         // 'club_theme  '=>$request['club_theme'],
    //         'departments_id'=>$request['departments_id'],
    //         'users_id'=>$user->id
    //          ]);

    //     }
    //     return redirect()->route('PendingRequest.index');
    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $clubUser = new User;
        $user=User_request::find($id);
            $club = new Club;
            $club->club_name=$user->club_name ;
            $club->club_img=$user->club_logo ;
            $club->club_theme ="test";
            $club->departments_id=1;

            $club->users_id=$user->id;
            $clubUser->id=$user->id;
            $clubUser->name=$user->name;
            $clubUser->email=$user->email;
            $clubUser->password=$user->password;
            $clubUser->image=$user->image;
             $clubUser->type="responsable";

            DB::update('update user_requests set type=? where id=?',['accepted',$user->id]);
             $clubUser->save();
             $club->save();
             $user->type="accepted";

             Mail::to($clubUser->email)->send(new AcceptedRequest($clubUser));
             return redirect()->back();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_request=User_request::find($id);
        if ($user_request != null) {
        $user_request->delete();
        return redirect()->route('PendingRequest.index')->with('deletUser','user has been deleted successfuly');
    }}
}
