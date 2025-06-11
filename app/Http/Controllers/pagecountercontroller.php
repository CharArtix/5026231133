<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pagecountercontroller extends Controller
{
    public function indexPC()
    {
        // 1) Tambah 1 ke field Jumlah pada baris ID=1
        DB::table('pagecounter')->where('ID', 1)->increment('Jumlah');

        // 2) Ambil nilai terbaru
        $pagecounter = DB::table('pagecounter')->where('ID', 1)->first();

        // 3) Tampilkan ke view
        return view('indexPC', ['pagecounter' => $pagecounter]);
    }
}
