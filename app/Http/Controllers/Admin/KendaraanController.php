<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kendaraan;
use Validator;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kendaraan::all();
        $no = 1;
        return view('Admin.index_kendaraan', compact('data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create_kendaraan');        
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
            'tipe'      =>    'required|max:30',
            'nomork'     =>    'required',
            'jumlahk'    =>    'required',
            // parameter unique harus = nama_table,property
        ], [
            'tipe.required'     =>        'tipe kendaraan tidak boleh kosong',
            'tipe.max'          =>        'tipe kendaraan tidak boleh lebih dari 30 karakter',
            'nomor.required'    =>       'nomor kendaraan tidak boleh kosong',
            'jumlah.required'   =>      'jumlah unit tidak boleh kosong',
        ])->validate();

        Kendaraan::create([
            'tipe_kendaraan'    =>   $request->tipe,
            'no_kendaraan'      =>   $request->nomork,
            'jumlah_unit'       =>   $request->jumlahk,
        ]);

        return redirect()->route('datakendaraan');        
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
        $edit = Kendaraan::find($id);
        return view('Admin.edit_kendaraan', compact('edit'));                
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
            'tipe'      =>    'required|max:30',
            'nomork'     =>    'required',
            'jumlahk'    =>    'required',
            // parameter unique harus = nama_table,property
        ], [
            'tipe.required'     =>       'tipe kendaraan tidak boleh kosong',
            'tipe.max'          =>       'tipe kendaraan tidak boleh lebih dari 30 karakter',
            'nomor.required'    =>       'nomor kendaraan tidak boleh kosong',
            'jumlah.required'   =>       'jumlah unit tidak boleh kosong',
        ])->validate();

        Kendaraan::find($id)->update([
            'tipe_kendaraan'    =>   $request->tipe,
            'no_kendaraan'      =>   $request->nomork,
            'jumlah_unit'       =>   $request->jumlahk,
        ]);

        return redirect()->route('datakendaran');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Kendaraan::destroy($request->delete);
        return redirect()->route('datakendaraan');        
    }
}
