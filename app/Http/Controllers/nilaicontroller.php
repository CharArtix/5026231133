<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nilaicontroller extends Controller
{
    public function index()
    {
    	$nilai = DB::table('nilai')->paginate(10);
    	return view('nilai.index',['nilai' => $nilai]);
    }

    public function create()
    {
        return view('nilai.tambah');
    }

    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('nilai')->insert([
		'id' => $request->id,
		'nomorinduksiswa' => $request->nomorinduksiswa,
		'nilaiangka' => $request->nilaiangka,
		'sks' => $request->sks
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/eas');

    }


}
