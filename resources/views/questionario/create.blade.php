@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR QUESTIONARIO</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('questionarios.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label for="razao_social">Titulo:</label>
            <input type="text" class="form-control" id="razao_social" placeholder="insira o titulo" name="titulo">

            <label  for="cnpj">Validade:</label>
            <input type="datetime-local" class="form-control" id="cnpj" placeholder="insira a validade da pergunta" name="validade">

            <label for="area_de_atuacao">Responsável:</label>
            <input type="text" class="form-control" id="area_de_atuacao" placeholder="insira o responsavel" name="id_usuario">

            <label for="area_de_atuacao">Status:</label>
            <input type="text" class="form-control" id="area_de_atuacao" placeholder="insira o status" name="status">

            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

