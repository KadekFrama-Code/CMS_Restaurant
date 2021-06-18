@extends('layouts.admin.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
                <form role="form" method="post" action="{{ url('/cms/produk/add') }}" enctype="multipart/form-data">
                    @csrf
                  <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Produk</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Produk ...">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Deskripsi</label>
                      <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail1" placeholder="Deskripsi">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Photo Produk</label>
                      <input type="file" class="form-control" name="photo" id="exampleInputfile" autocomplete="off">
                    </div>

              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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