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
		return view('profile');
	}

	public function konfirmasi(Request $request)
	{
		$search = $request->get('search');
		$isi = DB::table('post')->where('id', '=',$search);
		$isi = $isi->get();
		return view('konfirmasi',['isi'=>$isi]);
	}

	public function gambarkonfirmasi(Request $request)
	{
		$post= new konfirmasi();
		$post->id=$request->input('search');
		if($request->hasfile('file'))
		{
			$gambar=$request->file('file');
			$extension=$gambar->getClientOriginalExtension();
			$filename=time().'.'. $extension;
			$gambar->move('img/konfirmasi', $filename);
			$post->file=$filename;
		}else{
			return $request;
			$post->file='';
		}

		$post->save();
		return redirect('home')->with('post',$post);
	}

	public function pembayaran(Request $request)
	{
		$search = $request->get('search');
		$isi = DB::table('post')->where('id', '=',$search);
		$isi = $isi->get();
		return view('pembayaran',['isi'=>$isi]);
	}

	public function post()
	{
		return view('post');
	}

	public function edit($id)
	{
		$user=User::find($id);

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
		$post=new Post();
		$post->Nama=$request->input('Nama');
		$post->Judul=$request->input('Judul');
		$post->Target=$request->input('Target');
		$post->Harga=$request->input('Harga');

		if($request->hasfile('file'))
		{
			$gambar=$request->file('file');
			$extension=$gambar->getClientOriginalExtension();
			$filename=time().'.'. $extension;
			$gambar->move('img/gambar', $filename);
			$post->file=$filename;
		}else{
			return $request;
			$post->file='';
		}

		$post->save();
		return view('post')->with('post',$post);
	}
	
	public function barang(Request $request)
	{
		$user = auth()->user();
		$pembeli= ($user->name);
		$gambar= ($user->file);
		$dibeli = $request->get('dibeli');
		$alamat = $request->get('alamat');
		$hp = $request->get('hp');
		$search = $request->get('search');
		$isi = DB::table('post')->where('id', '=',$search);
		$isi = $isi->get();
		$dataform = array('idBarang' => $search, 'pembeli' => $pembeli,'dibeli' => $dibeli,'gambar' => $gambar,'alamat' =>$alamat, 'no_hp' =>$hp);
		DB::table('pembeli')->insert($dataform);
		return view('konfirmasi',['isi'=>$isi]);
	}

	public function pembeli(Request $request)
	{
		$search = $request->get('search');
		$isi = DB::table('pembeli')->where('idBarang', '=',$search);
		$isi = $isi->get();
		return view('pembeli',['isi'=>$isi]);
	}
}