<?php

namespace App\Http\Controllers;

use App\Models\LaporanKegiatan;
use Illuminate\Http\Request;

class LaporanKegiatanController extends Controller
{
    public function index()
    {
        $laporankegiatan = LaporanKegiatan::all();
        return view(
            'laporankegiatan',
            [
                'title' => 'Laporan-kegiatan'
            ],
            compact('laporankegiatan')
        );
    }
}
