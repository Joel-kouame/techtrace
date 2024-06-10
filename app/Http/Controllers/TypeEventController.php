<?php

namespace App\Http\Controllers;

use App\Models\TypeEvent;
use Illuminate\Http\Request;
use Str;

class TypeEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = TypeEvent::all();
        // dd($types);
        return view('admin/Culture/event', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            "libelle" => "required",
        ] );
        $data["slug"] = Str::slug($data['libelle']);
        TypeEvent::create($data);
        return redirect()->back()->with('success', 'Rôle Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeEvent $typeEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeEvent $typeEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypeEvent $typeEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeEvent $typeEvent)
    {
        //
    }
}
