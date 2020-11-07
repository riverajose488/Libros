<h1>Registros</h1>

@forelse($libros as $libro)

    <li> <a href="{{route('libros.show',$libro['id'])}}">
    {{$libro->nombre}}</li>
    

    @empty<li>No hay libros para mostrar</li>

@endforelse    