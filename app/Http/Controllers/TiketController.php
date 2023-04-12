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
            'id_tiket' => $request->id_tiket,
            'name' => $request->name,
            'email' => $request->email,
            'lokasi' => $request->lokasi,
            'stadium' => $request->stadium,
            'nama_event' => $request->nama_event,
            'tanggal_tiket' => $request->tanggal_tiket,
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
    public function update(Request $request, $id_tikets)
    {
        $id_tikets = Tiket::findorfail($id_tikets);

        $validateData = $request->validate([
            'id_tiket' => 'required',
            'name' => 'required',
            'email' => 'required',
            'lokasi' => 'required',
            'stadium' => 'required',
            'nama_event' => 'required',
            'tanggal_tiket' => 'required',
        ]);

        $id_tikets->id_tiket = $validateData['id_tiket'];
        $id_tikets->name = $validateData['name'];
        $id_tikets->email = $validateData['email'];
        $id_tikets->lokasi = $validateData['lokasi'];
        $id_tikets->stadium = $validateData['stadium'];
        $id_tikets->nama_event = $validateData['nama_event'];
        $id_tikets->tanggal_tiket = $validateData['tanggal_tiket'];

        $id_tikets->save();

        return response()->json([
            'data' => $id_tikets
        ]);
    }



    public function cariLokasi($lokasi)
    {
        $cari = Tiket::where('lokasi', $lokasi)->get();
        return response()->json($cari);
    }
    // Cari berdasarkan STadium
    public function cariStadium($lokasi)
    {
        $cari = Tiket::where('stadium', $lokasi)->get();
        return response()->json($cari);
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tiket $data_tiket)
    {
        //
    }
}
