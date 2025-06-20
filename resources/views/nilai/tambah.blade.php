@extends('template')

@section('content')
<div class="container mt-4">
    <h3>Tambah Data nilai</h3>
    <form action="/eas/store" method="post" class="form-horizontal">
        <!-- CSRF token untuk keamanan form -->
		{{ csrf_field() }}
        <div class="form-group has-success">
                <label class="control-label col-sm-2" for="nama">
                    id
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="number"
                           id="id"
                           placeholder="Masukan id"
                           name="id"
                           required="required">
                </div>
            </div>
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="nomorinduksiswa">
                    NRP
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="nomorinduksiswa"
                           placeholder="masukan nrp"
                           name="nomorinduksiswa"
                           required="required">
                </div>
            </div>
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="nilaiangka">
                    Nilai Angka
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="number"
                           id="nilaiangka"
                           placeholder="Masukan nilai angka"
                           name="nilaiangka"
                           required="required">
                </div>
            </div>
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="sks">
                    SKS
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="number"
                           id="sks"
                           placeholder="Masukan sks"
                           name="sks"
                           required="required">
                </div>
            </div>

		<input type="submit" value="Simpan Data">
</div>
@endsection
