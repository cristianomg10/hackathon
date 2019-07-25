@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR ENQUETE</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('enquetes.update',["Enquete"=>$Enquetes->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label for="razao_social">Pergunta:</label>
            <input type="text" class="form-control" id="razao_social" placeholder="{{$Enquetes->pergunta}}" name="pergunta" required>

            <label  for="cnpj">Validade:</label>
            <input type="datetime-local" class="form-control" id="cnpj" placeholder="{{$Enquetes->validade}}" name="validade" required>

            <label for="area_de_atuacao">Responsável</label>
            <input type="text" class="form-control" id="area_de_atuacao" placeholder="{{$Enquetes->id_usuario}}" name="id_usuario" required>
            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

