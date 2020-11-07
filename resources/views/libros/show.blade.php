<h1> Listado De Libros</h1>
<table>
	<tr>
		
		<td>nombre</td>
		<td>categoria</td>
		<td>autor</td>


	
	</tr>
        
	<tr>
	<tr>

     	 <td>{{$libros->nombre}}</td> 
		 <td>{{$libros->categoria}}</td>
		 <td>{{$libros->autor}}</td>
		
	</tr>
	</tr>
</table>


<form method="POST" action="{{route('libros.destroy',$libros->id)}}">
{{csrf_field()}} 
<input name="_method" type="hidden" value="delete">

<button>Eliminar</button>
</form>


<a href="{{route('libros.edit', $libros)}}">Editar</a>