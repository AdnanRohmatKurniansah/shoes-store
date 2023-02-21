<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Dashboard </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assetsAdmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assetsAdmin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assetsAdmin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assetsAdmin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assetsAdmin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assetsAdmin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assetsAdmin/vendor/simple-datatables/style.css" rel="stylesheet">

    
  

  <!-- Template Main CSS File -->
  <link href="/assetsAdmin/css/style.css" rel="stylesheet">
  <link href="/assetsAdmin/css/trix.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @include('dashboard.layout.header')

  @include('dashboard.layout.sidebar')
  

  @yield('fill')

  @include('dashboard.layout.footer')

  <!-- Vendor JS Files -->
  <script src="/assetsAdmin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/assetsAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assetsAdmin/vendor/chart.js/chart.umd.js"></script>
  <script src="/assetsAdmin/vendor/echarts/echarts.min.js"></script>
  <script src="/assetsAdmin/vendor/quill/quill.min.js"></script>
  <script src="/assetsAdmin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/assetsAdmin/vendor/tinymce/tinymce.min.js"></script>
  <script src="/assetsAdmin/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="/assetsAdmin/js/main.js"></script>
  <script src="/assetsAdmin/js/trix.js"></script>

</body>

</html>