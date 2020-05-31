<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;
use App\konfirmasi;

class BlogController extends Controller
{

	public function about()
	{
		return view('about');
	}

	public function disclaimer()
	{
		return view('disclaimer');
	}

	public function ContactUs()
	{
		return view('ContactUs');
	}

	public function privacy()
	{
		return view('privacy');
	}

	public function register()
	{
		return view('register');
	}

	public function login()
	{
		return view('login');
	}

	public function profile()
	{
		$isi = DB::table("post")->where("idUser","=",auth()->user()->id)->orderBy("created_at","desc")->get();
		
		return view('profile', ['isi' => $isi]);
	}

	public function konfirmasi(Request $request)
	{
		$search = $request->get('search');
		$isi = DB::table('post')->where('id', '=', $search);
		$isi = $isi->get();
		return view('konfirmasi', ['isi' => $isi]);
	}

	public function gambarkonfirmasi(Request $request, $id)
	{
		if ($request->hasfile('file')) {
			$gambar = $request->file('file');
			$extension = $gambar->getClientOriginalExtension();
			$filename = time() . '.' . $extension;
			$gambar->move('img/konfirmasi', $filename);
			$filenameext = $filename;
		} else {
			return $request;
			$filenameext = '';
		}
		DB::table('pembeli')
			->where('id', $id)
			->update(['gambar' => $filenameext]);
		return redirect('home');
	}

	public function pembayaran(Request $request)
	{
		$search = $request->get('search');
		$isi = DB::table('post')->where('id', '=', $search);
		$isi = $isi->get();
		return view('pembayaran', ['isi' => $isi]);
	}

	public function post($id)
	{
		$user = User::find($id);
		return view('post', compact('user'));
	}

	public function edit($id)
	{
		$user = User::find($id);

		return view('edit', compact('user'));
	}

	public function update(Request $data, $id)
	{
		$user = User::find($id);
		$user->name = $data->input('name');
		$user->email = $data->input('email');
		$user->nohp = $data->input('Nomorhp');
		$user->motto = $data->input('Motto');

		if ($data->hasfile('file')) {
			$gambar = $data->file('file');
			$extension = $gambar->getClientOriginalExtension();
			$filename = time() . '.' . $extension;
			$gambar->move('img/avatar', $filename);
		} else {
			$filename = '';
		}
		$user->file = $filename;
		$user->save();
		return redirect()->route('blog.profile');
	}

	public function insert(Request $request)
	{
		$post = new Post();
		$pengguna = auth()->user();
		$namanya = ($pengguna->name);
		$post->Nama = $namanya;
		$post->Judul = $request->input('Judul');
		$post->Target = $request->input('Target');
		$post->Harga = $request->input('Harga');
		$post->idUser = $pengguna->id;

		if ($request->hasfile('file')) {
			$gambar = $request->file('file');
			$extension = $gambar->getClientOriginalExtension();
			$filename = time() . '.' . $extension;
			$gambar->move('img/gambar', $filename);
			$post->file = $filename;
		} else {
			return $request;
			$post->file = '';
		}

		$post->save();
		return redirect('home')->with('post', $post);
	}

	public function barang(Request $request)
	{
		$user = auth()->user();
		$pembeli = ($user->name);
		$gambar = ($request->post('file'));
		$dibeli = $request->get('dibeli');
		$alamat = $request->get('alamat');
		$hp = $request->get('hp');
		$search = $request->get('search');
		$isi = DB::table('post')->where('id', '=', $search);
		$isi = $isi->get();
		$dataform = array('idUser' => $user->id, 'idBarang' => $search, 'pembeli' => $pembeli, 'dibeli' => $dibeli, 'gambar' => $gambar, 'alamat' => $alamat, 'no_hp' => $hp);
		$id = DB::table('pembeli')->insertGetId($dataform);
		return view('konfirmasi', ['isi' => $isi, 'id' => $id]);
	}

	public function pembeli(Request $request)
	{
		$search = $request->get('search');
		$isi = DB::table('pembeli')->where('idBarang', '=', $search);
		$isi = $isi->get();
		return view('pembeli', ['isi' => $isi]);
	}

	public function cari(Request $request)
	{
		$cari = $request->get('cari');
		$isi = DB::table('post')->where('Judul', 'like', '%' . $cari . '%');
		$isi = $isi->get();
		return view('home', ['isi' => $isi]);
	}
}