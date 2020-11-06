<?php
    require 'conexao.php'; /*  Requirindo o script de conexão com o banco de dados.  */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Projetinho Associações</title>
    <style>
        div {
            padding: 1%;
        }
    </style>
</head>
<body>

    <div>
        <label for="equipes">Escolha um time</label>
        <select name="equipes" id="equipes" >
            <?php
                $query = "SELECT * FROM Equipes;";
                $resultado = mysqli_query($link, $query);
                while ($linha = mysqli_fetch_array($resultado)) {
                    echo "<option value="; 
                    echo '"'.$linha['nome'].'"'; // COMO SERÁ SALVO NO BANCO
                    echo ">".$linha['nome']."</option> "; // COMO SERÁ APRESENTADO PARA O USUÁRIO
                }
            ?>
        </select>
    </div>
    
    <div>
        <label for="posicoes">Escolha uma posição</label>
        <select name="posicoes" id="posicoes" ></select>
    </div>

    <div>
        <label for="jogadores">Escolha um jogador</label>
        <select name="jogadores" id="jogadores" ></select>
    </div>

    <div>
        <button onclick="changePage('pages/criarAssociacao.php');" >CRIAR ASSOCIAÇÕES</button>
    </div>

    <script>
        function changePage(site) {
            window.location.href = site;
        }

        function limpaSelect(argument) {
            // IDENTIFICANDO ELEMENTO
            var select = document.getElementById(argument);
            
            //EXCLUIR TODOS SEUS FILHOS
            while (select.firstChild) {
                select.removeChild(select.firstChild);
            }

            //CRIAR ELEMENTO EM BRANCO
            var option = document.createElement("option");
            option.text = "";
            option.value = "";
            select.appendChild(option);
        }

        function getValor(argument) {
            alert(argument);
            if (argument == 'equipes') {
                var equipe = document.getElementById(argument).value;

                xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange=function() {
                    var retorno = JSON.parse(this.responseText);
                    limpaSelect('jogadores');
                    
                    limpaSelect('posicoes');

                    // IDENTIFICANDO ELEMENTO
                    var select = document.getElementById('posicoes');
                    
                    //console.log(retorno.length);
                    for(var i = 0; i < retorno.length; i++){
                        var option = document.createElement("option");
                        option.text = retorno[i].MATERIAL+" - "+retorno[i].DESCRICAO;
                        option.value = retorno[i].MATERIAL;
                        select.appendChild(option);
                        //console.log(retorno[i].MATERIAL);
                        //console.log(retorno[i].MATERIAL+" - "+retorno[i].DESCRICAO);
                    }
                }
                xmlhttp.open("GET","scripts/processa_valor_equipe.php?Equipe="+equipe,true);
                xmlhttp.send();
            }
        }
    </script>
    
</body>
</html>