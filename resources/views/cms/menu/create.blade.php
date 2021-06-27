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
              @if($cek < 4)
                <form role="form" method="post" action="{{ url('/cms/produk/add') }}" enctype="multipart/form-data">
                    @csrf
                  <div class="box-body">



                    <div class="form-group">
                      <label for="exampleInputPassword1">Gambar Menu</label>
                      <input type="file" class="form-control" name="gambar_url" id="exampleInputfile" autocomplete="off">
                      @error('gambar_url')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
<!-- 
                    <div class="form-group">
                      <label for="exampleInputEmail1">Gambar Posisi</label>
                      <input type="text" name="gambar_posisi" class="form-control" id="exampleInputEmail1" placeholder="Posisi Gambar">
                    </div> -->

                    <div class="form-group">
                      <label for="exampleInputEmail1">Gambar Label</label>
                      <select name="gambar_label" class="form-control" id="exampleInputEmail1">
                        <option value="">Pilih</option>
                        <option value="desktop">Desktop</option>
                        <option value="mobile">Mobile</option>
                      </select>
                      @error('gambar_label')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            @else
            <h1>Maaf, kuota habis !!!</h1>
            @endif
               
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