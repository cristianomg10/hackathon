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
</head>
<body>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">login</th>
        <th scope="col">Email</th>
        <th scope="col">Senha</th>
        <th scope="col">Id_pergunta secreta</th>
        <th scope="col">resposta</th>
        <th scope="col">Perfil</th>
    </tr>
    </thead>
    <tbody>
        <tr>

            <th scope="row">{{$Usuario->id}}</th>
            <td>{{$Usuario->login}}</td>
            <td>{{$Usuario->email}}</td>
            <td>{{$Usuario->senha}}</td>
            <td>{{$Usuario->id_pergunta_secreta}}</td>
            <td>{{$Usuario->resposta_pergunta_secreta}}</td>
            <td>{{$Usuario->perfil}}</td>

        </tr>
    </tbody>
</table>
</body>
</html>


