<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Buku::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $buku=  Buku::create($request->all());
        return response()->json($buku,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $buku=Buku::find($id);
        return response()->json($buku ,201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $buku = Buku::find($id);
         $buku->update($request->all());
        return response()->json($buku,201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( String $id)
    {
        $buku = Buku::find($id);
        $buku->delete();
    }
}
