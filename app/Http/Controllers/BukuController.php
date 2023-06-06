<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = [
            'bukus' => Buku::all()
        ];
        if ($request!=null) {
            $titleSearch = $request->input('search');
            $data['bukus'] = Buku::query()->where('title','LIKE',"%{$titleSearch}%")->get();
        }
        return view('pages.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.adminaddBuku', [
            'genres' => Genre::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cover = $request->file('cover');

        // new Buku to store request
        $inputBuku = new Buku;

        $inputBuku->title = $request->input('title');
        $inputBuku->author = $request->input('author');
        $inputBuku->synopsis = $request->input('synopsis');
        $inputBuku->genre_id = $request->input('genre_id');
        $inputBuku->price = $request->input('price');
        $inputBuku->cover = 'defaultimg.jpg';
        if ($cover!=null) {
            $inputBuku->cover = $cover->getClientOriginalName();
            $tujuan_upload = 'assets/img/';
            $cover->move($tujuan_upload, $cover->getClientOriginalName());
        }

        $inputBuku->save();
        return redirect('/admin')->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (Session::has('user_id')) {
            $data = [
                'bukus' => Buku::where('id', $id)->first()
            ];
            return view('/katalog', $data);
        }
        return redirect('/login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = [
            'bukus' => buku::where('id', $id)->first(),
            'genres' => genre::all()
        ];
        return view('pages.admineditBuku', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        if ($request->file('cover') != null) {
            $cover = $request->file('cover');
            $namaCover = $cover->getClientOriginalName();
            $tujuan_upload = 'img/';
            $cover->move($tujuan_upload, $cover->getClientOriginalName());
        } else {
            $namaCover = $request->input('old-cover');
        }

        $data = [
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'synopsis' => $request->input('synopsis'),
            'cover' => $namaCover,
            'genre_id' => $request->input('genre_id'),
            'price' => $request->input('price'),
        ];
        Buku::where('id', $id)->update($data);
        return redirect('/admin')->with('success', 'Buku berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Buku::destroy($id);
        return redirect('/admin')->with('success', 'Buku berhasil dihapus');
    }

    public function detail($id)
    {
        if(Session::has('user_id')){
            $data = [
                'buku' => Buku::where('id', $id)->first()
            ]; 
            return view('pages.katalog',$data);
        }
        return redirect('/login');
    }
}
