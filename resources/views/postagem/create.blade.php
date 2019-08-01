@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR POSTAGEM</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('postagens.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label for="razao_social">Titulo:</label>
            <input type="text" class="form-control" id="razao_social" placeholder="insira o titulo" name="titulo" required>

            <label  for="cnpj">Postagem:</label>
            <textarea class="form-control" id="cnpj" placeholder="insira a postagem" name="postagem" required>
            </textarea>

            <input type="hidden" class="form-control" id="area_de_atuacao" placeholder="insira o seu status" name="status" required value="1">

            <input type="hidden" class="form-control" id="porte" placeholder="insira o responsavel" name="id_usuario" value="{{$usuario->id}}" required>

            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

