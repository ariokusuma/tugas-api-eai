<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_event = Event::paginate(10);
        return response()->json([
            'data' => $data_event
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_event = Event::create([
            'nama_event' => $request->nama_event,
            'lokasi_event' => $request->lokasi_event,
            'stadium_event' => $request->stadium_event,
            'open_gate' => $request->open_gate,
            'kursi_terisi' => $request->kursi_terisi,
            'kursi_kosong' => $request->kursi_kosong,
            // 'tanggal_tiket' => $request->tanggal_tiket,
        ]);
        return response()->json([
            'data' => $data_event,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($event)
    {
        $event = Event::findorfail($event);
        // if ($event)
        return response()->json($event);
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
