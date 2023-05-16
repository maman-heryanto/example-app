@extends('templates.main')


@section('container')
    <div class="block-header">
        <h2>Change Password</h2>
    </div>
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <h2 class="card-inside-title">Form Change Password</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            {{-- form --}}
                            <form method="post" action="/profile/{{ $karyawan->id }}">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control" placeholder="Masukan Password"
                                            id="password" name="password" autocomplete="new-password" />
                                    </div>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input placeholder="Masukan Password Lagi" id="password-confirm" type="password"
                                            class="form-control" name="password_confirmation" autocomplete="new-password" />
                                    </div>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <input type="submit" name="submit" value="Save">
                            </form>
                            {{-- endform --}}
                        </div>
                    </div>
                @endsection
