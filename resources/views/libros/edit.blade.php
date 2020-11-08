<form method="POST" action="{{route('libros.update',$libros->id)}}">
{{csrf_field()}} 
<input name="_method" type="hidden" value="patch">

<label for="nombre">Nombre </label>
<input type="text" name="nombre" value="{{$libros->nombre}}" >   

<label for="categoria">Categoria</label>
<input type="text" name="categoria" value="{{$libros->categoria}}" >   

<label for="autor">Autor </label>
<input type="text" name="autor" value="{{$libros->autor}}" >   

<button >Guardar</button>
</form>