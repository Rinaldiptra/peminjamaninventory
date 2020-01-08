<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inventaris;
class inventarisController extends Controller
{

     public function create()
   {
    	return view('inventaris.create');
    }
    public function store(Request $request)
    {
    	$id_inventaris = $request->id_jenis;
    	$nama= $request->nama;
    	$kondisi = $request->kondisi;
    	$keterangan= $request->keterangan;
    	$jumlah= $request->jumlah;
    	$id_jenis= $request->id_jenis;
    	$tanggal_registrasi= $request->tanggal_registrasi;
    	$id_ruang= $request->id_ruang;
    	$kode_inventaris= $request->kode_inventaris;
    	$id_petugas= $request->id_petugas;
    	
    	inventaris::create([
    		'id_inventaris'=>$id_inventaris,
    		'nama'=>$nama,
    		'kondisi'=>$kondisi,
    		'keterangan'=>$keterangan,
    		'jumlah'=>$jumlah,
    		'id_jenis'=>$id_jenis,
    		'tanggal_registrasi'=>$tanggal_registrasi,
    		'id_ruang'=>$id_ruang,
    		'kode_inventaris'=>$kode_inventaris,
    		'id_petugas'=>$id_petugas,
    	]);
    	return redirect('/inventaris');  	
    }
     public function delete($id)
    {
        $inv = inventaris::where('id',$id);
        $inv->delete();

        return redirect('/inventaris');
    }
     public function edit($id)
    {
    	$inv = inventaris::all();
        $data = inventaris::where('id',$id)->first();
        return view('inventaris/edit',['datainventaris'=>$data],['datainventaris'=>$data]);
    }


     public function update(Request $request,$id)
    {
        $data= inventaris::where('id',$id);
        $id_inventaris=$request->id_inventaris;
        $nama=$request->nama;
        $kondisi=$request->kondisi;
        $keterangan=$request->keterangan;
        $jumlah=$request->jumlah;
        $id_jenis=$request->id_jenis;
        $tanggal_registrasi=$request->tanggal_registrasi;
        $id_ruang=$request->id_ruang;
        $kode_inventaris=$request->kode_inventaris;
        $id_petugas=$request->id_petugas;

        
        
        $inv->update([
            'id_inventaris' => $id_inventaris,
            'nama' => $nama,
            'kondisi' => $kondisi,
            'keterangan' => $keterangan,
            'jumlah' => $jumlah,
            'id_jenis' => $id_jenis,
            'tanggal_registrasi' => $tanggal_registrasi,
            'id_ruang' => $id_ruang,
            'kode_inventaris' => $kode_inventaris,
            'id_petugas' => $id_petugas,
           
        ]);
        return redirect('/inventaris');
    }
}

