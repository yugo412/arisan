<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta11
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>{{ config('app.name' ) }} @if(!empty($title)) {{ sprintf(' - %s', $title) }} @endif</title>
  <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif !important;
    }
  </style>
  <!-- CSS files -->
  <link href="/css/tabler.min.css" rel="stylesheet" />
  <link href="/css/tabler-flags.min.css" rel="stylesheet" />
  <link href="/css/tabler-payments.min.css" rel="stylesheet" />
  <link href="/css/tabler-vendors.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/iconfont/tabler-icons.min.css">
</head>

<body>
  <div class="page">
    @include('layouts.partials.header')

    @include('layouts.partials.nav')

    <div class="page-wrapper">
      @yield('content')

      @include('layouts.partials.footer')
    </div>
  </div>
  <!-- Libs JS -->
  <!-- Tabler Core -->
  <script src="/js/tabler.min.js" defer></script>
</body>

</html>