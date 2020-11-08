<h1>Que desea hacer</h1>

@guest

        <h1><a href="{{route('login')}}">Login</a></h1>

        @else

                <li><a href="#"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Cerrar Sesion</a></li>

@endguest

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
        </form>


<form action="http://libros.com/libros/create">
        <input type="submit" value="Ingresa una nueva persona" />
</form>

<form action="{{route('libros.index')}}">
        <input type="submit" value="Registros" />
</form>

<h1>Welcome</h1>
@auth

        {{auth()->user()->name}}

@endauth