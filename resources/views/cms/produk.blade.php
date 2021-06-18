@extends('layouts.admin.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h2>{{ $title }}</h2>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>

                    <a href="{{ url('/cms/produk/create') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh"></i> Tambah Produk</a>
                </p>
            </div>
            <div class="box-body">
            	<div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="example1">
                <span style="color: red;"><small></small></span>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Tanggal Upload</th>
                    <th><center>Action</center></th>
                  </tr></thead>
                <tbody>
                @foreach($prd as $index=>$produk)
                <tr>
                  <td>{{ $index+1 }}</td>
                  <td>{{ $produk->nama }}</td>
                  <td>{{ $produk->deskripsi }}</td>
                  <td>{{ $produk->photo }}</td>
                  <td>{{ $produk->created_at }}</td>
                  <td>
                    <center>
                      <div style="width:60px">
                        <a href="#" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>

                        <button href="#" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></button>
                      </div>
                    </center>
                    
                   </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            </div>
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