<?php
include("conecta.php");
include("banco-usuario.php");
include("logica-usuario.php");


$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if ($usuario == null){
	$_SESSION["danger"]="Usuario ou senha invalida.";
	header("location: index.php?login=0");

}else{

	$_SESSION["success"]="Usuario logado com sucesso.";
	logaUsuario($usuario["email"]);
	header("location: index.php");
}
die();