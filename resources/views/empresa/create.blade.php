@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR EMPRESA</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('empresas.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label for="razao_social">Razão Social:</label>
            <input type="text" class="form-control" id="razao_social" placeholder="insira a razão social" name="razao_social" required>

            <label  for="cnpj">CNPJ:</label>
            <input type="text" class="form-control" id="cnpj" placeholder="insira o CNPJ da empresa" name="cnpj" required>

            <label for="area_de_atuacao">Area de Atuação</label>
            <input type="text" class="form-control" id="area_de_atuacao" placeholder="insira a area de atuação" name="area_de_atuacao" required>

            <label  for="porte">Porte:</label>
            <input type="text" class="form-control" id="porte" placeholder="insira o porte da empresa" name="porte" required>
            <input type="hidden" name="id_usuario" value="{{$usuario->id}}">
            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

