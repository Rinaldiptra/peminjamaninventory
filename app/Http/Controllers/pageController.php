<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ruang;
use App\jenis;
use App\inventaris;
use App\detail_pinjam;
use App\peminjaman;
class pageController extends Controller
{
     public function ruang()
    {
    	$data = ruang::all();
    	return view ('ruang/index',['dataruang'=>$data]);
    }
     public function jenis()
    {
    	$data = jenis::all();
    	return view ('jenis/index',['datajenis'=>$data]);
    }
     public function inventaris()
    {
    	$data = inventaris::all();
    	return view ('inventaris/index',['datainventaris'=>$data]);
    }
   
    public function peminjaman()
    {
    	$data =peminjaman::all();
    	return view ('peminjaman/index',['datapeminjaman'=>$data]);
    }
}
