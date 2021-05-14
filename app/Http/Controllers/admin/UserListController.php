<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Controllers\admin\User;
use App\User;
class UserListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.UserList',['users'=>User::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.userlist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata=$request->validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'required',
        ]);
        //   $user=new User;
        //   $user->name=$request->name;
        //   $user->email=$request->email;

        $user=User::create($validatedata);
        return redirect()->route('userlist.show',$user);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(User $user)
    public function show($id)
    {
         $user=User::find($id);
         return view('admin.userlist.show',['user'=>$user]);

        //  return view('admin.show',['user'=>$user]);
        //  return dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('admin.userlist.edit',['user'=>$user]);

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
        $validatedata=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            ]);
        $user=User::find($id);   
        $user->update($validatedata);
        return redirect()->route('userlist.show',$user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
