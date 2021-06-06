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
        //
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

        DB::table('posts')
              ->where('club_id', $club_id)
              ->update(['post_description' => $request -> post_description]);
        // return dd($request->aboutus);
        return redirect()->route('post_description',$post)->with('Postupdate','Post has been updated Successfully');


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

           
            // ->join('clubs','clubs.id','=','posts.club_id')
            // ->where('clubs.id',$clubId->first()->id)
            // ->get('posts.*');
            

            $post = DB::table('posts')
            ->where('clubs.id',$clubId->first()->id)
              ->update(['post_image' => $filenametoStore]);

        // $request->file('post_image')->store('images');
        // return dd($update);
        return view('responsable.post',['posts' => $post])->with('Postupload','Post Uploaded Successfully');
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
}
