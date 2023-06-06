@extends('layouts.app')

{{-- set title --}}
@section('title', 'DeLibrary')

@section('content')

<section>
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <h1>{{ $title }}</h1>
            </div>
            <div class="col d-flex justify-content-end">
                <form action="/" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" size="50" placeholder="Cari buku disini..." name="search" />
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-4 vh-100">
        <div class="row">
            @foreach ($bukus as $Buku)
            <div class="col">
                <div class="card " style="width: 15rem;">
                    <img src="img/{{ $Buku->cover }}" width="150" class="card-img-top" alt="" srcset="">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">{{$Buku->title }}</h5>
                        <p class="card-text text-truncate">{{$Buku->synopsis}}</p>
                        <a href="/detail/{{ $Buku->id }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('after-style')
@endpush