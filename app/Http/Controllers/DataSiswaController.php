<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function dataSiswa(){
        $nama = "Dimas";
        return $nama;
    }
    public function dataSiswi(){
        $nama = "Risma";
        return $nama;
    }
 public function nama($nama = "belum diisi"){
     return "nama anda adalah " .$nama;
 }
}
