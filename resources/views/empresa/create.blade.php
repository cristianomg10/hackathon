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
    <form class="form-horizontal" action="{{Route('empresas.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="login">Razão Social:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="login" placeholder="insira a razão social" name="razao_social">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">CNPJ:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="insira o CNPJ da empresa" name="cnpj">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="login">Area de Atuação</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="login" placeholder="insira a area de atuação" name="area_de_atuacao">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Porte:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="insira o porte da empresa" name="porte">
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
