<?php header("Content-type: text/html; charset=utf8"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <h1>Usuário (update)</h1>

        <form action="" method="post">

            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" value="<?=$usuario->email?>" />
            </div>

            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" name="nome" value="<?=$usuario->nome?>" />
            </div>

            <button  class="btn btn-outline-info" type="submit">Salvar</button>

        </form>

    </div>

</body>

</html>