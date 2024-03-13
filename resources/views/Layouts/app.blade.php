<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Atsu">
    <title>Meyawo Landing page | Free Bootstrap 4.3.x landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/meyawo.css') }}">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    @include('Layouts.navbar')
    <!-- End of Page Navbar -->

    <!-- page header -->
    @include('Layouts.header')
    <!-- end of page header -->

    {{-- Load sections --}}
    @forelse ($sections as $section)
        @include('sections.' . $section->href)
    @empty
        <p>No hay secciones.</p>
    @endforelse
    <!-- end Load sections -->

    <!-- footer -->
    @include('Layouts.footer')
    <!-- end of page footer -->

    <!-- core  -->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- Meyawo js -->
    <script src="{{ asset('assets/js/meyawo.js') }}"></script>

</body>

</html>
