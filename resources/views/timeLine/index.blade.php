
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Tela inicial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        /* BACKGROUND */
       body{
           width: 100%;
           height: 100%;
           background-attachment: fixed;
            background-image: url("images/background.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .opcoes{
            font-size: 1.2em;
        }
        .opcao{
            margin-left: 10px;
        }

    </style>
</head>
<body class="bg-transparent">


    <nav class="navbar navbar-expand-md bg-light navbar-light">
        <a class="navbar-brand" href="#"><img src="../images/logo.png" alt="logo" width="130px" class="pt-1"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav opcoes ">
                <li class="nav-item ">
                    <a class="nav-link " href="/usuario/{{$usuario->id}}/edit/">{{$usuario->login}}</a>
                </li>
                <li class="nav-item opcao">
                    <a class="nav-link " href="{{route('inicio')}}">Inicio</a>
                </li>
                <li class="nav-item opcao">
                    <a class="nav-link " href="#">Vagas de emprego</a>
                </li>


                @if( $usuario->perfil == 3)
                    <li class="nav-item opcao">
                        <a class="nav-link " href="/dashboard">Dashboard</a>
                    </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Enquetes
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="enquetes/create">Criar</a>
                        <a class="dropdown-item" href="enquetes">Listar</a>
                    </div>
                </li>
                <li class="nav-item opcao">
                    <a class="nav-link " href="/timeline">Sair</a>
                </li>
                @endif
            </ul>


            </div>

    </nav>
    <div class="container-fluid d-flex justify-content-center row m-auto mb-1">
        <div class="bg-light col-sm-12 col-md-7 col-bg-5 mt-2 p-3 m-sm-1" style="border-radius: 30px; min-height: 150px">
            <h2 class="text-center">Enquete: {{$enquete->pergunta}}
            </h2>
            <p class="text-right"><small>Postado em: {{$enquete->created_at}}</small></p>
            @foreach($opcoes as $opcao)
                <div class="radio ">
                <input type="radio" name="opcao">

                <label class="control-label">{{$opcao->opcao}}</label>
                </div>
                @endforeach
            <input type="submit" value="Responder" class="btn btn-success mt-4">

        </div>

        <div class="bg-light col-sm-12 col-md-7 col-bg-5 mt-2 p-3 m-sm-1 mb-1" style="border-radius: 30px; min-height: 150px">
            <h2 class="text-center">Vaga: {{$vaga->titulo}}
            </h2>
            <p class="text-right"><small>Postado em: {{$vaga->created_at}}</small></p>
            <div class="d-flex justify-content-center mb-4">
            <img src="{{($vaga->imagem)}}">
            </div>
            <p>{{$vaga->texto}}</p>
            <input type="submit" value="Me candidatar" class="btn btn-success mt-4">

        </div>

    </div>





</body>
</html>
