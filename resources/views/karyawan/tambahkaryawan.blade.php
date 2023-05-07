@extends('templates.main')


@section('container')

  <div class="block-header">
    <h2>Tambah Data Karyawan</h2>
</div>
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <h2 class="card-inside-title">Form Karyawan</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                      {{-- form --}}
                      <form method="post" action="/karyawan/store">
                        @csrf
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Username" id="username" name="username"/>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password"/>
                          </div>
                        </div>
                        <div class="form-group">
                              <div class="form-line">
                                  <input type="text" class="form-control" placeholder="Nama Karyawan" id="nama" name="nama"/>
                              </div>
                          </div>
                          
                          <div class="row clearfix">
                                <select class="form-control show-tick" name="level" id="level">
                                    <option value="" >-- Please select --</option>
                                    <option value="admin">Admin</option>
                                    <option value="karyawan">Karyawan</option>
                                </select>
                            </div>

                        <input type="submit" name="submit" value="Save">

                      </form>
                        {{-- endform --}}
                    </div>
                </div>

 @endsection