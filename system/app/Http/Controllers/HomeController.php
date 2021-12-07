<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{


	function showBeranda(){
		return view('admin.beranda');
	}

	function showProduk(){
		return view('admin.produk.index');
	}

	function showProfile(){
		return view('admin.profil.index');
	}

	function showKategori(){
		return view('admin.kategori.index');
	}
}
