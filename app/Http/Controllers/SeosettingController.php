<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seo_setting;

class SeosettingController extends Controller
{
    public function index()
    {
    	$title = 'List Seo Setting';

    	$seo_settings = Seo_setting::orderBy('id', 'asc')->get();

    	return view('cms.seo_setting.index', compact('title', 'seo_settings'));
    }

    public function edit($id)
    {
        $id_user = auth()->id();
    	$title = 'Update Seo Setting';
        $get_data = Seo_setting::where('users',$id_user)->first();

        if(count((array) $get_data) > 0)
        {
            $seo_setting = $get_data;
        }else{
            $seo_setting = (object) array(
                'id' => '',
                'meta_title' => '',
                'meta_description' => '',
                'sosmed_setting' => '',
                'google_map' => '',
                'favicon' => '',
                'logo' => '',
            );
        }
    	return view('cms.seo_setting.edit', compact('title', 'seo_setting'));
    }

    public function update(Request $request)
    {
        $message = [
            'required' => ':attribute harus diisi Jhon !!!',
            'max' => ':attribute harus diisi minimal :max karakter Jhon !!!',
            'min' => ':attribute harus diisi minimal :min karakter Jhon !!!',
        ];

        $this->validate($request,[
            'meta_title' => 'required',
            'meta_description' => 'required',
            'sosmed_setting' => 'required',
            'google_map' => 'required',
            'favicon' => 'required',
            'logo' => 'required',
        ],$message);
        // dd($request);
        if($request->id != null){
            $id = $request->id;
        	Seo_setting::where('id', $id)->update([
        		'meta_title' => $request->meta_title,
        		'meta_description' => $request->meta_description,
        		'sosmed_setting' => $request->sosmed_setting,
        		'google_map' => $request->google_map,
        		'favicon' => $request->favicon,
        		'logo' => $request->logo,
                'updated_at' => date('Y-m-d H:i:s')
        	]);
        }
        else{

            $seo_setting = new Seo_setting;
            $seo_setting->users = auth()->id();
            $seo_setting->meta_title = $request->meta_title;
            $seo_setting->meta_description = $request->meta_description;
            $seo_setting->sosmed_setting = $request->sosmed_setting;
            $seo_setting->google_map = $request->google_map;
            $seo_setting->favicon = $request->favicon;
            $seo_setting->logo = $request->logo;
            $seo_setting->created_at = date('Y-m-d H:i:s');
            $seo_setting->save();
        }

    	return redirect()->back();
    }
}
