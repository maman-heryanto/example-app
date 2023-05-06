<?php

namespace App\Http\Controllers;
use App\Models\KaryawanModels;
use Illuminate\Http\Request;

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
}
