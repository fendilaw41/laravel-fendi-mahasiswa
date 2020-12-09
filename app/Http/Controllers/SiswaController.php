<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Prodi;
class SiswaController extends Controller
{
    //
    public function siswa(){
      $prodi = Prodi::all();
      $siswa = Siswa::all();
      return view('siswa',compact('prodi','siswa'));
    }


    public function index(){
    	$siswa=Siswa::all();
    	$data=['siswa'=>$siswa];
    	return $data;
    }

    public function create(Request $request){
    	$siswa=new Siswa();
        $siswa->nama_siswa=$request->nama_siswa;
        $siswa->jenis_kelamin=$request->jenis_kelamin;
    	$siswa->prodi_id=$request->prodi_id;
       
    	$siswa->save();

    	return "data tersimpan";

    }

    public function update(Request $request, $id){
    	$siswa=Siswa::find($id);
        $siswa->nama_siswa=$request->nama_siswa;
        $siswa->jenis_kelamin=$request->jenis_kelamin;
        $siswa->prodi_id=$request->prodi_id;
       
    	$siswa->save();

    	return "data update";
    }

     public function delete($id){
    	$siswa=Siswa::find($id);
    	$siswa->delete();

    	return "data hapus";
    }

    public function detail($id){
    	$siswa=Siswa::find($id);
    	
    	return $siswa;
    }
}
