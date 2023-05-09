@extends('templates.main')


@section('container')
    <div class="container mb-5" style="margin-bottom: 10px;">
        <a type="button" class="btn btn-primary waves-effect mb-3" href="/laporankegiatan/tambahlaporankegiatan">Tambah
            Laporan Kegiatan</a>
    </div>
    <div class="container mt-3">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Data Laporan Kegiatan
                        </h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
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
                            <tbody>
                                @foreach ($laporankegiatan as $lk)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        {{-- <td>{{$lk->id }}</td> --}}
                                        <td>{{ $lk->nama }}</td>
                                        <td>{{ $lk->nama_proyek }}</td>
                                        <td>{{ $lk->kegiatan }}</td>
                                        <td>{{ $lk->ruas }}</td>
                                        <td>{{ $lk->start }}</td>
                                        <td>{{ $lk->target }}</td>
                                        <td>
                                            <a href="/laporankegiatan/{{ $lk->id }}/ubah"
                                                class="btn btn-success">Ubah</a> ||
                                            <form action="/laporankegiatan/{{ $lk->id }}" method="post"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus data laporan kegiatan ini?')">
                                                @method('delete')
                                                @csrf
                                                <input class="btn btn-danger" type="submit" value="Hapus">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Table -->
    </div>
@endsection
