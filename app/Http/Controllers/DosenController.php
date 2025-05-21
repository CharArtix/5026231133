<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DosenController extends Controller
{
    //
    public function helloworld()
    {
        return view('blog');
    }

     public function index(){
    	$nama = "Diki Alfarabi Hadi";
        $usia = 20;
        $alamat = "Jl. Raya No. 123";
        $pelajaran = ["Pemrograman Web","Basis Data","Jaringan Komputer"];
    	return view('biodata',['nama' => $nama, 'usia' => $usia, 'alamat' => $alamat, 'matkul' => $pelajaran]);
    }
}
