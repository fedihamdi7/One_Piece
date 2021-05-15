<?php

namespace App\Http\Controllers\responsable;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $event=new Event ;
        $event->event_date=$request->event_date;
        $event->event_image=$request->event_image;
        $event->club_id=$clubId->first()->id;
        $event->save();
        // return dd($clubId->first()->id);
        return view('event_list.show', ['event' => $event]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        // $events = DB::table('events')
        // ->join('clubs','clubs.id','=','events.club_id')
        // ->where('id',$event->id)
        // ->get();

        return view('responsable.event.show',['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
