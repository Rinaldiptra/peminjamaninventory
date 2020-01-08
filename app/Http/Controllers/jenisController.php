<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenis;
class jenisController extends Controller
{
     public function create()
   {
    	return view('jenis.create');
    }
    public function store(Request $request)
    {
    	$id_jenis = $request->id_jenis;
    	$nama_jenis= $request->nama_jenis;
    	$keterangan = $request->keterangan;
    	
    	jenis::create([
    		'id_jenis'=>$id_jenis,
    		'nama_jenis'=>$nama_jenis,
    		'keterangan'=>$keterangan,
    		
    	]);
    	return redirect('/jenis');  	
    }
     public function delete($id)
    {
        $jenis = jenis::where('id',$id);
        $jenis->delete();

        return redirect('/jenis');
    }
     public function edit($id)
    {
    	$jenis = jenis::all();
        $data = jenis::where('id',$id)->first();
        return view('jenis/edit',['datajenis'=>$data],['datajenis'=>$data]);
    }


     public function update(Request $request,$id)
    {
        $data= jenis::where('id',$id);
        $id_jenis=$request->id_jenis;
        $nama_jenis=$request->nama_jenis;
        $keterangan=$request->keterang;
        
        
        $jenis->update([
            'id_jenis' => $id_jenis,
            'nama_jenis' => $nama_jenis,
            'keterangan' => $keterangan,
           
        ]);
        return redirect('/jenis');
    }
}
