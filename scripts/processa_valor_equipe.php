<?php
	function utf8ize($d) {
	    if (is_array($d)) {
	        foreach ($d as $k => $v) {
	            $d[$k] = utf8ize($v);
	        }
	    } else if (is_string ($d)) {
	        return utf8_encode($d);
	    }
	    return $d;
	}
	require '../conexao.php';

	$Equipe = (String)$_GET['Equipe'];


	$query = "	SELECT
					distinct
					associacoes.equipe,
                    associacoes.posicao,
					posicoes.nome
                FROM
					associacoes,
					posicoes
                WHERE 
					associacoes.posicao LIKE posicoes.nome AND 
                    associacoes.equipe LIKE '$Equipe';";

	$resultado = mysqli_query($link, $query);
	$saida = array();
	while ($linha = mysqli_fetch_array($resultado)) {
		$saida[] = $linha;
	}
	//echo json_encode(utf8ize($saida));
	echo json_encode($saida);
?>