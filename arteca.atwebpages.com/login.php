
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(0, 255, 21), yellow);
        }
       
        input{
            padding: 20px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        div{background-color: black;
        position: absolute;
        top: 90%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 80px;
        border-radius: 15px;
        color: white;}
        
        button{
            background-color: dodgerblue;
            border: none;
            padding: 20px;
            width: 20%;
            border-radius: 20px;
            color: white;
            font-size: 15px;
            
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
        image{
            padding: 20px;
            border-radius: 20px;
            max-width:  200px;
            
        }
    </style>
</head>
<body>
    <div>
        <h1>FAÇA O CADASTRO</h1>
        <form action="autenticacao.php" method="post">
        
      
        
       <input type="text" placeholder="Email"  type="email" name="email" required>
        <br><br>
        <input type="password" placeholder="Senha"  type="password" name="senha" required>
        <br><br>
            <button  class="btn btn-outline-info" type="submit">Entrar</button>

        
        <span style="float:right">
            <a href="crud/?acao=create" class="btn btn-outline-dark" style="border-radius: 10px 10px 0px 0px">Cadastrar novo usuário</a>
        </span>
            
          </form>
      

</body>
</html>