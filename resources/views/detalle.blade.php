@extends('layout')

@section('contenido')
@if ($libro)
<div class="card" style="width: 18rem;">
  <div class="card-body m-auto">
      <h5 class="card-title">{{ $libro->titulo }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">ID:{{ $libro->id }}</h6>
      <p class="card-text">Precio:{{ $libro->precio }} €</p>
  </div>
@else
  <div >
        Libro no existe.
  </div>
@endif
</div>
@endsection

