<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="icon" href="\image\MedigoLogo.svg" type="image/icon type">
        <title>@yield('title', 'Medigo')</title>
    </head>
    <style>  

        input[type=number]::-webkit-inner-spin-button {
            opacity: 1
        }
        .wellness-btn{
            width: 80px;
            height: 80px;
            background: #59A5F5;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            border-radius: 50%;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25); 
            position: fixed;
            right: 50px;
            bottom: 70px;
            z-index: 1000;
            transition: background 0.25s;
        }
        .wellness-btn:hover{
            box-shadow: 0px 0px 20px 6px rgba(89,165,245,0.52);;
        }
        </style>
    <body>
        @include('Structure.navbar')
        <div>
            @yield('container')
        </div>
        @include('Structure.footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script>
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        </script>

        @stack('scripts')
    </body>
</html>
