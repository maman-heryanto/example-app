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
        // $laporankegiatan = LaporanKegiatanModels::all();
        $laporankegiatan = LaporanKegiatanModels::join('proyek', 'laporan_kegiatan.id_proyek', '=', 'proyek.id')
        ->join('karyawan', 'karyawan.id', '=', 'laporan_kegiatan.id_karyawan')
        ->get(['laporan_kegiatan.*','karyawan.nama','proyek.nama_proyek']);

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

    public function store(Request $request)
    {
        LaporanKegiatanModels::create($request->except(['_token','submit','updated_at',
        'created_at']));
        return redirect('laporankegiatan');
    }

    // //update
    public function ubah($id)
    {
        // $laporankegiatan = LaporanKegiatanModels::find($id);
        $proyek = ProyekModels::all();
        
        $laporankegiatan = LaporanKegiatanModels::join('proyek', 'laporan_kegiatan.id_proyek', '=', 'proyek.id')
        ->join('karyawan', 'karyawan.id', '=', 'laporan_kegiatan.id_karyawan')
        ->where('laporan_kegiatan.id', '=', $id)
        ->get(['laporan_kegiatan.*','karyawan.nama','proyek.nama_proyek']);
        // dd($laporankegiatan);
        return view(
            'laporankegiatan.ubah',
            [
                'title' => 'ubah-laporankegiatan-page'
            ],
            compact('laporankegiatan','proyek')
        );
    }

   
    public function update($id,Request $request)
    {
        // dd($request);
        $laporankegiatan = LaporanKegiatanModels::find($id);
        $laporankegiatan->update([
            "id_karyawan" => $request->input('id_karyawan'),
            "kegiatan" => $request->input('kegiatan'),
            "id_proyek" => $request->input('id_proyek'),
            "ruas" => $request->input('ruas'),
            "start" =>  $request->input('start'),
            "target" =>  $request->input('target')
        ]);
        return redirect('laporankegiatan');
    }
    
    public function destroy($id)
    {
        $laporankegiatan = LaporanKegiatanModels::find($id);
        $laporankegiatan->delete();
        return redirect('laporankegiatan');
    }

 
     
}
