@extends('templates.main')


@section('container')
    <div class="block-header">
        <h2>Ubah Data Laporan Kegiatan</h2>
    </div>
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <h2 class="card-inside-title">Form Laporan Kegiatan</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            {{-- form --}}
                                {{-- {{ dd($laporankegiatan) }} --}}
                            <form method="post" action="/laporankegiatan/{{ $laporankegiatan[0]->id }}">
                                @method('put')
                                @csrf
                                <input type="hidden" class="form-control" placeholder="ID Karyawan" id="id_karyawan"
                                    name="id_karyawan" value="{{ $laporankegiatan[0]->id_karyawan }}" />

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Masukan Kegiatan"
                                            id="kegiatan" name="kegiatan" value="{{ $laporankegiatan[0]->kegiatan }}"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <select class="form-control show-tick" name="id_proyek" id="id_proyek">
                                        <option value="{{ $laporankegiatan[0]->id_proyek }}">{{ $laporankegiatan[0]->nama_proyek }}</option>
                                        @foreach ($proyek as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama_proyek }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Masukan Ruas" id="ruas"
                                            name="ruas" value="{{ $laporankegiatan[0]->ruas }}"/>
                                    </div>
                                </div>
                                <p class="card-inside">Start Proyek</p>
                                <div class="form-group">
                                    <div class="form-line" id="bs_datepicker_container"
                                        style="z-index: 10; display: block;">
                                        <input type="text" class="datepicker form-control"
                                            placeholder="Masukan Start proyek" name="start" id="start" value="{{ $laporankegiatan[0]->start }}">
                                    </div>
                                </div>
                                <p class="card-inside">Target Proyek</p>
                                <div class="form-group">
                                    <div class="form-line" id="bs_datepicker_container"
                                        style="z-index: 10; display: block;">
                                        <input type="text" class="datepicker form-control"
                                            placeholder="Masukan Target proyek" name="target" id="target" value="{{ $laporankegiatan[0]->target }}">
                                    </div>
                                </div>

                                <input type="submit" name="submit" value="Save">

                            </form>
                            {{-- endform --}}
                        </div>
                    </div>
                @endsection
