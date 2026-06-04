<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TelevisiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table televisi
    	//$televisi = DB::table('televisi')->get();
        $televisi = DB::table('televisi')->paginate(10);
    	// mengirim data televisi ke view index
    	return view('index1',['televisi' => $televisi]);

    }
    	public function tambah()
	{

		// memanggil view tambah
		return view('tambah1');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table televisi
		DB::table('televisi')->insert([
			'merktelevisi' => $request->merk,
			'stocktelevisi' => $request->stock,
			'tersedia' => $request->has('tersedia') ? 'Y' : 'N'
		]);
		// alihkan halaman ke halaman televisi
		return redirect('/televisi');
	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data televisi berdasarkan id yang dipilih
		$televisi = DB::table('televisi')->where('kodetelevisi',$id)->get();
		// passing data televisi yang didapat ke view edit.blade.php
		return view('edit1',['televisi' => $televisi]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data televisi
		DB::table('televisi')->where('kodetelevisi',$request->id)->update([
			'merktelevisi' => $request->merk,
			'stocktelevisi' => $request->stock,
			'tersedia' => $request->has('tersedia') ? 'Y' : 'N'
		]);
		// alihkan halaman ke halaman televisi
		return redirect('/televisi');
	}

	// method untuk hapus data televisi
	public function hapus($id)
	{
		// menghapus data televisi berdasarkan id yang dipilih
		DB::table('televisi')->where('kodetelevisi',$id)->delete();

		// alihkan halaman ke halaman televisi
		return redirect('/televisi');
	}
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table televisi sesuai pencarian data
		$televisi = DB::table('televisi')
		->where('merktelevisi','like',"%".$cari."%")
		->paginate();

    		// mengirim data televisi ke view index
		return view('index1',['televisi' => $televisi]);

	}
}
