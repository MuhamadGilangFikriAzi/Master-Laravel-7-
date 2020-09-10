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

                    {{-- Make Breadcrumb based on path --}}
                    @php
                        $breadcrumb  = explode('/',request()->path());
                    @endphp
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            @foreach ($breadcrumb as $item)
                                <li class="breadcrumb-item @if($loop->last) active @endif" >{{ $item }}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')
    </div>


</body>

</html>
