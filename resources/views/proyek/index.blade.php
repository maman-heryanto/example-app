@extends('templates.main')


@section('container')
<div class="container mb-5" style="margin-bottom: 10px;">
    <a type="button" class="btn btn-primary waves-effect mb-3"  href="/proyek/tambahproyek">Tambah Proyek</a>
</div>
<div class="container mt-3">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                          <h2>
                              Data Proyek
                          </h2>
                      </div>
                      <div class="body table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>ID Proyek</th>
                                      <th>Nama Proyek</th>
                                      <th>Volume</th>
                                      <th>Dibuat</th>
                                      <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($proyek as $p)
                                <tr>
                                  {{-- <th scope="row">1</th> --}}
                                  <td>{{$p->id }}</td>
                                  <td>{{$p->nama_proyek }}</td>
                                  <td>{{$p->volume }} m³</td>
                                  <td>{{ date('d-M-Y', strtotime($p->created_at )); }}</td>
                                  <td>
                                    <a href="/proyek/{{ $p->id }}/ubah" class="badge bg-green">Ubah</a> || 
                                    <form action="/proyek/{{ $p->id }}" method="post">
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