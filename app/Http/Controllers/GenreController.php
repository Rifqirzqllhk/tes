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
            'bukus' => Genre::where('id', 1)->first()->bukus,
            'title' => 'Novel Drama'
        ];
        return view('pages.genre', $data);
    }

    public function indexHorror()
    {
        $data = [
            'bukus' => Genre::where('id', 2)->first()->bukus,
            'title' => 'Buku Horror'
        ];
        return view('pages.genre', $data);
    }

    public function indexAction()
    {
        $data = [
            'bukus' => Genre::where('id', 3)->first()->bukus,
            'title' => 'Buku Action'
        ];
        return view('pages.genre', $data);
    }
}
