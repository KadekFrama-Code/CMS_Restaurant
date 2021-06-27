@extends('layouts.admin-stisla.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">

            <form role="form" method="post" action="{{ url('/cms/seo-setting/'.auth()->id()) }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                  <div class="box-body">

                    <input type="hidden" name="id" value="{{ $seo_setting->id }}">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <input type="text" name="meta_title" class="form-control" id="exampleInputEmail1" value="{{ $seo_setting->meta_title }}">
                      @error('meta_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Deskripsi</label>
                      <input type="text" name="meta_description" class="form-control" id="exampleInputEmail1" value="{{ $seo_setting->meta_description }}">
                      @error('meta_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Sosmed Setting</label>
                      <input type="text" class="form-control" name="sosmed_setting" id="exampleInputPassword1" value="{{ $seo_setting->sosmed_setting }}">
                      @error('sosmed_setting')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Maps</label>
                      <input type="text" class="form-control" name="google_map" id="exampleInputPassword1" value="{{ $seo_setting->google_map }}" autocomplete="off2">
                      @error('google_map')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Favicon</label>
                      <input type="text" class="form-control" name="favicon" id="exampleInputPassword1" value="{{ $seo_setting->favicon }}" autocomplete="off2">
                      @error('favicon')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Logo</label>
                      <input type="text" class="form-control" name="logo" id="exampleInputPassword1" value="{{ $seo_setting->logo }}" autocomplete="off2">
                      @error('logo')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>

            
               
            </div>
        </div>
    </div>
</div>
 
@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection