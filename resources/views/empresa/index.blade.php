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
        <th scope="col">Razão social</th>
        <th scope="col">CNPJ</th>
        <th scope="col">Area de atuação</th>
        <th scope="col">Porte</th>
        <th scope="col">Funcões</th>
    </tr>
    </thead>
    <tbody>
    @foreach($Empresas as $Empresa)
        <tr>
            <th scope="row">{{$Empresa->id}}</th>
            <td>{{$Empresa->razao_social}}</td>
            <td>{{$Empresa->cnpj}}</td>
            <td>{{$Empresa->area_de_atuacao}}</td>
            <td>{{$Empresa->porte}}</td>
            <td><a href="{{Route('empresas.show',["curso"=>$Empresa->id])}}"> <button class="btn btn-success">Visualizar</button></a>
                <a href="{{Route('empresas.edit',["curso"=>$Empresa->id])}}"> <button class="btn btn-primary">Editar</button></a>
                <form id="excluir" method="post" action="/empresas/remover/{{$Empresa->id}}"
                      onsubmit="return confirm('tem certeza que deseja removier {{$Empresa->razao_social}}')">
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


