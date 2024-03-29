<!DOCTYPE html>
<html lang="US">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="{{ asset('noor/assets/img/logo.png') }}"
      type="image/x-icon"
    />
    <title>
      NOOR MULTIPURPOSE COOPERATIVE | {{isset($pageData->title)?$pageData->title: ''}}
    </title>
    @include('website.layout.style')
    @stack('styles')
</head>
<body>
@include('website.layout.header')
@include('website.layout.breadcrumb')
@yield('content')
@include('website.layout.footer')
@include('website.layout.script')
@stack('scripts')
</body>
</html>
