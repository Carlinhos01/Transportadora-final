@extends ('layout')
@section ('content')

<form class="row g-3" method="POST" action="{{route('envia-banco-cliente')}}">
@csrf
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4">
  </div>
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Telefone</label>
    <input type="text" name="fone" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
@endsection

