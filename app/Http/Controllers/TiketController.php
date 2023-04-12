<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_tiket = Tiket::paginate(10);
        return response()->json([
            'data' => $data_tiket
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_tiket = Tiket::create([
            'name' => $request->name,
            'id_tiket' => $request->id_tiket,
            'tanggal_tiket' => $request->tanggal_tiket,
            'email' => $request->email,
        ]);
        return response()->json([
            'data' => $data_tiket,
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show($id_tikets)
    {
        $id_tikets = Tiket::findorfail($id_tikets);
        return response()->json($id_tikets);
                // return response()->json([
                //     'data' => $tikets
                // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Tiket $data_tiket)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Tiket $data_tiket)
    // {
    //     $data_tiket->name = $request->name;
    //     $data_tiket->id_tiket = $request->id_tiket;
    //     $data_tiket->tanggal_tiket = $request->tanggal_tiket;
    //     $data_tiket->email = $request->email;
    //     $data_tiket->save();

    //     return response()->json([
    //         'data' => $data_tiket
    //     ]);
    // }

    public function update(Request $request, $id_tikets)
    {
        $id_tikets = Tiket::findorfail($id_tikets);

        $validateData = $request->validate([
            'name' => 'required',
            'id_tiket' => 'required',
            'tanggal_tiket' => 'required',
            'email' => 'required',
        ]);

        $id_tikets->name = $validateData['name'];
        $id_tikets->id_tiket = $validateData['id_tiket'];
        $id_tikets->tanggal_tiket = $validateData['tanggal_tiket'];
        $id_tikets->email = $validateData['email'];

        $id_tikets->save();

        return response()->json([
            'data' => $id_tikets
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tiket $data_tiket)
    {
        //
    }
}
