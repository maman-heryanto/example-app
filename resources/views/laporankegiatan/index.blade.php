@extends('templates.main')


@section('container')
    <div class="container mb-5" style="margin-bottom: 10px;">
        <a type="button" class="btn btn-primary waves-effect mb-3" href="/laporankegiatan/tambahlaporankegiatan">Tambah
            Laporan Kegiatan</a>
        @if (Auth::user()->id_level == 1)
            <a type="button" class="btn btn-success waves-effect mb-3" href="/laporankegiatan/export">Table Export PDF</a>
        @endif
    </div>
    {{-- <div class="container mb-5" style="margin-bottom: 10px;"></div> --}}
    <div class="container mt-3">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Laporan Kegiatan
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                                id="tablelaporankegiatan">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Karyawan</th>
                                        <th>Proyek</th>
                                        <th>Kegiatan</th>
                                        <th>Ruas</th>
                                        <th>Start</th>
                                        <th>Target</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                {{-- <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Karyawan</th>
                                        <th>Proyek</th>
                                        <th>Kegiatan</th>
                                        <th>Ruas</th>
                                        <th>Start</th>
                                        <th>Target</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot> --}}
                                <tbody>
                                    @foreach ($laporankegiatan as $lk)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $lk->name }}</td>
                                            <td>{{ $lk->nama_proyek }}</td>
                                            <td>{{ $lk->kegiatan }}</td>
                                            <td>{{ $lk->ruas }}</td>
                                            <td>{{ $lk->start }}</td>
                                            <td>{{ $lk->target }}</td>
                                            <td>
                                                <a href="/laporankegiatan/{{ $lk->id }}/ubah"
                                                    class="btn btn-success">Ubah</a>
                                                <span class="pull-right">
                                                    <form action="/laporankegiatan/{{ $lk->id }}" method="post"
                                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus data laporan kegiatan ini?')">
                                                        @method('delete')
                                                        @csrf
                                                        <input class="btn btn-danger" type="submit" value="Hapus">
                                                    </form>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
@endsection
