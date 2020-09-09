<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Link css --}}
    @include('layouts.head')

    {{-- Custom Mega Tags --}}
    @yield('meta_tags')

    {{-- Title --}}
    <title>
        @yield('title')
    </title>
</head>

<body class="@yield('classes_body')" @yield('body_data')>

    {{-- Main Navbar --}}
    @include('layouts.navbar')

    {{-- Main Sidebar --}}
    @include('layouts.sidebar')

    {{-- Body Content --}}
    <div class="content-wrapper" style="min-height: 525.059">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    {{-- Page Title --}}
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">@yield('title')</h1>
                    </div>
                    {{-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">home</li>
                            <li class="breadcrumb-item active">test</li>
                        </ol>
                    </div> --}}
                </div>
            </div>
        </div>

        @yield('content')
    </div>


</body>

</html>
