<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lokasi;
use Validator;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lokasi::all();
        return view('Admin.index' ,$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'lokasi'            =>    'required|max:30',
            'wilayah'           =>    'required',
            'waktu'            =>     'required',
            // parameter unique harus = nama_table,property
        ], [
            'lokasi.required'             =>        'lokasi tidak boleh kosong',
            'lokasi.max'                  =>        'lokasi tidak boleh lebih dari 30 karakter',
            'wilayah.required'             =>        'wilayah tidak boleh kosong',
            'waktu.required'             =>        'waktu pemasaran tidak boleh kosong',
        ])->validate();

        Lokasi::create([
            'nama_lokasi'       =>   $request->lokasi,
            'wilayah'           =>   $request->wilayah,
            'waktu_pemesanan'   =>   $request->waktu,
        ]);

        return redirect()->back();
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
        $edit = Lokasi::find($id);
        return $edit;
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
            'lokasi'            =>    'required|max:30',
            'wilayah'           =>    'required',
            'waktu'            =>     'required',
            // parameter unique harus = nama_table,property
        ], [
            'lokasi.required'             =>        'lokasi tidak boleh kosong',
            'lokasi.max'                  =>        'lokasi tidak boleh lebih dari 30 karakter',
            'wilayah.required'             =>        'wilayah tidak boleh kosong',
            'waktu.required'             =>        'waktu pemasaran tidak boleh kosong',
        ])->validate();

        Lokasi::find($id)->update([
            'nama_lokasi'       =>   $request->lokasi,
            'wilayah'           =>   $request->wilayah,
            'waktu_pemesanan'   =>   $request->waktu,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lokasi::destroy($id);
        return redirect()->back();
    }
}
