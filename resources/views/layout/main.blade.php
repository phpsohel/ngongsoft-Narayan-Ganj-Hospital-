{{-- Header --}}
@include('layout.header')

{{-- Left Sidebar --}}
@include('layout.sidebar')

{{-- Index --}}
    <div class="content-wrapper">
        @yield('content')
    </div>

{{-- Footer --}}
@include('layout.footer')
