@extends('layouts.admin-stisla.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h2></h2>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
            	<div class="box-body table-responsive no-padding">
              <table class="table table-striped" id="example1">
                <span style="color: red;"><small></small></span>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Tgl Upload</th>
                    <th><center>Action</center></th>
                  </tr></thead>
                <tbody>
                @foreach($clients as $index=>$client)
                <tr>
                  <td>{{ $index+1 }}</td>
                  <td>{{ $client->name }}</td>
                  <td>{{ $client->username }}</td>
                  <td>{{ $client->email }}</td>
                  <td>{{ $client->created_at }}</td>
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