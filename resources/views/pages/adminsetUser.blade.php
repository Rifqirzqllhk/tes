@extends('layouts.app')

{{-- set title --}}
@section('title', 'DeLibrary')

@section('content')

<section class="container-md mt-3">
    <h2>Menu User</h2>
    <div class="row">
        <div class="col">
            <table class="table table-hover">
                <thead class="table-active">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Tipe User</th>
                        <th class="text-center">Menu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <button class="btn btn-warning">Transaction</button>
                            <button class="btn btn-info">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection

@push('after-style')
@endpush