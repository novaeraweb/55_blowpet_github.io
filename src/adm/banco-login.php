<?php 
	 function validaUsuario($conexao, $login, $senha) {
	 	$senhaMd5 = md5($senha);
	 	$login = mysqli_real_escape_string($conexao, $login);
	 	$query = "SELECT * FROM usuarios WHERE email ='{$login}' AND senha='{$senha}' AND tipo ='adm' " ;
	 	$resultado = mysqli_query($conexao, $query);
	 	$usuario = mysqli_fetch_assoc($resultado);
	 	return $usuario;

	 }
