<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Controllers\admin\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        
       
        $fileNameWithExt = $request->file('image')->getClientOriginalName();
        //just filename
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //just extension
        $extension = $request ->file('image')->getClientOriginalExtension();
        //filename to store
        $filenametoStore = $filename.'_'.time().'.'.$extension;
        //upload
        $path = $request->file('image')->storeAs('public/images/user_avatar/',$filenametoStore);
        $validatedata=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'image'=>'required',
            ]);
          $user=new User;
          $user->name=$request->name;
          $user->email=$request->email;
          $user->password= Hash::make($request['password']);
        //   $user->image=$request->image;
           
        $user->image=$filenametoStore;
      
        $user->save();

        // $user=User::create($validatedata);
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
        
        $fileNameWithExt = $request->file('image')->getClientOriginalName();
        //just filename
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //just extension
        $extension = $request ->file('image')->getClientOriginalExtension();
        //filename to store
        $filenametoStore = $filename.'_'.time().'.'.$extension;
        //upload
        $path = $request->file('image')->storeAs('public/images/user_avatar/',$filenametoStore);
        $validatedata=$request->validate($this->validationrules());
        // $fileNameWithExt = $request->file('image')->getClientOriginalName();
        // //just filename
        // $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // //just extension
        // $extension = $request ->file('image')->getClientOriginalExtension();
        // //filename to store
        // $filenametoStore = $filename.'_'.time().'.'.$extension;
        // //upload
        // $path = $request->file('image')->storeAs('storage/images/user_image/',$filenametoStore);
      
        $user=User::find($id);   
        $user->update($validatedata);
        DB::table('users')

        ->where('id',$request->id)

        ->update(['image' => $filenametoStore]);
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
    'password'=>'required',
    'image'=>'required',];

    }



}
