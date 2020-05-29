<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;

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

	public function konfirmasi()
	{
		return view('konfirmasi');
	}

	public function pembayaran()
	{
		return view('pembayaran');
	}

	public function post()
	{
		return view('post');
	}

	public function edit()
	{
		return view('edit');
	}

	public function update(Request $request, User $user)
	{
		DB::table('users')->where('id',$request->id)
				->update([
					'name' => $request->name,
					'email' => $request->email,
					'Nomorhp' => $request->Nomorhp,
					'Motto' => $request->Motto
				]);
				
		return redirect('/edit')->with('status', 'Profile Berhasil di Update!');
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
		$search = $request->get('search');
		$isi = DB::table('post')->where('id', '=',$search);
        $isi = $isi->get();
        return view('home',['isi'=>$isi]);
	}
}