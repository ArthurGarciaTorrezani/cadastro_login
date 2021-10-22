
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
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
        <h1>Login para curso de emagrecimento em 60 dias.</h1>
        <form action="login.php" method="post">
        
      
        
    
        
            <button  class="btn btn-outline-info" type="submit">Login</button>
        
            
          </form>
        <br>
        <p>Curso para o emagrecer </p>
        <br>
        <p>Tudo o que você precisa saber para conquistar o corpo que sempre quis!

            No nosso curso emagrecimento em 20 você vai aprender a como perder peso de maneira eficiente, sem dietas restritivas, podendo se alimentar da maneira que gosta!</p>
        <img src="img/emagrecer-login.jpg" width="450px" height="300px">
        <br>
        <p>Conteudo do curso:</p>
        <ol>
          <li>Entendendo como se alimentar no dia a dia.</li> 
          <li>Ecercícios sao importantes!</li> 
          <li>O plano.</li> 
          <li>Como adaptar a minha rotina?</li> 
          <li>Bonus: o resultado final!</li> 
           
        </ol>

    </div>

</body>
</html>