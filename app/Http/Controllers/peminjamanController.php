<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peminjaman;
class peminjamanController extends Controller
{
    
    public function create()
    {
         return view('peminjaman.create');
     }
     public function store(Request $request)
     {
         $id_peminjaman = $request->id_peminjaman;
         $tanggal_pinjam= $request->tanggal_pinjam;
         $tanggal_kembali = $request->tanggal_kembali;
         $status_peminjaman = $request->status_peminjaman;
         $id_petugas = $request->id_petugas;
         peminjaman::create([
             'id_peminjaman'=>$id_peminjaman,
             'tanggal_pinjam'=>$tanggal_pinjam,
             'tanggal_kembali'=>$tanggal_kembali,
             'status_peminjaman'=>$status_peminjaman,
             'id_petugas'=>$id_petugas,

             
         ]);
         return redirect('/peminjaman');  	
     }
      public function delete($id)
     {
         $peminjam= peminjaman::where('id',$id);
         $peminjam->delete();
 
         return redirect('/peminjaman');
     }
      public function edit($id)
     {
         $peminjam = peminjaman::all();
         $data = peminjaman::where('id',$id)->first();
         return view('peminjaman/edit',['datapeminjaman'=>$data],['datapeminjaman'=>$data]);
     }
 
 
      public function update(Request $request,$id)
     {
         $data= peminjaman::where('id',$id);
         $id_peminjaman=$request->id_peminjaman;
         $tanggal_pinjam=$request->tanggal_pinjam;
         $tanggal_kembali=$request->tanggal_kembali;
         $status_peminjaman=$request->status_peminjaman;
         $id_petugas=$request->id_petugas;
         
         
         $data->update([
             'id_peminjaman' => $id_peminjaman,
             'tanggal_pinjam' => $tanggal_pinjam,
             'tanggal_kembali' => $tanggal_kembali,
             'status_peminjaman' => $status_peminjaman,
             'id_petugas' => $id_petugas,
         ]);
         return redirect('/peminjaman');
     }
}
