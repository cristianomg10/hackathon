
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
        html{

            overflow: hidden;
            background-image: url("../images/background.png");
        }
        .opcoes{
            margin-left: 5%;
            font-size: 1.5em;
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
                <a class="nav-link " href="/login">Inicio</a>
            </li>
            <li class="nav-item opcao">
                <a class="nav-link " href="#">Vagas de emprego</a>
            </li>
            <li class="nav-item opcao">
                <a class="nav-link" href="/dashboard"></a>
            </li>
            <li class="nav-item opcao">
                <a class="nav-link " href="/timeline">sair</a>
            </li>

        </ul>


    </div>

</nav>
<br>



</body>
</html>
