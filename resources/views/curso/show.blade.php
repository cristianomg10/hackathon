<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        #excluir{
            display: inline-block;
        }
    </style>
</head>
<body>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">instituição</th>
        <th scope="col">nome</th>
        <th scope="col">turno</th>
        <th scope="col">nivel</th>
        <th scope="col">cidade</th>
        <th scope="col">ano ingresso</th>
        <th scope="col">semestre ingresso</th>
    </tr>
    </thead>
    <tbody>
        <tr>

            <th scope="row">{{$Curso->id}}</th>
            <td>{{$Curso->id_instituicao}}</td>
            <td>{{$Curso->nome}}</td>
            <td>{{$Curso->turno}}</td>
            <td>{{$Curso->nivel}}</td>
            <td>{{$Curso->id_cidade}}</td>
            <td>{{$Curso->ano_inicial_oferta}}</td>
            <td>{{$Curso->semestre_inicial_oferta}}</td>

        </tr>
    </tbody>
</table>
</body>
</html>


