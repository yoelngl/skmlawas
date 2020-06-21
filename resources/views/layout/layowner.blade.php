<!doctype html>
<html lang="en">

<head>
  <title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="{{asset('klorofil/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('klorofil/vendor/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('klorofil/vendor/linearicons/style.css')}}">

  <!-- <link href="assets/vendor/datatables/bootstrap.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all"> -->
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{asset('klorofil/css/main.css')}}">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="{{asset('klorofil/css/demo.css')}}">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="klorofil/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="klorofil/img/favicon.png">
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a href="index.html"><img src="{{asset('klorofil/img/logo-dark.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a>
      </div>
      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
      

         
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('klorofil/img/user.png')}}" class="img-circle" alt="Avatar"> <span>KETUA DINAS</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="/login"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
              </ul>
            </li>
            <!-- <li>
              <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <li><a href="/ad_taman" class=""><i class="lnr lnr-map"></i> <span>Data Taman</span></a></li>  
              <li><a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-chart-bars"></i> <span>Grafik responden</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="subPages" class="collapse ">
                <ul class="nav">
                  <li><a href="/data_umur" class="">grafik umur</a></li>
                  <li><a href="/grafik_pendidikan" class="">grafik pendidikan</a></li>
                  <li><a href="/grafik_pekerjaan" class="">grafik pekerjaan</a></li>
                </ul>
              </div>
            </li>
              <li><a href="/data_tahun_ini" class=""><i class="lnr lnr-file-empty "></i> <span>Nilai Taman</span></a></li>
        <li><a href="/dt_komentar" class=""><i class="fa fa-envelope"></i> <span>Komentar Responden</span></a></li>
        <!--     
            <li>
              <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="subPages" class="collapse ">
                <ul class="nav">
                  <li><a href="#" class="">Profile</a></li>
                  <li><a href="#" class="">Login</a></li>
                  <li><a href="#" class="">Lockscreen</a></li>
                </ul>
              </div>
            </li>
            -->
          </ul>
        </nav>
      </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
      @yield('content')
      </div>

  <!-- Javascript -->
  <script src="{{ asset('klorofil/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('klorofil/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('klorofil/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('klorofil/scripts/klorofil-common.js') }}"></script>

  <!-- Jquery JS-->
    <script src="{{ asset('assets/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('assets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('assets/vendor/slick/sli') }}ck.min.js">
    </script>
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-progressbar/bootstrap-progressb') }}ar.min.js">
    </script>
    <script src="{{ asset('assets/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counter-up/jquery.counter') }}up.min.js">
    </script>
    <script src="{{ asset('assets/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/selec') }}t2.min.js">
    </script>
    <script src="{{ asset('assets/vendor/vector-map/jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets/vendor/vector-map/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/vector-map/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('assets/vendor/vector-map/jquery.vmap.world.js') }}"></script>
  
    <!-- Main JS-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showgambar1').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#fotodiri").change(function () {
        readURL(this);
    });
</script>
  
</body>
</html>
