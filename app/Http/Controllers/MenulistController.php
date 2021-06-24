<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu_list;

class MenulistController extends Controller
{
    public function index()
    {
    	$title = 'List Menu';
    	$menus = Menu_list::orderBy('id', 'asc')->get();

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
    	return view('cms.menu.create', compact('title'));
    }

    public function store(Request $request)
    {

    	$file = $request->file('photo');
        if($file){
            $nama_file = $file->getClientOriginalName();
            $file->move('image', $nama_file);
            $photo = 'image/'.$nama_file;
        }else{
            $photo = null;
        }

        $menu = new Menu_list;
    	$menu->nama = $request->nama;
    	$menu->deskripsi = $request->deskripsi;
    	$menu->gambar_posisi = $request->gambar_posisi;
    	$menu->gambar_label = $request->gambar_label;
    	$menu->gambar_url = $request->gambar_url;
    	$menu->photo = $photo;
    	$menu->created_at = date('Y-m-d H:i:s');
        $menu->save();

        return redirect()->back();
    }
}
