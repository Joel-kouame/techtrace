<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\TypeCulture;
use App\Models\Champ;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('admin/Event/index' , compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('admin/Event/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            "type_event_id" => "required",
            "date_event" => "required",
            "lieux" => "required",
            "user_id" => "required",
            "temperature" => "required",
            "humidite" => "required",

        ] );
        $data["slug"] = Str::slug($data['libelle']);
        // dd($data);
        Event::create($data);
        return redirect()->back()->with('success', 'Evenement Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
