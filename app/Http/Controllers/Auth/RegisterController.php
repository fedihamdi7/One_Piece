<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\User_request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/';
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function register(Request $request)
    {
        $imageName = time() . $request['UserImage']->getClientOriginalName();
        $request['UserImage']->move(base_path() . '/public/storage/images/user_avatar/', $imageName);


        if ($request['Role'] == 'Responsable') {
            $user= User_request::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'image' => $imageName,
                'type' => 'pending'
            ]);

            return view('request.form',['user'=>$user]);
            // return redirect(route('requestform.index',['id'=>$user]));

            // return redirect()->route('requestform.index',['user'=>$user]);
            // return view('logout')->with('RegisterSucc','A Request has been send to administration , Check you E-mail');
        }

        if ($request['Role'] == 'Membre') {
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'image' => $imageName,
                'type' => 'membre'
            ]);
            return redirect(route('login'))->with('membreCreate','Account Created Successfully , You can Login');
        }

    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {

    //     $imageName = time() . $data['UserImage']->getClientOriginalName();
    //     $data['UserImage']->move(base_path() . '/public/storage/images/user_avatar/', $imageName);


    //     if ($data['Role'] == 'Responsable') {
    //         $user= User_request::create([
    //             'name' => $data['name'],
    //             'email' => $data['email'],
    //             'password' => Hash::make($data['password']),
    //             'image' => $imageName,
    //             'type' => 'pending'
    //         ]);
    //         return redirect(route('requestform.index'));
    //         // return redirect()->route('requestform.index',['user'=>$user]);
    //         // return view('logout')->with('RegisterSucc','A Request has been send to administration , Check you E-mail');
    //     }

    //     if ($data['Role'] == 'Membre') {
    //         return User::create([
    //             'name' => $data['name'],
    //             'email' => $data['email'],
    //             'password' => Hash::make($data['password']),
    //             'image' => $imageName,
    //             'type' => 'membre'
    //         ]);
    //     }

    // }
}
