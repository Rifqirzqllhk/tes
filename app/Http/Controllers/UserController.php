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
        if(!is_null($user)){
            if ($user->password == $password) {
                Session::put('user_id', $user->id);
                if ($user->user_type == 'admin') {
                    Session::put('admin', true);
                    return redirect('/admin');
                }
                return redirect('/');
            }
        }else {
            return redirect('/login');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function indexAdmin()
    {
        $data = [
            'bukus' => Buku::all()
        ];
        return view('pages.adminsetBuku', $data);
    }

    // Session index admin belum jalan

    public function getAllUser()
    {
        $data = [
            'users' => user::all(),
        ];
        return view('pages.adminsetUser',$data);
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
        return redirect('/setUser')->with('success', 'credential berhasil diupdate');
    }

    public function destroy($id)
    {
        user::destroy($id);
        return redirect('/setUser')->with('success', 'user berhasil dihapus');
    }

    public function create(Request $request)
    {
        $inputUser = new User;

        $inputUser->name = $request->input('name');
        $inputUser->email = $request->input('email');
        $inputUser->password = $request->input('password');
        $inputUser->user_type = $request->input('user_type', 'user');

        $inputUser->save();
        return redirect('/login')->with('success', 'Berhasil mendaftar');
    }
}
