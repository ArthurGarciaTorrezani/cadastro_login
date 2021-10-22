<?php
session_start();
if(isset($_SESSION['usuario'])){
$_SESSION['msg']="Acesso negado";
header(view/artigo_all.php);
}