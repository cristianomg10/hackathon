@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR QUESTIONARIO</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('questionarios.update',["Questionario"=>$Questionarios->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label for="razao_social">Titulo:</label>
            <input type="text" class="form-control" id="razao_social" placeholder="{{$Questionarios->titulo}}" name="titulo">

            <label  for="cnpj">Validade:</label>
            <input type="datetime-local" class="form-control" id="cnpj" placeholder="{{$Questionarios->validade}}" name="validade">

            <label for="area_de_atuacao">Responsável:</label>
            <input type="text" class="form-control" id="area_de_atuacao" placeholder="{{$Questionarios->id_usuario}}" name="id_usuario">

            <label for="area_de_atuacao">Status:</label>
            <input type="text" class="form-control" id="area_de_atuacao" placeholder="{{$Questionarios->status}}" name="status">

            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

