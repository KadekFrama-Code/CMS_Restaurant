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
              <div class="box-body table-responsive no-padding">
                  <table class="table table-hover" id="example1">
                    <span style="color: red;"><small></small></span>
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Sosmed Setting</th>
                        <th>Maps</th>
                        <th>Favicon</th>
                        <th>Logo</th>
                        <th>Tgl Update</th>
                        <th><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($seo_settings as $index=>$seo_setting)
                      <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $seo_setting->meta_title }}</td>
                        <td>{{ $seo_setting->meta_description }}</td>
                        <td>{{ $seo_setting->sosmed_setting }}</td>
                        <td>{{ $seo_setting->google_map }}</td>
                        <td>{{ $seo_setting->favicon }}</td>
                        <td>{{ $seo_setting->logo }}</td>
                        <td>{{ $seo_setting->updated_at }}</td>
                        <td>
                          <center>
                            <div style="width:100px">
                              <a href="{{ url('/cms/seo-setting/'.$seo_setting->id) }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fas fa-pencil-alt"></i></a>

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