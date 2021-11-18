<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Library Management System</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">

 <!-- GOOGLE FONTS -->
 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
 <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

 <!-- PLUGINS CSS STYLE -->
 <link href="{{asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
 <link href="{{asset('backend/assets/plugins/nprogress/nprogress.cs')}}s" rel="stylesheet" />
 <link href="{{asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
 <link href="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
 <link href="{{asset('backend/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
 <link href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
 <link href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

 <!-- SLEEK CSS -->
 <link id="sleek-css" rel="stylesheet" href="{{ asset('backend/assets/css/sleek.css') }}" />



 <!-- FAVICON -->
 <link href="{{ asset('logo/lib.png') }}" rel="shortcut icon" />


  <script src="{{ asset('backend/assets/plugins/nprogress/nprogress.js') }}"></script>
<style>
  body{
    font-family: 'Times New Roman', Times, serif
  }

</style>




</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        @include('backend.layouts.body.sidebar')



      <div class="page-wrapper">
                  <!-- Header -->

<header class="main-header " id="header">

@include('backend.layouts.body.header')

  </header>


        <div class="content-wrapper">

          @yield('admin')

		</div>



      </div>
    </div>


    @include('backend.layouts.body.script')






  </body>
</html>
