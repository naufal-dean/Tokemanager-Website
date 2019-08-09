<nav id ="sidebar">
  <div class="sidebar-header">
    <img src="{{asset('/images/logo.png')}}" alt="logo" height="70" class="logo">
  </div>

  <ul class="list-unstyled components">
    <li class="{{ substr((Request::path()), 0, 9) === 'penjualan' ? 'active' : '' }}">
      <a href="{{url('/penjualan')}}">Penjualan</a>
    </li>

    <li class="{{ (
      (substr((Request::path()), 0, 8) === 'invoices') ||
      (substr((Request::path()), 0, 8) === 'outcomes') ||
      (substr((Request::path()), 0, 8) === 'finances') ||
      (substr((Request::path()), 0, 18) === 'statistik-keuangan'))
      ? 'active' : '' }}">
      <a href="#keuanganSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Keuangan</a>
      <ul class="collapse list-unstyled" id="keuanganSubmenu">
        <li>
          <a href="{{url('/statistik-keuangan')}}"
            class="{{ (substr((Request::path()), 0, 18) === 'statistik-keuangan') ? 'active' : '' }}">
            Statistik
          </a>
        </li>
        <li>
          <a href="{{url('/invoices')}}"
            class="{{ (
              (substr((Request::path()), 0, 8) === 'invoices') ||
              (substr((Request::path()), 0, 8) === 'outcomes') ||
              (substr((Request::path()), 0, 8) === 'finances'))
              ? 'active' : '' }}">
            Timeline
          </a>
        </li>
      </ul>
    </li>

    <li class="{{ ((substr((Request::path()), 0, 16) === 'statistik-barang') || (substr((Request::path()), 0, 5) === 'items')) ? 'active' : '' }}">
      <a href="#barangSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Barang</a>
      <ul class="collapse list-unstyled" id="barangSubmenu">
        <li>
          <a href="{{url('/statistik-barang')}}" class="{{ (substr((Request::path()), 0, 16) === 'statistik-barang') ? 'active' : '' }}">Statistik</a>
        </li>
        <li>
          <a href="{{url('/items')}}" class="{{ (substr((Request::path()), 0, 5) === 'items') ? 'active' : '' }}">Database</a>
        </li>
      </ul>
    </li>
  </ul>

  <div class="sideseparator"></div>

  <div class="sideline"></div>

  <ul class="list-unstyled CTAs">
    <li>
      <a href="{{url('/Tokema')}}" class="{{ (substr((Request::path()), 0, 5) === 'Tokema') ? 'active' : '' }}">About</a>
    </li>

    <li>
      <a href="#">Keluar</a>
    </li>
  </ul>
</nav>
