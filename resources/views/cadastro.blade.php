
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

<div class="row d-flex justify-content-center mt-5">
    <div class="col-5 mt-5" >
        <form method="get"action="usuario/create">

            <div class="form-group bg-light p-3 shadow-sm " style="border-radius: 30px; height: 180px;">
                <button class="btn btn-light col-12" style="height: 100%">SOU EGRESSO</button>
            </div>
            <input type="hidden" value="1" name="tipo">
        </form>
    </div>
    <div class="col-5 mt-5" >
        <form method="get" action="usuario/create">

            <div class="form-group bg-light p-3 shadow-sm " style="border-radius: 30px; height: 180px;">
                <button class="btn btn-light col-12" style="height: 100%">SOU EMPRESA</button>
            </div>
            <input type="hidden" value="2" name="tipo">
        </form>
    </div>
</div>

</body>
</html>
