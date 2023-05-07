<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaryawanModels;
use App\Http\Controllers\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = KaryawanModels::all();
        return view(
            'karyawan',
            [
                'title' => 'karyawan-page'
            ],
            compact('karyawan')
        );
    }

    // insert
    public function tambahkaryawan()
    {
        return view(
            'karyawan.tambahkaryawan',
            [
                'title' => 'tambah-karyawan-page'
            ],
            
        );
    }

    public function store(Request $request)
    {
        KaryawanModels::create($request->except(['_token','submit','updated_at',
        'created_at']));
        return redirect('karyawan');
    }

    //update
    public function ubah($id)
    {
        $karyawan = KaryawanModels::find($id);
        // dd($karyawan);
        return view(
            'karyawan.ubah',
            [
                'title' => 'ubah-karyawan-page'
            ],
            compact('karyawan')
        );
    }

   
    public function update($id,Request $request)
    {
        $karyawan = KaryawanModels::find($id);
        $karyawan->update([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'nama' => $request->input('nama'),
            'level' => $request->input('level')
        ]);
        return redirect('karyawan');
    }
}
