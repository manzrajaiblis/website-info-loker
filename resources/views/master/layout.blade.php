<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Add favicon logo -->
    <link rel="icon" href="{{ asset('images/logo/L.png') }}" alt="Logo Bumi" width="100" height="auto">

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<style>
      

        html, body {
            height: 100%;
            margin: 0;
        }

        .container-fluid {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensures the container takes at least 100% of the screen height */
        }

        .row {
            flex-grow: 1; /* Makes the content area take the remaining space */
        }
    </style>

<body>
    @include('components.menu')
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
