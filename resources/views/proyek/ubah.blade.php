@extends('templates.main')


@section('container')

  <div class="block-header">
    <h2>Ubah Data proyek</h2>
</div>
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <h2 class="card-inside-title">Form Proyek</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                      {{-- form --}}
                      <form method="post" action="/proyek/{{ $proyek->id }}">
                        @method('put')  
                        @csrf                      
                        <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" placeholder="Nama Proyek" id="nama_proyek" name="nama_proyek" value="{{ $proyek->nama_proyek }}"/>
                          </div>
                      </div>
                      <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Volume m³" id="volume" name="volume" value="{{ $proyek->volume }}"/>
                            </div>
                        </div>

                        <input type="submit" name="submit" value="Save">

                      </form>
                        {{-- endform --}}
                    </div>
                </div>

 @endsection