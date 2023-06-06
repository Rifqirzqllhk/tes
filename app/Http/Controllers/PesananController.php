<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PesananController extends Controller
{
    public function index()
    {
        if (Session::has('user_id')) {
            $data = [
                'pesanans' => Pesanan::where('user_id', Session::get('user_id'))->get()
            ];
            return view('pages.pesanan', $data);
        }
        return redirect('/login');
    }

    public function show($id)
    {
        if (Session::has('user_id')) {
            $data = [
                "pesanan" => Pesanan::where('id', $id)->where('user_id', Session::get('user_id'))->first()
            ];
            return view('invoice', $data);
        }
        return redirect('/login');
    }

    function adminShow($id)
    {
        if (Session::has('user_id')) {
            $data = [
                "pesanan" => Pesanan::where('id', $id)->get()
            ];
            return view('pages.pesanan', $data);
        }
        return redirect('/login');
    }

    public function create(Request $req)
    {
        if (Session::has('user_id')) {
            $date = strtotime($req->post('date'));
            $date = date('Y-m-d', $date);
            $data = [
                'user_id' => $_POST['user_id'],
                'buku_id' => $_POST['buku_id'],
                'quantity' => $_POST['quantity'],
                'tanggal_pinjam' => $_POST['tglpinjam'],
                'tanggal_kembali' => $_POST['tglkembali']
            ];
            Pesanan::create($data);
            return redirect('/pesanans');
        }
        return redirect('/login');
    }
}
