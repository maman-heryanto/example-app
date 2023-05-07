@extends('templates.main')


@section('container')
{{-- <h2>Laporan Kegiatan ABC</h2> --}}
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
                                      <th>No</th>
                                      <th>ID Karyawan</th>
                                      <th>Kegiatan</th>
                                      <th>Id Proyek</th>
                                      <th>Ruas</th>
                                      <th>Start</th>
                                      <th>Target</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($laporankegiatan as $lk)
                                <tr>
                                  <th scope="row">1</th>
                                  <td>{{$lk->id_karyawan }}</td>
                                  <td>{{$lk->kegiatan }}</td>
                                  <td>{{$lk->id_proyek }}</td>
                                  <td>{{$lk->ruas }}</td>
                                  <td>{{$lk->start }}</td>
                                  <td>{{$lk->target }}</td>
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