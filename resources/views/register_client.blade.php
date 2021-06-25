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
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email Client</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-12">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control" data-indicator="pwindicator" name="password">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-12">
                      <label for="password" class="d-block">Nama Restoran</label>
                      <input id="password" type="password" class="form-control" data-indicator="pwindicator" name="nama_resto">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Path</label>
                      <input type="text" name="path_url" class="form-control">
                    </div>
                    <div class="form-group col-6">
                      <label>Max File</label>
                      <input type="text" name="max_file" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
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

@endsection