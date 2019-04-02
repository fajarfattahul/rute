<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    public function index(){
        $data['jabatan'] = Auth::user()->status;
        $data['users'] = User::where('status', 'user')->get();

        return view('Admin.sales.index', $data);
    }
}
