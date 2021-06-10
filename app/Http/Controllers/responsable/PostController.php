<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resp_id=Auth::user()->id;
        $clubId = DB::table('clubs')
        ->where('clubs.users_id',$resp_id)
        ->get('id');
        $post = DB::table('posts')
        ->join('clubs','clubs.id','=','posts.club_id')
        ->where('clubs.id',$clubId->first()->id)
        ->get('posts.*');
        return view('responsable.post',['posts' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $resp_id=Auth::user()->id;
        $clubId = DB::table('clubs')
        ->where('clubs.users_id',$resp_id)
        ->get('id');

        $fileNameWithExt = $request->file('post_image')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request ->file('post_image')->getClientOriginalExtension();
        $filenametoStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('post_image')->storeAs('public/images/club_post/',$filenametoStore);
        $validateData=$request->validate($this->validationrules());
        // $post= Post::create([
        //     'post_description' => $request['post_description'],
        //     'post_image' => $request['post_image'],
        //     'club_id' => $clubId->first()->id,
          
        // ]);
    //   $post = DB::table('posts')
    //   ->join('clubs','clubs.id','=','posts.club_id')
    //   ->where('clubs.id',$clubId->first()->id)
    //   ->get('posts.*');
        $post=new post ;
        $post->post_description=$request->post_description;
        $post->post_image=$filenametoStore;
        $post->club_id=$clubId->first()->id;
        // dd($post)
        $post->save();
        return view('responsable.post',['posts' => $post])->with('StorePost','Post has been added successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {

        $resp_id=Auth::user()->id;
        $club = DB::table('clubs')
        ->where('clubs.users_id',$resp_id)
        ->get('clubs.id');
        $club_id = $club->first()->id;

        $this -> validate($request,[
            'post_image' => 'image|max:1999|required'
        ]);
        // if ($request->hasFile('post_image')){
            //file name with the extension
            $fileNameWithExt = $request->file('post_image')->getClientOriginalName();
            //just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //just extension
            $extension = $request ->file('post_image')->getClientOriginalExtension();
            //filename to store
            $filenametoStore = $filename.'_'.time().'.'.$extension;
            //upload
            $path = $request->file('post_image')->storeAs('public/images/club_post/',$filenametoStore);
            // Save into database
            $resp_id=Auth::user()->id;
            $clubId = DB::table('clubs')
            ->where('clubs.users_id',$resp_id)
            ->get();

             DB::table('posts') 
            ->join('clubs','clubs.id','=','posts.club_id')
            ->where('clubs.id',$clubId->first()->id)
          ->update(['post_image' => $filenametoStore,'post_description'=>$request->posts]);
          $post = DB::table('posts')
          ->join('clubs','clubs.id','=','posts.club_id')
          ->where('clubs.id',$clubId->first()->id)
          ->get('posts.*');
        return view('responsable.post',['posts' => $post])->with('Postupload','Post has been Uploaded Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
    private function validationrules(){
        return [
           'post_description' => 'required',
           'post_image' => 'required',
           
          
           ];
       }
}

