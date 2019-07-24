@extends('../layout')

@section('header')
    <h1 class="display-4">EDITAR RESPOSTA DE QUESTIONARIO</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('opcaoRespostas.update',["Opcoes"=>$Opcao->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label for="razao_social">Pergunta:</label>
            <input type="text" class="form-control" id="razao_social" placeholder="{{$Opcao->id_pergunta}}" name="id_pergunta">

            <label  for="cnpj">Opcao:</label>
            <input type="text" class="form-control" id="cnpj" placeholder="{{$Opcao->opcao}}" name="opcao">

            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

