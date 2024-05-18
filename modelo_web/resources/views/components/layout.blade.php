<HTML>
    <HEAD>
        <TITLE>{{$TITLE ?? 'Meu site'}}</TITLE>
<link rel="stylesheet" href="{{ asset('/css/app.css')}}">
</HEAD>
    <body>
        <nav>
            <h3>Bem vindo ao meu site</h3>
<hr>
</nav>
{{ $slot}}
<footer>
</hr>
2024 Taiane Arruda
</footer>
</body>