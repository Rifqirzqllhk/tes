<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function cekUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = user::where('email', $email)->first();
        if ($user->password == $password) {
            Session::put('user_id', $user->id);
            if ($user->user_type == 'admin') {
                Session::put('admin', true);
                return redirect('/admin');
            }
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }

    public function indexAdmin()
    {
        $data = [
            'Buku' => Buku::all()
        ];
        return view('halaman-admin', $data);
    }

    // Session index admin belum jalan

    public function getAllUser()
    {
        $data = [
            'users' => user::all(),
        ];
        return view('halaman-admin-getAllUser',$data);
    }

    public function setIsAdmin($id)
    {
        $setAdmin = user::find($id);
        if ($setAdmin->user_type != 'admin') {
            $setAdmin->user_type = 'admin';
        } else {
            $setAdmin->user_type = 'user';
        }
        $setAdmin->save();
        return redirect('/admin/allUser')->with('success', 'credential berhasil diupdate');
    }

    public function destroy($id)
    {
        user::destroy($id);
        return redirect('/admin/allUser')->with('success', 'user berhasil dihapus');
    }
}
