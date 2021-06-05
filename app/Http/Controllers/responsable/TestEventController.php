<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestEventController extends Controller
{
    public function update(Request $request){
        return dd($request->file('event_date'));

        //file name with the extension
        $fileNameWithExt = $request->file('event_date')->getClientOriginalName();
        //just filename
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //just extension
        $extension = $request ->file('event_date')->getClientOriginalExtension();
        //filename to store
        $filenametoStore = $filename.'_'.time().'.'.$extension;
        //upload
        $path = $request->file('event_date')->storeAs('public/images/club_logo/',$filenametoStore);
        // Save into database
        return dd($request->file('event_date'));
    }

}
