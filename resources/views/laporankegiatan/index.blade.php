@extends('templates.main')


@section('container')
    <div class="container mb-5" style="margin-bottom: 10px;">
        <a type="button" class="btn btn-primary waves-effect mb-3" href="/laporankegiatan/tambahlaporankegiatan">Tambah
            Laporan Kegiatan</a>
    </div>
    <div class="container mt-3">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EXPORTABLE TABLE
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
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
                                <tfoot>
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
                                </tfoot>
                                <tbody>
                                    @foreach ($laporankegiatan as $lk)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            {{-- <td>{{$lk->id }}</td> --}}
                                            <td>{{ $lk->name }}</td>
                                            <td>{{ $lk->nama_proyek }}</td>
                                            <td>{{ $lk->kegiatan }}</td>
                                            <td>{{ $lk->ruas }}</td>
                                            <td>{{ $lk->start }}</td>
                                            <td>{{ $lk->target }}</td>
                                            <td>
                                                {{-- <div class="d-flex justify-content-start"> --}}
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
                                                {{-- </div> --}}
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
