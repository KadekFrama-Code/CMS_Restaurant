@extends('layouts.admin-stisla.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h2></h2>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>

                    <a href="{{ url('/cms/produk/create') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh"></i> Tambah Menu</a>
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
                    <th>Photo</th>
                    <th>Posisi</th>
                    <th>Label</th>
                    <th>URL</th>
                    <th>Tgl Upload</th>
                    <th>Tgl Update</th>
                    <th><center>Action</center></th>
                  </tr></thead>
                <tbody>
                @foreach($menus as $index=>$menu)
                <tr>
                  <td>{{ $index+1 }}</td>
                  <td>{{ $menu->nama }}</td>
                  <td>{{ $menu->deskripsi }}</td>
                  <td>
                    <img src="{{ asset($menu->photo) }} " style="width: 80px;">
                  </td>
                  <td>{{ $menu->gambar_posisi }}</td>
                  <td>{{ $menu->gambar_label }}</td>
                  <td>{{ $menu->gambar_url }}</td>
                  <td>{{ $menu->created_at }}</td>
                  <td>{{ $menu->updated_at }}</td>
                  <td>
                    <center>
                      <div style="width:100px">
                        <a href="#" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fas fa-pencil-alt"></i></a>

                        <button href="#" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fas fa-trash"></i></button>
                      </div>
                    </center>
                    
                  </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <th>
                  <p>TEST123</p>
                </th>
              </tfoot>
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