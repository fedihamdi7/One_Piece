<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Controllers\admin\User;
use App\User;
class UserListController extends Controller
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
        return redirect()->route('userlist.show',$user)->with('storeUser',"user has been added successfuly");

        
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
        $validatedata=$request->validate($this->validationrules());
        $user=User::find($id);   
        $user->update($validatedata);
        return redirect()->route('userlist.show',$user)->with('updateUser',"user has been updated successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id); 
        $user->delete();
        return redirect()->route('userlist.index')->with('deletUser','user has been deleted successfuly');
    }
   
    private function validationrules(){
  return [
    'name'=>'required',
    'email'=>'required',
    'password'=>'required',];

    }



}
