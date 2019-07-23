

@extends('../layout')

@section('header')
    <h1 class="display-4">EDITAR EMPRESA</h1>
@endsection

@section('content')

    <form class="form-horizontal"action="{{Route('empresas.update',['empresa'=>$Empresa->id])}}"method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label for="razao_social">Razão Social:</label>
            <input type="text" class="form-control" id="razao_social" placeholder="{{$Empresa->razao_social}}" name="razao_social">

            <label  for="email">CNPJ:</label>
            <input type="text" class="form-control" id="email" placeholder="{{$Empresa->cnpj}}" name="cnpj">

            <label for="login">Area de Atuação</label>
            <input type="text" class="form-control" id="login" placeholder="{{$Empresa->area_de_atuacao}}" name="area_de_atuacao">

            <label  for="email">Porte:</label>
            <input type="text" class="form-control" id="email" placeholder="{{$Empresa->porte}}" name="porte">

            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

