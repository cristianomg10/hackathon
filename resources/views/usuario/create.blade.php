@extends('../layout')

@section('header')
    <h1 class="display-4">CADASTRO DE USUÁRIO</h1>
@endsection

@section('content')
    <form  action="{{Route('usuario.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label  for="login">Login:</label>

                <input type="text" class="form-control" id="login" placeholder="insira o login" name="login" required>


            <label for="email">E-mail:</label>

                <input type="email" class="form-control" id="email" placeholder="insira o e-mail" name="email" required>


            <label  for="senha">Senha:</label>

                <input type="password" class="form-control" id="senha" placeholder="insira a senha" name="senha" required>


            <label  for="id_pergunta_secreta">Pergunta secreta:</label>

                <select name="id_pergunta_secreta" class="custom-select">
                    @foreach($Perguntas as $Pergunta)
                    <option value="{{$Pergunta->id}}" >{{$Pergunta->pergunta}}</option>
                     @endforeach
                </select>


            <label  for="resposta">Resposta:</label>

                <input type="text" class="form-control" id="resposta" placeholder="insira a resposta" name="resposta_pergunta_secreta" required>

        <div class="form-group">
            <label for="Perfil">Perfil:</label>
            <div class="col-sm-10">
                <input type="radio" name="perfil" value="1" name="perf">
                <label for="perfil" class="control-label"> Usuario</label>
                <input type="radio" name="perfil" value="2" name="perf">
                <label for="perfil" class="control-label"> Moderador</label>
                <input type="radio" name="perfil" value="3" name="perf">
                <label for="perfil" class="control-label"> Administrador</label>
            </div>
        </div>




            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


@endsection
