<?php

namespace App\Http\Controllers;

use App\Models\LaporanKegiatan;
use App\Models\LaporanKegiatanModels;
use App\Models\ProyekModels;
use Illuminate\Http\Request;

class LaporanKegiatanController extends Controller
{
    public function index()
    {
        $laporankegiatan = LaporanKegiatanModels::all();
        return view(
            'laporankegiatan.index',
            [
                'title' => 'Laporan-kegiatan'
            ],
            compact('laporankegiatan')
        );
    }

   // insert
    public function tambahlaporankegiatan()
    {
        $proyek = ProyekModels::all();
        return view(
            'laporankegiatan.tambahlaporankegiatan',
            [
                'title' => 'Tambah-Laporan-Kegiatan-page'
            ],
            compact('proyek')
        );
    }

    // public function store(Request $request)
    // {
    //     LaporanKegiatanModels::create($request->except(['_token','submit','updated_at',
    //     'created_at']));
    //     return redirect('laporankegiatan');
    // }

    // //update
    // public function ubah($id)
    // {
    //     $laporankegiatan = LaporanKegiatanModels::find($id);
    //     // dd($laporankegiatan);
    //     return view(
    //         'laporankegiatan.ubah',
    //         [
    //             'title' => 'ubah-laporankegiatan-page'
    //         ],
    //         compact('laporankegiatan')
    //     );
    // }

   
    // public function update($id,Request $request)
    // {
    //     $laporankegiatan = LaporanKegiatanModels::find($id);
    //     $laporankegiatan->update([
    //         'username' => $request->input('username'),
    //         'password' => $request->input('password'),
    //         'nama' => $request->input('nama'),
    //         'level' => $request->input('level')
    //     ]);
    //     return redirect('laporankegiatan');
    // }
    
    // public function destroy($id)
    // {
    //     $laporankegiatan = LaporanKegiatanModels::find($id);
    //     $laporankegiatan->delete();
    //     return redirect('laporankegiatan');
    // }

 
     
}
