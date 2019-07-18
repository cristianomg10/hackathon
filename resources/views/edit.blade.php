<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastrar</title> @csrf
    @method('PUT')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Atualizar dados</h2>
    <form class="form-horizontal" action="{{Route('usuarios.update',['usuarios'=> $Usuario->id])}}" method="post">

        <div class="form-group">
            <label class="control-label col-sm-2" for="login">Login:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="login" name="login" placeholder="{{$Usuario->login}}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">E-mail:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="{{$Usuario->email}}" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="senha">Senha:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="senha" name="senha" placeholder="{{$Usuario->senha}}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pergunta">Pergunta secreta:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="pergunta"  name="id_pergunta_secreta" placeholder="{{$Usuario->id_pergunta_secreta}}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="resposta">Resposta:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="resposta" name="resposta_pergunta_secreta" placeholder="{{$Usuario->resposta_pergunta_secreta}}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Perfil">Perfil:</label>
            <div class="col-sm-10">
                <input type="radio" name="perfil" value="1" name="perf">
                <label for="perfil" class="control-label"> Usuario</label>
                <input type="radio" name="perfil" value="2" name="perf">
                <label for="perfil" class="control-label"> Moderador</label>
                <input type="radio" name="perfil" value="3" name="perf">
                <label for="perfil" class="control-label"> Administrador</label>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" name="remember">Lembre-se</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Atualizar</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
