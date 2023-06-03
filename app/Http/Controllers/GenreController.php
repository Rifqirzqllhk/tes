<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexAction()
    {
        $data = [
            'bukus' => Genre::where('id', 1)->first()->bukus,
            'title' => 'Action Comics'
        ];
        return view('halaman-komik-per-genre', $data);
    }

    public function indexAdventure()
    {
        $data = [
            'bukus' => Genre::where('id', 2)->first()->bukus,
            'title' => 'Adventure Comics'
        ];
        return view('halaman-komik-per-genre', $data);
    }

    public function indexDrama()
    {
        $data = [
            'bukus' => Genre::where('id', 3)->first()->bukus,
            'title' => 'Drama Comics'
        ];
        return view('halaman-komik-per-genre', $data);
    }
}
