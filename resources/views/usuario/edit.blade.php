@extends('../layout')

@section('header')
    <h1 class="display-4">EDITAR USUARIO</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('usuario.update',['usuario'=> $Usuario->id])}}" method="post">
        @csrf
        @method('PUT')
    <div class="form-group bg-light p-2 rounded">
        <label  for="login">Login:</label>

        <input type="text" class="form-control" id="login" value="{{$Usuario->login}}" name="login" required>


        <label for="email">E-mail:</label>

        <input type="email" class="form-control" id="email" value="{{$Usuario->email}}" name="email" disabled>


        <label  for="senha">Senha:</label>

        <input type="password" class="form-control" id="senha" value="{{$Usuario->senha}}"name="senha" required>


        <label  for="id_pergunta_secreta">Pergunta secreta:</label>

        <input type="text" class="form-control" name="id_pergunta_secreta"  value="{{$Usuario->id_pergunta_secreta}}" required >



        <label  for="resposta">Resposta:</label>

        <input type="text" class="form-control" id="resposta"  value="{{$Usuario->id_pergunta_secreta}}" name="resposta_pergunta_secreta" required>
    @if($Usuario->perfil!=1)
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
        @else
            <input type="hidden" name="perfil" value="1" name="perf">
@endif



        <input type="submit" class="btn btn-primary mt-2">

    </div>
    </form>

@endsection
