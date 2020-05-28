<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

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
		//---------------------------------------------------------------
		// $judul = $request->input('Judul');
        // $nama=$request->input('Nama');
		// $target = $request->input('Target');
		// $harga = $request->input('Harga');
		// $file = $request->file('file');
		// $tujuan_upload = 'img/gambar';
		// $file->move($tujuan_upload,$file->getClientOriginalName());
        // $data=array('Nama'=>$nama,'Judul'=>$judul,"Target"=>$target,"Harga"=>$harga);
        // DB::table('buku')->insert($data);
		// return redirect('/project/perpustakaan');
		//-----------------------------------------------------------------
		// $file = $request->file('file');
		
		// $extension=$file->getClientOriginalExtension();
		// $nama_file = time()."_". $extension;
			
		// $tujuan_upload = 'img/gambar';
		// $file->move($tujuan_upload,$nama_file);

		// Post::create([
		// 	'Nama' => $request->Nama,
		// 	'Judul' => $request->Judul,
		// 	'Target' => $request->Target,
		// 	'Harga' => $request->Harga,
		// 	'file' => $nama_file,
		// ]);

		// return redirect()->back();
    }
}