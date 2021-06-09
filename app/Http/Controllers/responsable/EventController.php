<?php

namespace App\Http\Controllers\responsable;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\Cloner\Data;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('responsable');
    }
    public function index()
    {
        // return view('responsable.event_list',['events'=>Event::paginate(10)]);
        $resp_id=Auth::user()->id;
        $clubId = DB::table('clubs')
        ->where('clubs.users_id',$resp_id)
        ->get('id');
        $event = DB::table('events')
        ->join('clubs','clubs.id','=','events.club_id')
        ->where('clubs.id',$clubId->first()->id)
        ->get('events.*');
        return view('responsable.event.event_list',['events' => $event]);
        // return dd($event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responsable.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resp_id=Auth::user()->id;
        $clubId = DB::table('clubs')
        ->where('clubs.users_id',$resp_id)
        ->get('id');
        $validateData=$request->validate([
            'event_date' =>'required',
            'event_image' =>'required',
        ]);
        $fileNameWithExt = $request->file('event_image')->getClientOriginalName();
        //just filename
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //just extension
        $extension = $request ->file('event_image')->getClientOriginalExtension();
        //filename to store
        $filenametoStore = $filename.'_'.time().'.'.$extension;
        //upload
        $path = $request->file('event_image')->storeAs('public/images/events/',$filenametoStore);
        $event=new Event ;
        $event->event_date=$request->event_date;
        $event->event_image=$filenametoStore;
        $event->club_id=$clubId->first()->id;
        $event->save();
        // return dd($clubId->first()->id);
        return view('responsable.event.show', ['event' => $event])->with('storeEvent','Event has been added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        // return dd($id);
        $event = DB::table('events')
        ->where('id',$id)
        ->get();
        // return dd($event->first());
        return view('responsable.event.edit',['event' => $event->first()]) ;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $validateData=$request->validate([
            'event_date' =>'required',
            'event_image' =>'required',
        ]);

        $fileNameWithExt = $request->file('event_image')->getClientOriginalName();
        //just filename
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //just extension
        $extension = $request ->file('event_image')->getClientOriginalExtension();
        //filename to store
        $filenametoStore = $filename.'_'.time().'.'.$extension;
        //upload
        $path = $request->file('event_image')->storeAs('public/images/events/',$filenametoStore);
        $update= DB::table('events')
        ->where('id',$request->id)
        ->update(['event_date' => $request->event_date,
                  'event_image'=>$filenametoStore]);
        return redirect()->route('event_list.index')->with('updateEvent','Event has been updated successfuly');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {

        $eventdel = DB::table('events')
        ->where('id',$id)
        ->delete($id);
        return redirect()->route('event_list.index')->with('deleteEvent','Event has been deleted successfuly');

    }
    public function del($id)
    {
        dd($id);
        $eventdel = DB::table('events')
        ->where('id',$id)
        ->delete();
        return redirect()->route('event_list.index')->with('deleteEvent','Event has been deleted successfuly');

    }



    public function showEvent($id)
    {

        $eventshow = DB::table('events')
        ->where('id',$id)
        ->get();
        $event = $eventshow->first();
        return view('responsable.event.show',['event' => $event]);

    }
}
