<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blink</title>
    {{-- Estilos --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>
<body>
  
    <div id="app" class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
          <div>
            <div class="container">
                <div class="sidebar-user">
                    <img src="img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Imagen raul">
                    <div class="font-weight-bold">Raul Perez</div>
                    <small>Web developer</small>
                </div>
            </div>
         </div>
          <div class="list-group list-group-flush">
            <router-link to="/dashboard" class="list-group-item list-group-item-action bg-light"><i class="fas fa-columns"> </i> Dashboard</router-link>
            <router-link to="/contacts" class="list-group-item list-group-item-action bg-light"><i class="far fa-address-book"> </i> Contactos</router-link>
          </div>
        </div>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"></i></button>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="btn btn-primary btn-sm" href="#"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ml-3" href="#"><i class="fas fa-bell  fa-lg"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <h3><span class="badge badge-pill badge-secondary ml-3">L</span></h3>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
    
          <div class="container-fluid">
            <router-view></router-view>
                {{-- <contacts-component></contacts-component> --}}
        </div>
        </div>
        <!-- /#page-content-wrapper -->
    
      </div>
      <!-- /#wrapper -->
      <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
<style>
   body {
	font-family: inherit;
	font-size: 14px;
	font-weight: 500;
	font-style: normal;
	font-stretch: normal;
	letter-spacing: normal;
	color: rgb(24, 39, 57);
}
:root {
	--blue: #3b7ddd;
	--indigo: #6610f2;
	--purple: #6f42c1;
	--pink: #e83e8c;
	--red: #dc3545;
	--orange: #fd7e14;
	--yellow: #ffc107;
	--green: #28a745;
	--teal: #20c997;
	--cyan: #17a2b8;
	--white: #fff;
	--gray: #6c757d;
	--gray-dark: #343a40;
	--primary: #3b7ddd;
	--secondary: #6f42c1;
	--success: #28a745;
	--info: #20c997;
	--warning: #fd7e14;
	--danger: #dc3545;
	--light: #e9ecef;
	--dark: #153d77;
	--tertiary: #669ae5;
	--breakpoint-xs: 0;
	--breakpoint-sm: 576px;
	--breakpoint-md: 768px;
	--breakpoint-lg: 992px;
	--breakpoint-xl: 1200px;
	--breakpoint-xxl: 1440px;
}
</style>
</html>