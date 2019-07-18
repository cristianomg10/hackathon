<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastrar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Formulário de cadastro</h2>
    <form class="form-horizontal" action="{{Route('cursos.update',['cursos'=> $Curso->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="control-label col-sm-2" for="login">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="login" placeholder="{{$Curso->nome}}" name="nome">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Perfil">Instituição:</label>
            <div class="col-sm-10">
                <input type="text" name="id_instituicao" placeholder="{{$Curso->id_instituicao}}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Turno:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="turno" placeholder="{{$Curso->turno}}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="senha">Nivel:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="senha" placeholder="{{$Curso->nivel}}" name="nivel">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pergunta">Cidade:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="pergunta" placeholder="{{$Curso->id_cidade}}" name="id_cidade">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="resposta">Ano:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="resposta" placeholder="{{$Curso->ano_inicial_oferta}}" name="ano_inicial_oferta">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="resposta">Semestre:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="resposta" placeholder="{{$Curso->semestre_inicial_oferta}}" name="semestre_inicial_oferta">
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
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
