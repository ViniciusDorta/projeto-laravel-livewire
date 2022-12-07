<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Laravel</title>
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <script src="https://kit.fontawesome.com/ccff9e51ab.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <div class="logo">
            Contatos.com
        </div>
    </header>

    @livewire('contact-create')

    <footer>
        <div class="icons-posicao">
            <div class="icons">
                <a href="#"> <i class="fa-brands fa-github"></i></a>
                <a href="#"> <i class="fa-brands fa-linkedin"></i> </a>
                <a href="#"> <i class="fa-brands fa-skype"></i> </a>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>

</html>
