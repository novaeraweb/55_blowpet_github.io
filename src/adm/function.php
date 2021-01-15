<?php 
function listaProdutos ($blowpet) {
 	$query = "select a.* FROM produtos a WHERE tipo = 'embalagem' AND ativo = 'sim' ";
 	$resultado = mysqli_query($blowpet, $query);
 	$total_produtos= mysqli_num_rows($resultado);
 	$produtos = array();
 	while ($array = mysqli_fetch_assoc($resultado)) {
 		$produto = new Produto();
 		$produto->id = $array['id'];
 		$produto->nome = $array['nome'];
 		$produto->menu = $array['menu'];
 		$produto->arquivo = $array['arquivo'];
		$produto->ativo = $array['ativo'];

 		array_push($produtos, $produto);
 	}
 	return $produtos;
}
function listaPreformas ($blowpet) {
 	$query = "select a.* FROM produtos a WHERE tipo = 'preforma' AND ativo = 'sim' ";
 	$resultado = mysqli_query($blowpet, $query);
 	$total_preformas= mysqli_num_rows($resultado);
 	$preformas = array();
 	while ($array = mysqli_fetch_assoc($resultado)) {
 		$preforma = new Preforma();
 		$preforma->id = $array['id'];
 		$preforma->nome = $array['nome'];
 		$preforma->maquina = $array['maquina'];
 		$preforma->densidade = $array['densidade'];
 		$preforma->pco = $array['pco'];
 		$preforma->material = $array['material'];
 		$preforma->menu = $array['menu'];
 		$preforma->arquivo = $array['arquivo'];
		$preforma->ativo = $array['ativo'];

 		array_push($preformas, $preforma);
 	}
 	return $preformas;
}

$query_rs_produtos = "SELECT * FROM produtos WHERE ativo='sim' ORDER BY id";
$rs_produtos = mysqli_query($blowpet,$query_rs_produtos) or die(mysqli_error());
$row_rs_produtos = mysqli_fetch_assoc($rs_produtos);
$totalRows_rs_produtos = mysqli_num_rows($rs_produtos);