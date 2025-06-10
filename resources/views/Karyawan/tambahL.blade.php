@extends('template')
@section('content')

	<h3>Data Laptop</h3>

	<a href="/laptop" class="btn btn-info"> Kembali</a>
	<br/>
	<br/>

	<form action="/laptop/store" method="post" class="form-horizontal">
        <!-- CSRF token untuk keamanan form -->
		{{ csrf_field() }}
        <div class="form-group has-success">
                <label class="control-label col-sm-2" for="merklaptop">
                    Merk Laptop
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="merklaptop"
                           placeholder="Masukan merk laptop"
                           name="merklaptop"
                           required="required">
                </div>
            </div>
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="hargalaptop">
                    Harga Laptop
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="number"
                           id="hargalaptop"
                           placeholder="Masukan harga laptop"
                           name="hargalaptop"
                           required="required">
                </div>
            </div>
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="tersedia">
                    Tersedia
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="boolean"
                           id="tersedia"
                           placeholder="Masukan status ketersediaan"
                           name="tersedia"
                           required="required">
                </div>
            </div>
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="berat">
                    Berat Laptop
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="float"
                           id="berat"
                           placeholder="Masukan berat laptop"
                           name="berat"
                           required="required">
                </div>
            </div>
		<input type="submit" value="Simpan Data">
	</form>
{{-- Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/> --}}
    @endsection
