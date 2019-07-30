@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR EMPRESA</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('postagens.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label for="razao_social">Titulo:</label>
            <input type="text" class="form-control" id="razao_social" placeholder="insira o titulo" name="titulo" required>

            <label  for="cnpj">Postagem:</label>
            <input type="text" class="form-control" id="cnpj" placeholder="insira a postagem" name="postagem" required>

            <label for="area_de_atuacao">Status:</label>
            <input type="text" class="form-control" id="area_de_atuacao" placeholder="insira o seu status" name="status" required>

            <label  for="porte">Ultima Atualização:</label>
            <input type="datetime-local" class="form-control" id="porte" placeholder="insira a data da ultima atualização" name="ultima_atualizacao" required>

            <label  for="porte">Postagem pai ??????:</label>
            <input type="text" class="form-control" id="porte" placeholder="insira a postagem pai" name="id_postagem" required>

            <label  for="porte">Responsavel:</label>
            <input type="text" class="form-control" id="porte" placeholder="insira o responsavel" name="id_usuario" required>

            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

