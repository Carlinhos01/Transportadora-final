@extends ('layout')
@section ('content')
<!-- {{route('envia-banco-servico')}} -->
<form class="row g-3" method="POST" action="{{route('envia-banco-servico')}}">
@csrf
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Tipo</label>
    <input type="text" name="tipo" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Caminhao</label>
    <input type="text" name="caminhao" class="form-control" id="inputEmail4">
  </div>
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Local de Saída</label>
    <input type="text" name="localsaida" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Local de Chegada</label>
    <input type="text" name="localchegada" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
@endsection