@extends('templates.main')


@section('container')
{{-- <h2>Laporan Kegiatan ABC</h2> --}}
{{-- tambah Karyawan --}}
<div class="container mb-5">
    <a type="button" class="btn btn-primary waves-effect" href="/karyawan/tambahkaryawan">Tambah Karyawan</a>
</div>

<div class="container">
            <!-- Basic Table -->
            <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header">
                          <h2>
                              Laporan Kegiatan
                          </h2>
                      </div>
                      <div class="body table-responsive">
                          <table class="table">
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
                                  <td>{{$k->id }}</td>
                                  <td>{{$k->username }}</td>
                                  <td>{{$k->password }}</td>
                                  <td>{{$k->nama }}</td>
                                  <td>{{$k->level }}</td>
                                  <td><a href=""class="badge bg-red">Hapus</a> || <a href="/karyawan/{{ $k->id }}/ubah" class="badge bg-green">Ubah</a></td>
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