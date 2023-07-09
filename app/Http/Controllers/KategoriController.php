<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\KategoriProduk;
use Illuminate\Support\facades\DB;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_produk = DB::table('kategori_produk')
            ->select('kategori_produk.*', 'kategori_produk.nama as nama_kategori')
            ->get(); //perintah join diatas untuk menggabungkan tabel kategori_produk dan kategori_produk
        return view('admin.kategori.index', compact('kategori_produk'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
