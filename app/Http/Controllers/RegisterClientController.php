<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Tb_client;

class RegisterClientController extends Controller
{
	public function add()
	{
		$title = 'Registrasi Client';

		return view('register_client', compact('title'));
	}
    public function postregister(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'username' => 'required',
    		'password' => 'required',
    		'nama_resto' => 'required',
    		'path_url' => 'required',
    		'max_file' => 'required'
    	]);

    		$clients['name'] = $request->name;
    		$clients['username'] = $request->username;
    		$clients['email'] = $request->email;
    		$clients['password'] = bcrypt($request->password);
    		$clients['created_at'] = date('Y-m-d H:i:s');
    		$clients['updated_at'] = date('Y-m-d H:i:s');

    		$tb_client['nama_resto'] = $request->nama_resto;
    		$tb_client['path_url'] = $request->path_url;
    		$tb_client['max_file'] = $request->max_file;

    		Client::insert($clients);
    		Tb_client::insert($tb_client);

    		return redirect('/');

    }

    public function list_client()
    {
        $title = 'List Clients Terdaftar';
        $clients = Client::orderBy('id', 'asc')->get();

        return view('cms.client.index', compact('title', 'clients'));
    }
}
