<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pemasaran;
use Validator;

class PemasaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pemasaran::all();
        $no = 1;
        // return view('Admin.index_lokasi', compact('data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('Admin.create_lokasi');
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
            'sales'     =>    'required',
            'lokasi'    =>    'required',
            'waktu'     =>    'required',
            // parameter unique harus = nama_table,property
        ], [
            'sales.required'         =>     'nama sales tidak boleh kosong',
            'wilayah.required'       =>     'wilayah tidak boleh kosong',
            'waktu.required'         =>     'waktu pemasaran tidak boleh kosong',
        ])->validate();

        Pemasaran::create([
            'id_sales'          =>   $request->sales,
            'id_lokasi'         =>   $request->lokasi,
            'waktu_pemasaran'   =>   $request->waktu,
        ]);

        return redirect()->route('datapemasaran');
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
        $edit = Pemasaran::find($id);
        // return view('', compact('edit'));
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
            'sales'     =>    'required',
            'lokasi'    =>    'required',
            'waktu'     =>    'required',
            // parameter unique harus = nama_table,property
        ], [
            'sales.required'         =>     'nama sales tidak boleh kosong',
            'wilayah.required'       =>     'wilayah tidak boleh kosong',
            'waktu.required'         =>     'waktu pemasaran tidak boleh kosong',
        ])->validate();

        Pemasaran::find($id)->update([
            'id_sales'          =>   $request->sales,
            'id_lokasi'         =>   $request->lokasi,
            'waktu_pemasaran'   =>   $request->waktu,
        ]);

        return redirect()->route('datapemasaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Pemasaran::destroy($request->delete);
        return redirect()->route('datapemasaran');
    }
}
