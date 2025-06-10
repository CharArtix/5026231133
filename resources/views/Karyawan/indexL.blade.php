@extends('template')
@section('content')
    <h3>Data Laptop</h3>
    <br>
    <br>
    <a href="/laptop/tambah" class="btn btn-primary"> + Tambah Produk</a>

    <p>Cari Laptop :</p>
	<form action="/laptop/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Laptop ..">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>
	<br/>

    <table class="table table-sriped">
        <tr>
            <th>Merk Laptop</th>
            <th>Harga</th>
            <th>Stok (0=tersedia, 1= tidak tersedia)</th>
            <th>Berat </th>
            <th>Atur</th>
        </tr>
        @foreach ($laptop as $l)
            <tr>
                <td>{{ $l->merklaptop }}</td>
                <td>{{ $l->hargalaptop }}</td>
                <td>{{ $l->tersedia }}</td>
                <td>{{ $l->berat }}</td>
                <td>
                    <a href="/laptop/edit/{{ $l->ID}}" class="btn btn-primary">Edit</a>
                    |
                    <a href="/laptop/hapus/{{ $l->ID}}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $laptop->links() }}
@endsection
