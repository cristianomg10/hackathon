
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
            background-image: url("images/background.png");
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-transparent">

<header class="shadow-sm d-flex bg-light justify-content-center">
    <img src="images/logo.png" alt="logo" width="130px" class="pt-1">
</header>


<div class="row d-flex justify-content-center">
    <div class="col-4 mt-5" >
        <form method="#" action="#">
            <input type="hidden" name="_token" value="F5Ce46nfJf3sk4DAuH1QRuL1cCdRM4GUCI4bH2gf">            <div class="form-group bg-light p-3 shadow-sm " style="border-radius: 30px">
                <div class="text-center">
                    <h2 class="font-weight-normal">Já tem conta?</h2>
                </div>
                <input type="email" required class="form-control" name="email" style="border-radius: 30px" placeholder="E-mail" >
                <input type="password" required class="form-control mt-2"  name="password" style="border-radius: 30px" placeholder="Senha">
                <input type="submit" class="btn btn-success mt-2 col-12" style="border-radius: 30px" value="Entrar">
                <div class="text-sm-center">
                    <a href="#">Esqueci minha senha</a>
                </div>

            </div>
        </form>
        <div class="form-group bg-light p-3 shadow-sm " style="border-radius: 30px">
            <div class="text-center ">
                <h2 class="font-weight-normal">Ainda não tem conta?</h2>
            </div>
            <a href="usuario/create"><button class="btn btn-success mt-2 col-12" style="border-radius: 30px">Cadastre-se</button></a>
        </div>
    </div>
</div>
</body>
</html>
