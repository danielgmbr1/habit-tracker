<h1>
    Welcome to the Home Page
</h1>

<p>
    Olá, {{ $name }}
</p>

<p>
    Vocẽ gosta de: 
</p>

<ul>
    @foreach ($habits as $item)
        <li>{{ $item}}</li>
    @endforeach
</ul>

@auth
    <p>
        Você está logado!
    </p>
@endauth

@guest
    <p>
        Você não está logado!
    </p>
@endguest

