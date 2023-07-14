@extends('layout')

@section('contenido')
<table class="table table-striped">
  <thead class="table-primary">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Título</th>
      <th scope="col">Precio</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @isset($libros)
            @foreach($libros as $libro)
              <tr>
                  <td>{{ $libro->id }}</td>
                  <td><a href="/detalle/{{$libro['id']}}">{{ $libro->titulo }}</a></td>
                  <td>{{ $libro->titulo }}</td>
                  <td>{{ $libro->precio }}</td>
              </tr>
            @endforeach
            @endisset
  </tbody>
</table>
@endsection