<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Peminjamanbuku;
use App\Models\Buku;

class PeminjamanbukuController extends Controller
{
    
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjamanbuku = Peminjamanbuku::latest()->get();
        return view('peminjamanbuku.index', compact('peminjamanbuku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::get();

        return view('peminjamanbuku.create', compact('buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'id_peminjaman'=>'required',
        //     'id_pengembalian'=>'required',
        //     'tanggal_peminjaman'=>'required',
        //     'tanggal_pengembalian'=>'required',
        //     'buku_id'=>'required',

            
        // ]);
       $peminjamanbuku = Peminjamanbuku::create([
                'id_peminjaman' => $request->input('id_peminjaman'),
                'id_pengembalian' => $request->input('id_pengembalian'),
                'tanggal_peminjaman' => $request->input('tanggal_peminjaman'),
                'tanggal_pengembalian' => $request->input('tanggal_pengembalian'),
                'buku_id' => $request->input('buku_id'),
    
            ]);
            return redirect('/peminjamanbuku')->with('success','Peminjaman telah disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjamanbuku $peminjamanbuku)
    {

        $buku = Buku::get();
        return view('peminjamanbuku.edit', compact('peminjamanbuku','buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Peminjamanbuku $peminjamanbuku)
    {
        // $request->validate([
        //     'id_peminjaman'=>'required',
        //     'id_pengembalian'=>'required',
        //     'tanggal_peminjaman'=>'required',
        //     'tanggal_pengembalian'=>'required',

        // ]);
            
        $peminjamanbuku = Peminjamanbuku::whereId($peminjamanbuku->id)->update([
            'id_peminjaman' => $request->input('id_peminjaman'),
            'id_pengembalian' => $request->input('id_pengembalian'),
            'tanggal_peminjaman' => $request->input('tanggal_peminjaman'),
            'tanggal_pengembalian' => $request->input('tanggal_pengembalian'),
            'buku_id' => $request->input('buku_id'),

        ]);
        
        return redirect('/peminjamanbuku')->with('success','Peminjaman telah diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjamanbuku $peminjamanbuku)
    {
        {
            $peminjamanbuku = Peminjamanbuku::find($peminjamanbuku->id);
            $peminjamanbuku->delete();

            return redirect('/peminjamanbuku')->with('success','buku telah dihapus!');
        }
    }     
    


}



