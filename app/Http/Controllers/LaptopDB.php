<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaptopDB extends Controller
{
    // Menampilkan daftar laptop
    public function indexL()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();
        $laptop = DB::table('laptop')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('laptop/indexL',['laptop' => $laptop]);

    }
    // Menampilkan form tambah laptop
    public function tambahL()
    {
    	// memanggil view tambah
    	return view('laptop/tambahL');
    }
    // Menyimpan data laptop baru
    public function storeL(Request $request)
    {
	// insert data ke table pegawai
	DB::table('laptop')->insert([
		'merklaptop' => $request->merklaptop ,
		'hargalaptop' => $request->hargalaptop,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/laptop');
    }
    // Menampilkan form edit laptop
    public function editL($id)
    {
    	// mengambil data pegawai berdasarkan id yang dipilih
    	$laptop = DB::table('laptop')->where('id',$id)->get();

    	// passing data pegawai yang didapat ke view edit
    	return view('laptop/editL',['laptop' => $laptop]);
    }
    // Memperbarui data laptop
    public function updateL(Request $request)
    {
    // update data laptop
    DB::table('laptop')->where('id', $request->id)->update([
        'merklaptop' => $request->merklaptop,
        'hargalaptop' => $request->hargalaptop,
        'tersedia' => $request->tersedia,
        'berat' => $request->berat
    ]);
    // alihkan halaman ke halaman laptop
    return redirect('/laptop');
    }
    // Menghapus data laptop
    public function hapusL($id)
    {
    // menghapus data laptop berdasarkan id yang dipilih
    DB::table('laptop')->where('id', $id)->delete();

    // alihkan halaman ke halaman laptop
    return redirect('/laptop');
    }
    // Mencari data laptop berdasarkan merk
    public function cariL(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian
        $laptop = DB::table('laptop')
            ->where('merklaptop', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data laptop ke view index
        return view('laptop/indexL', ['laptop' => $laptop]);
    }
}
