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
        <th scope="col">pergunta</th>
        <th scope="col">Funcões</th>
    </tr>
    </thead>
    <tbody>
    @foreach($Perguntas as $Pergunta)
        <tr>

            <th scope="row">{{$Pergunta->id}}</th>
            <td>{{$Pergunta->pergunta}}</td>
            <td><a href="{{Route('perguntas.show',["pergunta"=>$Pergunta->id])}}"> <button class="btn btn-success">Visualizar</button></a>
                <a href="{{Route('perguntas.edit',["pergunta"=>$Pergunta->id])}}"> <button class="btn btn-primary">Editar</button></a>
                <form id="excluir" method="post" action="/perguntas/remover/{{$Pergunta->id}}"
                      onsubmit="return confirm('tem certeza que deseja removier {{$Pergunta->pergunta}}')">
                    @csrf
                    @method('DELETE')
                    <button class=" btn btn-danger">excluir</button>
                </form>
            </td>

        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>


