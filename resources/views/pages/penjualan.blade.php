<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mainStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Blinker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <title>Penjualan</title>
  </head>
  <body>
    <!-- Main -->
    <div class="wrapper">
      <!-- Sidebar -->
      <nav id ="sidebar">
        <div class="sidebar-header">
          <img src="images/logo.png" alt="logo" height="70" class="logo">
        </div>

        <ul class="list-unstyled components">
          <li class="active">
            <a href="tabPenjualan.html">Penjualan</a>
          </li>

          <li>
            <a href="#keuanganSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Keuangan</a>
            <ul class="collapse list-unstyled" id="keuanganSubmenu">
              <li>
                <a href="tabStatistikKeuangan.html">Statistik</a>
              </li>
              <li>
                <a href="tabTimelineKeuangan.html">Timeline</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#barangSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Barang</a>
            <ul class="collapse list-unstyled" id="barangSubmenu">
              <li>
                <a href="#">Statistik</a>
              </li>
              <li>
                <a href="#">Database</a>
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

      <!-- Content -->
      <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fa fa-align-justify"></i><span>Menu</span>
          </button>

          <div class="navseparator"></div>

          <h3 class="title">Penjualan</h3>
        </nav>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
        $('#sidebarCollapse').on('click',function(){
          $('#sidebar').toggleClass('active');
        });
      });
    </script>
  </body>
</html>
