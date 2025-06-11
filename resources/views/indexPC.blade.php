@extends('template')
@section('content')

    <h3>Page Counter</h3>

    <div class="alert alert-info">
            <p><strong>Jumlah Pengunjung:</strong> {{ $pagecounter->Jumlah}}</p>

@endsection
