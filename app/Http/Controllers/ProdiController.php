<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;
use App\Siswa;
use App\Fakultas;
class ProdiController extends Controller
{

	  //
    public function prodi(){
      $prodi = Prodi::all();
      $siswa = Siswa::all();
      $fakultas = Fakultas::all();
      return view('prodi',compact('fakultas','prodi','siswa'));
    }

     public function index(){
    	$prodi=Prodi::all();
    	$data=['prodi'=>$prodi];
    	return $data;
    }

    	public function create(Request $request){
    	$prodi=new Prodi();
        $prodi->nama_prodi=$request->nama_prodi;
        $prodi->jenjang=$request->jenjang;
        $prodi->prodi_id=$request->prodi_id;
        $prodi->fakultas_id=$request->fakultas_id;
    	$prodi->save();

    	return "data tersimpan";

        $validatedData = $request->validate([
        'nama_prodi' => 'required|max:20',
        'jenjang' => 'required|max:20',
        'prodi_id' => 'required|max:10',
        
    ]);

    }

    public function update(Request $request, $id){
    	$prodi=Prodi::find($id);
    	$prodi->nama_prodi=$request->nama_prodi;
        $prodi->jenjang=$request->jenjang;
        $prodi->prodi_id=$request->prodi_id;
        $prodi->fakultas_id=$request->fakultas_id;
    	$prodi->save();

    	return "data update";
        
        $validatedData = $request->validate([
        'nama_prodi' => 'required|max:20',
        'jenjang' => 'required|max:20',
        'prodi_id' => 'required|max:10',
        
    ]);
    }

     public function delete($id){
    	$prodi=Prodi::find($id);
    	$prodi->delete();

    	return "data hapus";
    }

    public function detail($id){
    	$prodi=Prodi::find($id);
    	
    	return $prodi;
    }
}
