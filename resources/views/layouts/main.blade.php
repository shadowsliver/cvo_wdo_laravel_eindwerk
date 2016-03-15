<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title') | My Game Collection
    </title>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <nav>
        <div class="menubutton">
            <i class="fa fa-bars fa-2x"></i>
        </div>
        <ul>
            <li><a href="#s0"><img src="{{ asset('images/icoblad80x80.png') }}" alt="Plant informatie link image"> Plant informatie</a></li>
            <li><a href="#s1"><img src="{{ asset('images/icoBloem80x80.png') }}" alt=" link image"> Habitus - Habitat</a></li>
            <li><a href="#s2"><img src="{{ asset('images/icoCultivars80x80.png') }}" alt=" link image"> Cultivar</a></li>
            <li><a href="#s3"><img src="{{ asset('images/icoBoek80x80.png') }}" alt=" link image"> Geschiedenis & Folklore</a></li>
            <li><a href="#s4"><img src="{{ asset('images/icoSchaar80x80.png') }}" alt=" link image"> Onderhoud</a></li>
            <li><a href="#s5"><img src="{{ asset('images/icoTeeltOogst80x80.png') }}" alt=" link image"> Teelt & Oogst</a></li>
            <li><a href="#s6"><img src="{{ asset('images/icoPil80x80.png') }}" alt=" link image"> Medicinaal gebruik</a></li>
            <li><a href="#s7"><img src="{{ asset('images/icoKookpot80x80.png') }}" alt=" link image"> Recepten</a></li>
            <li><a href="#s8"><img src="{{ asset('images/icoBloemschikken80x80.png') }}" alt=" link image"> Bloemschikken</a></li>
        </ul>
    </nav>
</header>
@yield('content')
</div>
</body>
</html>