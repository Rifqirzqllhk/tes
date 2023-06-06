@extends('layouts.app')

{{-- set title --}}
@section('title', 'DeLibrary')

@section('content')

    <section class="bg-primary">
        <div class="container">
            <div class="row pt-5">
                <h2 class="text-center text-white">Selamat Datang</h2>
            </div>
            <form class="form-inline" method="GET" action="/">
                <div class="input-group  pt-3 pb-5 center">
                    <input type="text" class="form-control" placeholder="Cari buku disini..." name="search">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section>
        <div class="container py-4 vh-100">
            <div class="row">
                <h3>Rekomendasi</h3>
                @foreach ($bukus as $Buku)
                <div class="col">
                    <a href="/detail/{{ $Buku->id }}">
                        <img src="{{ asset('assets/img/Buku.png')}}" alt="" srcset="">
                        <p>{{$Buku->title }}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@push('after-style')

@endpush
