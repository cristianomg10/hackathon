@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR EMPRESA</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('postagens.update',['Postagem'=>$Postagem->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label for="razao_social">Titulo:</label>
            <input type="text" class="form-control" id="razao_social" placeholder="{{$Postagem->titulo}}" name="titulo">

            <label  for="cnpj">Postagem:</label>
            <input type="text" class="form-control" id="cnpj" placeholder="{{$Postagem->postagem}}" name="postagem">

            <label for="area_de_atuacao">Status:</label>
            <input type="text" class="form-control" id="area_de_atuacao" placeholder="{{$Postagem->status}}" name="status">

            <label  for="porte">Ultima Atualização:</label>
            <input type="datetime-local" class="form-control" id="porte" placeholder="{{$Postagem->ultima_atualizacao}}" name="ultima_atualizacao">

            <label  for="porte">Postagem pai ??????:</label>
            <input type="text" class="form-control" id="porte" placeholder="{{$Postagem->id_postagem}}" name="id_postagem">

            <label  for="porte">Responsavel:</label>
            <input type="text" class="form-control" id="porte" placeholder="{{$Postagem->id_usuario}}" name="id_usuario">

            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

