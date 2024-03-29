@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR ENQUETE</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('enquetes.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label for="razao_social">Pergunta:</label>
            <input type="text" class="form-control" id="razao_social" placeholder="insira a pergunta" name="pergunta" required>

            <label  for="cnpj">Validade:</label>
            <input type="datetime-local" class="form-control" id="cnpj" placeholder="insira a validade da pergunta" name="validade" required>

            <input type="hidden" class="form-control" id="area_de_atuacao" placeholder="insira o responsavel" name="id_usuario" required value="{{$usuario->id}}">
            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

