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
        <th scope="col">Reservation ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Genre</th>
        <th scope="col">Cover</th>
        <th scope="col">Harga</th>
        <th scope="col">Receipt</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pesanan as $res)
      <tr>
        <th scope="col">{{ $res->id }}</th>
        <td scope="col">{{ $res->users->name }}</td>
        <td scope="col">{{ $res->users->email }}</td>
        <td scope="col">{{ $res->bukus->title }}</td>
        <td scope="col">{{ $res->genres->genre-> }}</td>
        <td scope="col"><img src="img/{{ $res->bukus->cover }}" alt="" style="width: 50px;"></td>
        <td scope="col">{{ $res->bukus->price }}</td>
        <td scope="col"><a class="btn btn-success" href="/pesanans/{{ $res->id }}">Print</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection

@push('after-style')
@endpush