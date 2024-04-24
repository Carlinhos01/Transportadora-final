@extends ('layout')
@section ('content')

<form class="row g-3" method="POST" action="{{route('envia-banco-cadastro')}}">
@csrf
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Tipo</label>
    <input type="text" name="tipo" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Caminhão</label>
    <input type="text" name="caminhao" class="form-control" id="inputEmail4">
  </div>
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Pagamento</label>
    <input type="text" name="pagamento" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
@endsection