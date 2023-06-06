@extends('layouts.app')

{{-- set title --}}
@section('title', 'DeLibrary')

@section('content')

<div class="container mt-3" style="min-height: 580px;">
<div class="container">
  <p class="h2 mt-4 mb-4">Daftar Transaksi</p>
</div>
  <table class="table table-striped table-hover lolz">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Reservation ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Buku</th>
        <th scope="col">Genre</th>
        <th scope="col">Cover</th>
        <th scope="col">Harga</th>
        <th scope="col">Receipt</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td scope="col">1</td>
        <td scope="col">11111</td>
        <td scope="col">Der</td>
        <td scope="col">Der@gmail.com</td>
        <td scope="col">Naruti</td>
        <td scope="col">Action</td>
        <td scope="col"><img src="img/NarutoCoverTankobon1.jpg" style="width: 50px;"></img></td>
        <td scope="col">Rp. 10000</td>
        <td scope="col"><button type="button" class="btn btn-success">Print</button></td>
      </tr>
      <tr>
        <td scope="col">2</td>
        <td scope="col">22222</td>
        <td scope="col">Lolz</td>
        <td scope="col">Lolz@gmail.com</td>
        <td scope="col">Dilan 1991</td>
        <td scope="col">Drama</td>
        <td scope="col"><img src="img/Dilan_1990.jpg" style="width: 50px;"></img></td>
        <td scope="col">Rp. 10000</td>
        <td scope="col"><button type="button" class="btn btn-success">Print</button></td>
      </tr>
    </tbody>
  </table>
</div>  

@endsection

@push('after-style')
@endpush