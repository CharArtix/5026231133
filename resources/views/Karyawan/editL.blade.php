@extends('template')
@section('content')

	<h2>Edit Data Laptop</h2>

    <a href="/laptop" class="btn btn-info">Kembali</a>

    <br/>
    <br/>

   @foreach($laptop as $l)
    <form action="/laptop/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $l->ID}}"> <br/>
        Merk Laptop <input type="text" required="required" name="merklaptop" value="{{ $l->merklaptop }}"> <br/>
        Harga Laptop <input type="number" required="required" name="hargalaptop" value="{{ $l->hargalaptop }}"> <br/>
        Tersedia <input type="text" required="required" name="tersedia" value="{{ $l->tersedia }}"> <br/>
        Berat <input type="number" step="any" required="required" name="berat" value="{{ $l->berat }}"> <br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach



@endsection
