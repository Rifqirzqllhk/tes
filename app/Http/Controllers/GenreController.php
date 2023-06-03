<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexDrama()
    {
        $data = [
            'bukus' => Genre::where('id', 1)->first()->buku,
            'title' => 'Novel Drama'
        ];
        return view('pages.genre', $data);
    }

    public function indexHorror()
    {
        $data = [
            'bukus' => genre::where('id', 2)->first()->buku,
            'title' => 'Buku Horror'
        ];
        return view('pages.genre', $data);
    }

    public function indexAction()
    {
        $data = [
            'bukus' => genre::where('id', 3)->first()->buku,
            'title' => 'Buku Action'
        ];
        return view('pages.genre', $data);
    }
}
