<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (){
        //untuk menampilkan halaman utama
        return "ini adalah halaman index";
    }

    public function create (){
        //halaman untuk menambah data
        
    }

    public function store (Request $request){
        //proses menambah data
      
    }

    public function edit ($id){
        //hal ediy by id
        
    }

    public function update (Request $request,$id){
        //proses edit data by id
      
    }

    public function destroy (){
        //proses hapus data by id
       
    }


}
?>