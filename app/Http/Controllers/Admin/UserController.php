<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        $no = 1;
        return view('Admin.index', compact('data', 'no'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create');
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
            'username'    =>    'required|max:30',
            'email'       =>    'required|max:30',
            'nama'        =>    'required|max:30',
            'tgl'         =>    'required',
            'gender'      =>    'required',
            'jabatan'     =>    'required',
            'password'    =>    'required|max:30',
            // parameter unique harus = nama_table,property
        ], [
            'username.required'         =>        'kolom inputan username tidak boleh kosong',
            'username.max'              =>        'username tidak boleh lebih dari 30 karakter',
            'email.required'            =>        'kolom inputan email tidak boleh kosong',
            'email.max'                 =>        'email tidak boleh lebih dari 30 karakter',
            'nama.required'             =>        'kolom inputan nama tidak boleh kosong',
            'nama.max'                  =>        'nama tidak boleh lebih dari 30 karakter',
            'tgl.required'              =>        'kolom inputan tanggal lahir tidak boleh kosong',
            'gender.required'           =>        'kolom inputan gender tidak boleh kosong',
            'jabatan.required'          =>        'kolom inputan jabatan tidak boleh kosong',
            'password.required'         =>        'kolom inputan password tidak boleh kosong',
            'password.max'              =>        'password tidak boleh lebih dari 30 karakter',

        ])->validate();

        User::create([
            'username'      =>   $request->username,
            'email'         =>   $request->email,
            'name'          =>   $request->nama,
            'tgl_lahir'     =>   $request->tgl,
            'jk'            =>   $request->gender,
            'jabatan'       =>   json_encode([$request->jabatan]),
            'password'      =>  $request->password,
        ]);

        return redirect()->route('datauser');
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
        $edit = User::find($id);
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
            'username'    =>    'required|max:30',
            'email'       =>    'required|max:30',
            'nama'        =>    'required|max:30',
            'tgl'         =>    'required',
            'gender'      =>    'required',
            'jabatan'     =>    'required',
            'password'    =>    'required|max:30',
            // parameter unique harus = nama_table,property
        ], [
            'username.required'         =>        'kolom inputan username tidak boleh kosong',
            'username.max'              =>        'username tidak boleh lebih dari 30 karakter',
            'email.required'            =>        'kolom inputan email tidak boleh kosong',
            'email.max'                 =>        'email tidak boleh lebih dari 30 karakter',
            'nama.required'             =>        'kolom inputan nama tidak boleh kosong',
            'nama.max'                  =>        'nama tidak boleh lebih dari 30 karakter',
            'tgl.required'              =>        'kolom inputan tanggal lahir tidak boleh kosong',
            'gender.required'           =>        'kolom inputan gender tidak boleh kosong',
            'jabatan.required'          =>        'kolom inputan jabatan tidak boleh kosong',
            'password.required'         =>        'kolom inputan password tidak boleh kosong',
            'password.max'              =>        'password tidak boleh lebih dari 30 karakter',

        ])->validate();

        User::find($id)->update([
            'username'      =>   $request->username,
            'email'         =>   $request->email,
            'name'          =>   $request->nama,
            'tgl_lahir'     =>   $request->tgl,
            'jk'            =>   $request->gender,
            'jabatan'       =>   json_encode([$request->jabatan]),
            'password'      =>  $request->password,
        ]);

        return redirect()->route('datauser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        User::destroy($request->delete);
        return redirect()->route('datauser');
    }
}
