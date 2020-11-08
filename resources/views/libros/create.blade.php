<h1>Ingrese un Nuevo Libro</h1>

<form method="POST" action="{{route('libros.store')}}">
{{csrf_field()}}

<label for="nombre">Nombre </label>
<input type="text" name="nombre" >   

<label for="categoria">Categoria</label>
<input type="text" name="categoria" >   

<label for="autor">Autor</label>
<input type="text" name="autor" >   

<button >Guardar</button>
</form>
