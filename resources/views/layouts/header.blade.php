<header class="navbar navbar-expand navbar-dark text-white font-weight-bold bg-primary flex-column flex-md-row bd-navbar">
    <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap">
            <img src="/storage/img/style/logo.png"/>
    </a>

    @auth
        <div class="navbar-nav-scroll ml-md-5">
            <ul class="navbar-nav bd-navbar-nav flex-row">
                <li class="nav-item">
                    Bem-vindo, {{ Auth::user()->name }}
                </li>
            </ul>
        </div>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex"></ul>
    
        <a class="btn d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3 text-white font-weight-bold"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            Sair
        </a>
        <form id="logout-form" action="{{ route('common.logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @endauth
    @guest
    <div class="navbar-nav-scroll ml-md-5">
        <ul class="navbar-nav bd-navbar-nav flex-row">
            <li class="nav-item">
                Bem-vindo, ao sistema de indicação, 
                <a class="text-underline" href="{{ route('common.index') }}">logue-se</a> para acessar sua arvore de indicações ou 
                <a class="text-underline" href="{{ route('admin.index') }}">clique aqui</a> para ver todas
            </li>
        </ul>
    </div>
    @endguest
</header>