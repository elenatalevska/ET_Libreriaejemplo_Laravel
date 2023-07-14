@extends('layout')

@section('contenido')
<form action="" method='post'>
  @csrf
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Título</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="titulo">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Precio</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="precio">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Alta libro</button>
  <span id='mensajes'></span>
</form>
@endsection