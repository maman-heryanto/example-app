{{-- @extends('templates/main')


@section('container') --}}
 <!-- Basic Card -->

  
<!-- #END# Basic Card -->
{{-- @endsection --}}

<h2>Tambah karyawan</h2>
<form method="post" action="/karyawan/store">
    @csrf
    {{-- <input type="text" id="id_karyawan" name="id_karyawan"><br><br> --}}

   <label for="username">Username:</label>
   <input type="text" id="username" name="username"><br><br>

   <label for="password">Password:</label>
   <input type="password" id="password" name="password"><br><br>

   <label for="nama">Nama:</label>
   <input type="text" id="nama" name="nama"><br><br>
   
   <label for="level">Level:</label>
   <select id="level" name="level">
     <option value="admin">Admin</option>
     <option value="karyawan">karyawan</option>
   </select><br><br>
   
   <input type="submit" name="submit" value="Save">
 </form>