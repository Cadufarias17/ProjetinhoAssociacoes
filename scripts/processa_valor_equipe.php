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

	$Area = (String)$_GET['Area'];


	$query = "	SELECT 	
                    distinct SUC_PAR_MATERIAL.MATERIAL, 
                    SUC_PAR_MATERIAL.DESCRICAO, 
                    SUC_Associacao.Sucata, 
                    SUC_Associacao.Area 
                FROM 
                    SUC_PAR_MATERIAL, 
                    SUC_Associacao 
                WHERE 
                    SUC_PAR_MATERIAL.MATERIAL LIKE SUC_Associacao.Sucata AND 
                    SUC_Associacao.Area LIKE '$Area';";

	$resultado = mysqli_query($link, $query);
	$saida = array();
	while ($linha = mysqli_fetch_array($resultado)) {
		$saida[] = $linha;
	}
	//echo json_encode(utf8ize($saida));
	echo json_encode($saida);
?>