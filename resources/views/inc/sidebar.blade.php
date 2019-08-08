<nav id ="sidebar">
  <div class="sidebar-header">
    <img src="{{asset('/images/logo.png')}}" alt="logo" height="70" class="logo">
  </div>

  <ul class="list-unstyled components">
    <li class="active">
      <a href="{{url('/penjualan')}}">Penjualan</a>
    </li>

    <li>
      <a href="#keuanganSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Keuangan</a>
      <ul class="collapse list-unstyled" id="keuanganSubmenu">
        <li>
          <a href="{{url('/statistik-keuangan')}}">Statistik</a>
        </li>
        <li>
          <a href="{{url('/timeline-keuangan')}}">Timeline</a>
        </li>
      </ul>
    </li>

    <li>
      <a href="#barangSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Barang</a>
      <ul class="collapse list-unstyled" id="barangSubmenu">
        <li>
          <a href="{{url('/statistik-barang')}}">Statistik</a>
        </li>
        <li>
          <a href="{{url('/items')}}">Database</a>
        </li>
      </ul>
    </li>
  </ul>

  <div class="sideseparator"></div>

  <div class="sideline"></div>

  <ul class="list-unstyled CTAs">
    <li>
      <a href="#">About</a>
    </li>

    <li>
      <a href="#">Keluar</a>
    </li>
  </ul>
</nav>
