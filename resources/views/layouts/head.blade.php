{{-- Base Meta Tags --}}
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- Base Stylesheets --}}
@if(!config('adminlte.enabled_laravel_mix'))
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    {{-- Configured Stylesheets --}}
    @include('adminlte::plugins', ['type' => 'css'])

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@else
    <link rel="stylesheet" href="{{ mix(config('adminlte.laravel_mix_css_path', 'css/app.css')) }}">
@endif

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

{{-- Configured Scripts --}}
@include('adminlte::plugins', ['type' => 'js'])

<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>

{{-- Select2 Js --}}
<link href="{{ asset('js/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
<script src="{{ asset('js/select2/dist/js/select2.min.js') }}"></script>
