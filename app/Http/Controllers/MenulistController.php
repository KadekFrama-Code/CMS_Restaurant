<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu_list;

class MenulistController extends Controller
{
    public function index()
    {
    	$title = 'List Menu';
    	$menus = Menu_list::where('users', \Auth::user()->id)->get();

    	return view('cms.menu.menu_list', compact('title', 'menus'));
    }

    public function index2()
    {
    	$title = 'Swiper Slide';
    	$menulist = Menu_list::orderBy('id','asc')->get();

    	return view('swiper-slide', compact('menulist', 'title'));
    }

    public function create()
    {
    	$title = 'Tambah Data Menu';
        $cek = Menu_list::where('users', \Auth::user()->id)->count();

    	return view('cms.menu.create', compact('title','cek'));
    }

    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute harus diisi Jhon !!!',
            'max' => ':attribute harus diisi minimal :max karakter Jhon !!!',
            'min' => ':attribute harus diisi minimal :min karakter Jhon !!!',
        ];

        $this->validate($request,[
            'gambar_url' => 'required',
            'gambar_label' => 'required',
        ],$message);

    	$file = $request->file('gambar_url');
        if($file){
            $nama_file = $file->getClientOriginalName();
            $file->move('image', $nama_file);
            $gambar_url = 'image/'.$nama_file;
        }else{
            $gambar_url = null;
        }

        $menu = new Menu_list;
        $menu->users = auth()->id();
    	// $menu->gambar_posisi = $request->gambar_posisi;
        $menu->gambar_url = $gambar_url;
    	$menu->gambar_label = $request->gambar_label;
    	$menu->created_at = date('Y-m-d H:i:s');
        $menu->save();

        return redirect('/cms/produk');
    }
}