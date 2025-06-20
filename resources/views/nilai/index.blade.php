@extends('template')
@section('content')
    <h3>Data nilai</h3>
    <br>
    <br>
    <a href="eas/tambah" class="btn btn-primary"> + Tambah nilai Baru</a>

    <table class="table table-sriped">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilai as $n)
            <tr>
                <td>{{ $n->id }}</td>
                <td>{{ $n->nomorinduksiswa }}</td>
                <td>{{ $n->nilaiangka }}</td>
                <td>{{ $n->sks }}</td>
                <td>@if($n->nilaiangka <= 40)
                        D
                    @elseif($n->nilaiangka >= 41 && $n->nilaiangka <= 60)
                        C
                    @elseif($n->nilaiangka >= 61 && $n->nilaiangka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>
                <td>{{
                    $n->nilaiangka * $n->sks
                    }}</td>
            </tr>
        @endforeach
    </table>
    {{ $nilai->links() }}
@endsection
