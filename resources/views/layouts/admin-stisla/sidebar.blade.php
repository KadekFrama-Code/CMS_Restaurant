<div class="main-sidebar" tabindex="1" style="overflow: hidden; outline: none; background-color:  white;">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">

  <!-- Admin Akses -->
            @if(Str::length(Auth::guard('user')->user()) > 0)
              @if(Auth::guard('user')->user()->level = "admin")

              <li class="menu-header">Dashboard Admin</li>
              <li class="nav-item dropdown">
                <a href="#"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>

              <li class=""><a class="nav-link" href="{{ url('/register') }}"><i class="fas fa-user-plus"></i> <span>Register Client</span></a></li>

              <li class=""><a class="nav-link" href="{{ url('/daftar-clients') }}"><i class="fas fa-list"></i> <span>Daftar Client</span></a></li>

              @endif
            @endif

  <!-- Client Akses -->
             @if(Str::length(Auth::guard('client')->user()) > 0)
              @if(Auth::guard('client')->user()->level = "client")
              <li class="menu-header">Client Akses</li>
              <li class="active"><a class="nav-link" href="/cms/produk"><i class="far fa-square"></i> <span>List Menu</span></a></li>

              <li class="active"><a class="nav-link" href="/cms/seo-setting/1"><i class="far fa-square"></i> <span>Seo Setting</span></a></li>

              @endif
            @endif


          </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="{{ url('/keluar') }}" class="btn btn-danger btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Logout
              </a>
            </div>
        </aside>
      </div>