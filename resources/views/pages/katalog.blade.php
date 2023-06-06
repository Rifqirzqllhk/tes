@extends('layouts.app')

{{-- set title --}}
@section('title', 'DeLibrary')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="https://milenialis.id/wp-content/uploads/2020/05/download-1.jpg" width="400" height="500">
            </div>
            <div class="col">
                <h2><br><br>Naruto | Action</h2>
                <h4>$ 28000</h4>
                <hr width="80%" />
                <b style="font-size: large;">Synopsis</b>
                <p style="font-family:'Times New Roman'; font-size: 17px;">Naruto (ナルト) adalah sebuah serial manga karya Masashi Kishimoto yang diadaptasi menjadi serial anime. Manga Naruto bercerita seputar kehidupan tokoh utamanya, Naruto Uzumaki, seorang ninja yang hiperaktif, periang, dan ambisius yang ingin mewujudkan keinginannya untuk mendapatkan gelar Hokage, pemimpin dan ninja terkuat di desanya. Serial ini didasarkan pada komik one-shot oleh Kishimoto yang diterbitkan dalam edisi Akamaru Jump pada Agustus 1997.</p>
            </div>
            <div class="col">
                <br><br>
                <h1>Booking Comic</h1>
                <label for="text" class="form-label" Style="font-size: 19px; font-style: Segoe ui ; padding: 1rem;">Quantity</label>
                <input type="" id="text" class="form-control" style="width:371px">
                <div class="form-text">
                </div>
                <div class="form-question mb-2">
                    <div class="form-question__title">
                        <span style="font-size: 19px">Borrow Date</span>
                    </div>
                    <div class="input-container">
                        <input id="effective-date" type="date" name="effective-date" minlength="1" maxlength="64" placeholder=" " autocomplete="nope" required="required"></input>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="form-question ">
                    <div class="form-question__title">
                        <span style="font-size: 19px">Return Date</span>
                    </div>
                    <div class="input-container">
                        <input id="effective-date" type="date" name="effective-date" minlength="1" maxlength="64" placeholder=" " autocomplete="nope" required="required"></input>
                        <span class="bar"></span>
                    </div>
                </div>
                </select>
                <button type="button" class="btn btn-primary" style="text-align: center;">Submit</button>
            </div>
        </div>
    </div>
</section>

@endsection

@push('after-style')

@endpush