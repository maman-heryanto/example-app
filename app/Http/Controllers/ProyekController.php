<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProyekModels;
use Illuminate\Support\Facades\Auth;

class ProyekController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check() && Auth::user()->id_level == 2) {
                return abort(403, 'Access denied. Your ip is detected');
            }

            return $next($request);
        });
    }

    public function index()
    {
        $proyek = ProyekModels::all();
        return view(
            'proyek.index',
            [
                'title' => 'proyek-page'
            ],
            compact('proyek')
        );
    }

        // insert
        public function tambahproyek()
        {
            return view(
                'proyek.tambahproyek',
                [
                    'title' => 'tambah-proyek-page'
                ],
                
            );
        }

        public function store(Request $request)
        {
            // dd($request);
            ProyekModels::create($request->except(['_token','submit','updated_at',
            'created_at']));
            return redirect('proyek');
        }
        //update
    public function ubah($id)
    {
        $proyek = ProyekModels::find($id);
        // dd($proyek);
        return view(
            'proyek.ubah',
            [
                'title' => 'ubah-proyek-page'
            ],
            compact('proyek')
        );
    }

   
    public function update($id,Request $request)
    {
        $proyek = ProyekModels::find($id);
        $proyek->update([
            'nama_proyek' => $request->input('nama_proyek'),
            'volume' => $request->input('volume')
        ]);
        return redirect('proyek');
    }
    
    public function destroy($id)
    {
        $proyek = ProyekModels::find($id);
        $proyek->delete();
        return redirect('proyek');
    }
    

}
