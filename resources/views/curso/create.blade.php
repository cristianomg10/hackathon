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
    <form class="form-horizontal" action="{{Route('cursos.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="login">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="login" placeholder="insira o nome" name="nome">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Perfil">Instituição:</label>
            <div class="col-sm-10">
                <input type="text" name="id_instituicao" >
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Turno:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="insira o turno" name="turno">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="senha">Nivel:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="senha" placeholder="insira o nivel" name="nivel">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pergunta">Cidade:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="pergunta" placeholder="insira o id da cidade" name="id_cidade">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="resposta">Ano:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="resposta" placeholder="insira o ano que vc entrou na instiruiçao" name="ano_inicial_oferta">
            </div>
        </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="resposta">Semestre:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="resposta" placeholder="insira o semestre que vc entrou na instiruiçao" name="semestre_inicial_oferta">
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
