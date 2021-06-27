@extends('layouts.admin-stisla.master')
@section('content')

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            <div class="card card-primary">
              <div class="card-header"><h2>Register Client</h2></div>

              <div class="card-body">
                <form action="{{ url('/postregister') }}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="first_name">Nama Client</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus>
                      @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username">
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email Client</label>
                    <input id="email" type="email" class="form-control" name="email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-12">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control" data-indicator="pwindicator" name="password">
                      @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-12">
                      <label for="password" class="d-block">Nama Restoran</label>
                      <input id="password" type="text" class="form-control" data-indicator="pwindicator" name="nama_resto">
                      @error('nama_resto')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Path</label>
                      <input type="text" name="path_url" class="form-control">
                      @error('path_url')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group col-6">
                      <label>Max File</label>
                      <input type="number" name="max_file" class="form-control">
                      @error('max_file')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              CMS &copy; 2021
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection



@section('script')
  <!-- Page Specific JS File -->
  <script src="{{ asset('stisla-master/assets/js/page/auth-register.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  @if(Session::has('record_added'))
  <script>
    swal("Sukses !!!","{!!Session::get('record_added')!!}","success",{
      button: "OK",
    });
  </script>
  @endif

@endsection