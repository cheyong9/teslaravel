<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


use Illuminate\Http\Request;

class barangController extends Controller
{
    //
    public function index(){
        $barangs = DB::table('barangs')->get();
            $namabarang=array();$idbarang=array();
            foreach ($barangs as $barang) {
                array_push($namabarang,$barang->nama);
                array_push($idbarang,$barang->id);
                // echo $barang->nama;
            }

            return View('barang')->with('namabarang',$namabarang)
            ->with('idbarang',$idbarang);
        
    }
}
