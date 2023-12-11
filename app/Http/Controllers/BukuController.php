<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Buku;

class BukuController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::latest()->get();
        return view('buku.index', compact('buku'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        return view('buku.create');
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
        //     'buku'=>'required',
        //     'nama_buku'=>'required',
        //     'tahun_buku'=>'required',
        //     'kategori_buku'=>'required',
            
        // ]);
       $buku = Buku::create([
                'buku' => $request->input('buku'),
                'nama_buku' => $request->input('nama_buku'),
                'tahun_buku' => $request->input('tahun_buku'),
                'kategori_buku' => $request->input('kategori_buku'),
    
            ]);
            return redirect('/buku')->with('success','buku telah disimpan!');
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
    public function edit(Buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Buku $buku)
    {
        // $request->validate([
        //     'buku'=>'required',
        //     'nama_buku'=>'required',
        //     'tahun_buku'=>'required',
        //     'kategori_buku'=>'required',
        // ]);
            
        $buku = Buku::whereId($buku->id)->update([
            'buku' => $request->input('buku'),
            'nama_buku' => $request->input('nama_buku'),
            'tahun_buku' => $request->input('tahun_buku'),
            'kategori_buku' => $request->input('kategori_buku'),
        ]);
        
        return redirect('/buku')->with('success','buku telah diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        {
            $buku = Buku::find($buku->id);
            $buku->delete();

            return redirect('/buku')->with('success','buku telah dihapus!');
        }
    }     
    


}



