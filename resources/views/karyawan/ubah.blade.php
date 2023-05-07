{{-- @extends('templates/main')


@section('container') --}}
 <!-- Basic Card -->

  
<!-- #END# Basic Card -->
{{-- @endsection --}}

<h2>Ubah karyawan</h2>
<form method="post" action="/karyawan/{{ $karyawan->id }}">
  @method('put')  
  @csrf
    {{-- <input type="hidden" id="id" name="id" value="{{ $karyawan->id }}"><br><br> --}}

   <label for="username">Username:</label>
   <input type="text" id="username" name="username" value="{{ $karyawan->username }}"><br><br>

   <label for="password">Password:</label>
   <input type="password" id="password" name="password" value="{{ $karyawan->password }}"><br><br>

   <label for="nama">Nama:</label>
   <input type="text" id="nama" name="nama" value="{{ $karyawan->nama }}"><br><br>
   
   {{-- acan beres --}}
   <label for="level">Level:</label>
   <select id="level" name="level">
     <option value="admin" @if ($karyawan->level == 'admin') selected @endif>Admin</option>
     <option value="karyawan" @if ($karyawan->level == 'karyawan') selected @endif>Karyawan</option>
   </select><br><br>
   
   <input type="submit" name="submit" value="Save">
 </form>