<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    {{-- navbar section --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="" class="navbar-brand">Logo</a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample"
                aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#"><span>Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span>About</span></a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <button class="btn btn-default" type="submit"><ion-icon name="bag-handle-outline"></ion-icon></button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-default" type="submit"><ion-icon name="person-outline"></ion-icon></button>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    {{-- navbar section end--}}


    {{-- content section --}}

    @yield('landing')

    {{-- content section end --}}
    
    <script src="index.js"></script>
</body>
</html>
