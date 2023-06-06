<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    public function index()
    {
        if (Session::has('user_id')) {
            $data = [
                'pesanans' => pesanan::where('user_id', Session::get('user_id'))->get()
            ];
            return view('pesanan', $data);
        }
        return redirect('/login');
    }

    public function show($id)
    {
        if (Session::has('user_id')) {
            $data = [
                "res" => Pesanan::where('id', $id)->where('user_id', Session::get('user_id'))->first()
            ];
            return view('invoice', $data);
        }

        function adminShow($userid)
        {
            if (Session::has('user_id')) {
                $data = [
                    "pesanans" => Pesanan::where('user_id', $userid)->get()
                ];
                return view('reservasi', $data);
            }
            return redirect('/login');
        }
        return redirect('/login');
    }

    public function create(Request $req)
    {
        if (Session::has('user_id')) {
            $date = strtotime($req->post('date'));
            if ($req->post('durasi') == 14) {
                $date = strtotime("+14 day", $date);
            } else {
                $date = strtotime("+7 day", $date);
            }
            $date = date('Y-m-d', $date);
            $data = [
                'user_id' => $_POST['user_id'],
                'buku_id' => $_POST['buku_id'],
                'quantity' => $_POST['quantity'],
                'tanggal_pinjam' => $_POST['date'],
                'tanggal_kembali' => $date,
                'duration' => $_POST['durasi']
            ];
            Pesanan::create($data);
            return redirect('/pesanans');
        }
        return redirect('/login');
    }
}
