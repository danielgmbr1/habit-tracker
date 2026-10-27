
<header class="bg-white border-bottom border-2 flex items-center justify-between p-4">
    {{-- LOGO --}}                                                                         
    <div>
        Logo
    </div>

    {{-- GITHUB --}}
    <div>
        GitHub
        
        @auth
            <a href="/login" class="bg-white p-2 border-2">
                Sair
            </a>
        @endauth

        @guest
            <a href="/login" class="bg-white p-2 border-2">
                Login
            </a>
        @endguest

    </div>

</header>