<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Produk;

class ProdukController extends Controller
{
    public function index()
    {
    	$title = 'List Produk';
    	$prd = Produk::orderBy('id', 'asc')->get();

    	return view('cms.produk', compact('title', 'prd'));
    }

    public function index2()
    {
    	$new_produks = Produk::orderBy('id','asc')->get();

    	return view('swiper-slide', compact('new_produks'));
    }

    public function create()
    {
    	$title = 'Tambah data produk';
    	return view('cms.create', compact('title'));
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
            'nama' => 'required',
    		'deskripsi' => 'required'
    	]);

    	$file = $request->file('photo');
        if($file){
            $file->move('image', $file->getClientOriginalName());
            $produks['photo'] = 'image/'.$file->getClientOriginalName();
        }

    	$produks ['nama'] = $request->nama;
    	$produks['deskripsi'] = $request->deskripsi;
    	$produks['created_at'] = date('Y-m-d H:i:s');

        Produk::insert($produks);

        return redirect()->back();
    }
}
