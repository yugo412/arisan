<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }} - {{ $title ?? '' }}</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="/css/portal.css">
    <link id="theme-style" rel="stylesheet" href="/css/custom.css">

</head>

<body class="app app-login p-0">
    @yield('content')
</body>

</html>
