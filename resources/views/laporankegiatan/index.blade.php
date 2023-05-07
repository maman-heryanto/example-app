@extends('templates.main')


@section('container')
<div class="container mb-5" style="margin-bottom: 10px;">
    <a type="button" class="btn btn-primary waves-effect mb-3"  href="/laporankegiatan/tambahlaporankegiatan">Tambah laporankegiatan</a>
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
                                      <th>ID Laporan Kegiatan</th>
                                      <th>Nama Karyawan</th>
                                      <th>Kegiatan</th>
                                      <th>Proyek</th>
                                      <th>Ruas</th>
                                      <th>Start</th>
                                      <th>Target</th>
                                      <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($laporankegiatan as $lk)
                                <tr>
                                  {{-- <th scope="row">1</th> --}}
                                  <td>{{$lk->id }}</td>
                                  <td>{{$lk->username }}</td>
                                  <td>{{$lk->password }}</td>
                                  <td>{{$lk->nama }}</td>
                                  <td>{{$lk->level }}</td>
                                  <td>
                                    <a href="/laporankegiatan/{{ $lk->id }}/ubah" class="badge bg-green">Ubah</a> || 
                                    <form action="/laporankegiatan/{{ $lk->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <input class="bg-red" type="submit" value="Hapus" >
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