
<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.admin-stisla.head')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <!-- Navbar -->
      @include('layouts.admin-stisla.header')
      

      <!-- Sidebar -->
      @include('layouts.admin-stisla.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{ $title }}</h1>
          </div>

          <div class="section-body">


            @yield('content')


          </div>
        </section>
      </div>
      @include('layouts.admin-stisla.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  @include('layouts.admin-stisla.script')

  <!-- Page Specific JS File -->
  @yield('script')
</body>
</html>
