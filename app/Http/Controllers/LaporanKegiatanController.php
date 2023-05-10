<?php

namespace App\Http\Controllers;

use App\Models\LaporanKegiatan;
use App\Models\LaporanKegiatanModels;
use App\Models\ProyekModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanKegiatanController extends Controller
{
    public function index()
    {
        
        $role = Auth::user()->id_level;
        if ($role == 1) {
            $laporankegiatan = LaporanKegiatanModels::join('proyek', 'laporan_kegiatan.id_proyek', '=', 'proyek.id')
            ->join('users', 'users.id', '=', 'laporan_kegiatan.id_karyawan')
            ->get(['laporan_kegiatan.*','users.name','proyek.nama_proyek']);  
        }else{
            $user_id = Auth::id();
            $laporankegiatan = LaporanKegiatanModels::join('proyek', 'laporan_kegiatan.id_proyek', '=', 'proyek.id')
            ->join('users', 'users.id', '=', 'laporan_kegiatan.id_karyawan')
            ->where('users.id', '=', $user_id)
            ->get(['laporan_kegiatan.*','users.name','proyek.nama_proyek']);
        }

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
        // dd($request);
        $request->validate([
            "id_karyawan" => ['required'],
            "kegiatan" => ['required'],
            "id_proyek" => ['required'],
            "ruas" => ['required'],
            "start" => ['required'],
            "target" => ['required'],
        ]);
        LaporanKegiatanModels::create($request->except(['_token','submit','updated_at',
        'created_at']));
        return redirect('laporankegiatan');
    }

    //update
    public function ubah($id)
    {
        // $laporankegiatan = LaporanKegiatanModels::find($id);
        $proyek = ProyekModels::all();
        
        $laporankegiatan = LaporanKegiatanModels::join('proyek', 'laporan_kegiatan.id_proyek', '=', 'proyek.id')
        ->join('users', 'users.id', '=', 'laporan_kegiatan.id_karyawan')
        ->where('laporan_kegiatan.id', '=', $id)
        ->get(['laporan_kegiatan.*','users.name','proyek.nama_proyek']);
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
        $request->validate([
            "id_karyawan" => ['required'],
            "kegiatan" => ['required'],
            "id_proyek" => ['required'],
            "ruas" => ['required','not_regex'],
            "start" => ['required'],
            "target" => ['required'],
        ]);
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

    // public function exportPDF(){
    //     $laporankegiatan = LaporanKegiatanModels::all();
    //     // $pdf = PDF::loadView('',[ 'title' => 'Laporan-kegiatan'], compact('laporankegiatan'));
    //     $pdf = PDF::loadView('laporankegiatan.export',['title' => 'Laporan-kegiatan'],compact('laporankegiatan'));
    //     return $pdf->download('laporan_kegiatan.pdf');
    // }
     
}
