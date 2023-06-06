@extends('layouts.app')

{{-- set title --}}
@section('title', 'DeLibrary')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-8">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-xl-7">
                            <div class="card">
                                <div class="card-body p-5">
                                    <h2>RECEIPT</h2>
                                    <div class="border-top border-gray-200 pt-4 mt-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="text-muted mb-2">Reservation ID</div>
                                                <strong>{{ $pesanan->id }}</strong>
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                <div class="text-muted mb-2">Payment Date</div>
                                                <strong>{{ $pesanan->tanggal_pinjam }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top border-gray-200 mt-4 py-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="text-muted mb-2">Client</div>
                                                <strong> {{ $pesanan->user->name }} </strong>
                                                <p class="fs-sm">
                                                    <a href="#!"
                                                        class="text-purple"><span>{{ $pesanan->user->email }}</span>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table border-bottom border-gray-200 mt-3">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="fs-sm text-dark text-uppercase-bold-sm px-0">
                                                    Judul
                                                </th>
                                                <th scope="col"
                                                    class="fs-sm text-dark text-uppercase-bold-sm text-center align-middle">
                                                    Qnty
                                                </th>
                                                <th scope="col"
                                                    class="fs-sm text-dark text-uppercase-bold-sm text-end px-0">
                                                    Amount
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="px-0">{{ $pesanan->buku->title }}</td>
                                                <td class="text-center align-middle">{{ $pesanan->quantity }}</td>
                                                <td class="text-end px-0">Rp {{ $pesanan->buku->price }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-0"><strong>Return Date</strong></td>
                                                <td></td>
                                                <td class="text-end px-0">
                                                    <strong>{{ $pesanan->tanggal_kembali }}</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="mt-5">
                                        <div class="d-flex justify-content-end mt-3">
                                            <h5 class="me-3">Total:</h5>
                                            <h5 class="text-success">Rp
                                                {{ $pesanan->buku->price * $pesanan->quantity }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
                <script type="text/javascript"></script>
                <div class="col"></div>
            </div>
        </div>
    </section>

@endsection

@push('after-style')
@endpush
