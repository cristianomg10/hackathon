@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR RESPOSTA DE QUESTIONARIO</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('opcaoRespostas.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label for="razao_social">Pergunta:</label>
            <input type="text" class="form-control" id="razao_social" placeholder="insira a pergunta" name="id_pergunta" required>

            <label  for="cnpj">Opcao:</label>
            <input type="text" class="form-control" id="cnpj" placeholder="insira a opção" name="opcao" required>

            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

