<!doctype html>
<html lang="en">

<head>
    <title>TCCerto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <div class="wrapper bg-primary d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4 pt-5">
                <h1><a href="index.html" class="logo">TCCerto</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="api">ChaTCC</a>
                    </li>
                    <li>
                    <li>
                        <a href="#">Referências ABNT</a>
                    </li>
                    </li>
                    <li>
                        <a href="#">Correção de texto</a>
                    </li>
                </ul>
                <div class="footer">
                    <h1></h1>
                </div>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5 text-center">
            <div class="image-logo text-center">
                <img class="mt-5" src="{{ asset('Frame.svg') }}" alt="">
                <h3 class="mt-5 fw-bold text-body-secondary">Navegue entre as sessões para ser auxiliado na escrita do seu TCC!</h3>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
