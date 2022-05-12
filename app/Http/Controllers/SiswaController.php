<?php


namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;


class SiswaController extends Controller
{
	function edit(Siswa $siswa)
{
	// mengambil data siswa berdasarkan id yang dipilih
	// $siswa = DB::table('siswa')->where('siswa_id',$id)->get();
	// passing data siswa yang didapat ke view edit.blade.php
	return view('edit',['siswa' => $siswa]);
 
}

public function update(Request $request)
{
	// update data pegawai
	DB::table('siswas')->where('id',$request->id)->update([
		'nama' => $request->nama,
		'tanggal_lahir' => $request->tanggal_lahir,
		'alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/');
}

public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('siswas')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/');
}

public function create()
{
	// mengambil data siswa berdasarkan id yang dipilih
	// $siswa = DB::table('siswa')->where('siswa_id',$id)->get();
	// passing data siswa yang didapat ke view edit.blade.php
	return view('tambah');
 
}

public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('siswas')->insert([
		'nama' => $request->nama,
		'tanggal_lahir' => $request->tanggal_lahir,
		'alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/');
 
}
}		