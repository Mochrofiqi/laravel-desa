<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>SINDERAN</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
  <link rel="icon" type="image/png" sizes="30x30" href="/img/ikon/hut.png">

  <!-- Bootstrap core CSS -->
  <link href="/asset/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/dashboard.css">

  <link href="/asset/trix-editor/trix.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('asset/datatables/css/jquery.dataTables.min.css') }}">

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    .trix-button-group.trix-button-group--file-tools {
      display: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

  </style>


</head>

<body>

  @include('admin.layouts.header')

  @yield('content')

  @include('admin.layouts.footer')

</body>

</html>
