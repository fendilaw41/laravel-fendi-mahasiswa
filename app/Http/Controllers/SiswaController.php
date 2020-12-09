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
        
         $validatedData = $request->validate([
        'nama_siswa' => 'required|max:20',
        'jenis_kelamin' => 'required|max:10',
        'prodi_id' => 'required|max:10',
        
    ]);

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

         $validatedData = $request->validate([
        'nama_siswa' => 'required|max:20',
        'jenis_kelamin' => 'required|max:10',
        'prodi_id' => 'required|max:10',
        
    ]);
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
