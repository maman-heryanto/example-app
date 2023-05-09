@extends('templates.main')


@section('container')
    {{-- <h2>Laporan Kegiatan ABC</h2> --}}
    {{-- tambah Karyawan --}}
    <div class="container mb-5" style="margin-bottom: 10px;">
        <a type="button" class="btn btn-primary waves-effect mb-3" href="/karyawan/tambahkaryawan">Tambah Karyawan</a>
    </div>
    <div class="container mt-3">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Data Karyawan
                        </h2>
                    </div>
                    <div class="body table-responsive ">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID Karyawan</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Nama</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($karyawan as $k)
                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <td>{{ $k->id }}</td>
                                        <td>{{ $k->username }}</td>
                                        <td>{{ $k->password }}</td>
                                        <td>{{ $k->nama }}</td>
                                        <td>{{ $k->level }}</td>
                                        <td>
                                            <a href="/karyawan/{{ $k->id }}/ubah" class="btn btn-success">Ubah</a>
                                            <form action="/karyawan/{{ $k->id }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data karyawan ini?')">
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
