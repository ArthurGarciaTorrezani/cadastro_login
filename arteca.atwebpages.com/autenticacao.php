<?php

session_start();
require_once "crud/inc/config.php";

$con = new PDO(SERVIDOR, USUARIO, SENHA);

$sql = $con->prepare("SELECT * FROM usuario WHERE email=? AND senha=?");
$sql->execute([$_POST["email"], SHA1($_POST["senha"]) ]);

$usuario = $sql->fetchObject();

if($usuario){
        // USUARIO ENCONTRADO
        
    $_SESSION["usuario"] = $usuario;
     
    header("Location: crud/index.php");
  
}else{
                // USUARIO NAO ENCONTRADO

 
    header("Location: login.php");
   
}