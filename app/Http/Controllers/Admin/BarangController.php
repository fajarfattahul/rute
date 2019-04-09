<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang;
use Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barang::all();
        $no = 1;
        return view('Admin.index_barang', compact('data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create_barang');                
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nama'         =>    'required|max:30',
            'jenis'        =>    'required|max:30',
            'harga'        =>    'required',
            'stock'        =>    'required',
            'pembuatan'    =>    'required',
            // parameter unique harus = nama_table,property
        ], [
            'nama.required'         =>   'input nama barang tidak boleh kosong',
            'nama.max'              =>   'nama barang tidak boleh lebih dari 30 karakter',
            'jenis.required'        =>   'input jenis barang tidak boleh kosong',
            'jenis.max'             =>   'jenis barang tidak boleh lebih dari 30 karakter',
            'harga.required'        =>   'input harga unit tidak boleh kosong',
            'stock.required'        =>   'input stock tidak boleh kosong',
            'pembuatan.required'    =>   'input pembuatan tidak boleh kosong',
        ])->validate();

        Barang::create([
            'nama_barang'       =>   $request->nama,
            'jenis_barang'      =>   $request->jenis,
            'harga'             =>   $request->harga,
            'stock'             =>   $request->stock,
            'pembuatan'         =>   $request->pembuatan,
        ]);

        return redirect()->route('databarang');        
        // return redirect()->back();
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
    public function edit($id)
    {
        $edit = Barang::find($id);
        return view('Admin.edit_barang', compact('edit'));                                
        // return $edit;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [
            'nama'         =>    'required|max:30',
            'jenis'        =>    'required|max:30',
            'harga'        =>    'required',
            'stock'        =>    'required',
            'pembuatan'    =>    'required',
            // parameter unique harus = nama_table,property
        ], [
            'nama.required'         =>   'input nama barang tidak boleh kosong',
            'nama.max'              =>   'nama barang tidak boleh lebih dari 30 karakter',
            'jenis.required'        =>   'input jenis barang tidak boleh kosong',
            'jenis.max'             =>   'jenis barang tidak boleh lebih dari 30 karakter',
            'harga.required'        =>   'input harga unit tidak boleh kosong',
            'stock.required'        =>   'input stock tidak boleh kosong',
            'pembuatan.required'    =>   'input pembuatan tidak boleh kosong',
        ])->validate();

        Barang::find($id)->update([
            'nama_barang'       =>   $request->nama,
            'jenis_barang'      =>   $request->jenis,
            'harga'             =>   $request->harga,
            'stock'             =>   $request->stock,
            'pembuatan'         =>   $request->pembuatan,
        ]);

        return redirect()->route('databarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Barang::destroy($request->delete);
        return redirect()->route('databarang');        
        // return redirect()->back();
    }
}
