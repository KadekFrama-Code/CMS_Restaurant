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
    	$title = 'Update Seo Setting';
    	$seo_setting = Seo_setting::find($id);

    	return view('cms.seo_setting.edit', compact('title', 'seo_setting'));
    }

    public function update(Request $request, $id)
    {
    	Seo_setting::where('id', $id)->update([
    		'meta_title' => $request->meta_title,
    		'meta_description' => $request->meta_description,
    		'sosmed_setting' => $request->sosmed_setting,
    		'google_map' => $request->google_map,
    		'favicon' => $request->favicon,
    		'logo' => $request->logo
    	]);

    	return redirect()->back();
    }
}
