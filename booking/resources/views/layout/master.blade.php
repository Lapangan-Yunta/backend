<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') | Auth</title>

    <link rel="preconnect" href="https://rsms.me/" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
        * {
            margin: 0;
            padding: 0;

            box-sizing: border-box;
        }

        body {
            background-color: #f5f5f5;
            font-family: "Inter", sans-serif;

            font-size: 16px;
        }

        nav {
            font-family: "Inter", sans-serif;
            font-style: bold;
        }

        .gambar-logo {
            width: 150px;
            height: 130px;
        }

        span {
            color: black;
            font-weight: bolder;
            text-decoration: none !important;
        }

        a {
            color: black;
        }



        .active {
            background-color: #b31312;
            color: white;
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body style="background-color: #f5f5f5; font-family: 'inter'; font-weight: bold">

    @include('layout.header')
    
    <!-- content -->
    @yield('content')
    <!-- end content -->

    @include('layout.footer')


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
