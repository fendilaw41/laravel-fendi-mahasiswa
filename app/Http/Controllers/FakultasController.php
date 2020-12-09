<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fakultas;

class FakultasController extends Controller
{


public function fakultas(){
      $fakultas = Fakultas::all();
    
      return view('fakultas',compact('fakultas'));
    }

    public function index(){
    	$fakultas=Fakultas::all();
    	$data=['fakultas'=>$fakultas];
    	return $data;
    }

    public function create(Request $request){
    	$fakultas=new Fakultas();
    	$fakultas->nama_fak=$request->nama_fak;
    	$fakultas->jml_sks=$request->jml_sks;
    	$fakultas->jml_semester=$request->jml_semester;
    	$fakultas->save();

    	return "data tersimpan";

    	 $validatedData = $request->validate([
        'nama_fak' => 'required|max:20',
        'jml_sks' => 'required|max:3',
        'jml_semester' => 'required|max:4',
        
    ]);

    }

    public function update(Request $request, $id){
    	$fakultas=Fakultas::find($id);
    	$fakultas->nama_fak=$request->nama_fak;
    	$fakultas->jml_sks=$request->jml_sks;
    	$fakultas->jml_semester=$request->jml_semester;
    	$fakultas->save();

    	return "data update";

    	 $validatedData = $request->validate([
        'nama_fak' => 'required|max:20',
        'jml_sks' => 'required|max:3',
        'jml_semester' => 'required|max:4',
        
    ]);
    	 
    }

     public function delete($id){
    	$fakultas=Fakultas::find($id);
    	$fakultas->delete();

    	return "data hapus";
    }

    public function detail($id){
    	$fakultas=Fakultas::find($id);
    	
    	return $fakultas;
    }
}
