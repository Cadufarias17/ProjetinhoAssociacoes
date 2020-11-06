<?php
    require '../conexao.php'; /*  Requirindo o script de conexão com o banco de dados.  */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Associações</title>
    <style>
        div {
            padding: 1%;
        }
        table {
            padding: 2%;
            width: 100%;
        }
    </style>
</head>
<body>
    
    <div>
        <label for="equipes">Escolha um time:</label>
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
        <button>+</button>
    </div>
    
    <div>
        <label for="posicoes">Escolha uma posição:</label>
        <select name="posicoes" id="posicoes" >
        <?php
                $query = "SELECT * FROM Posicoes;";
                $resultado = mysqli_query($link, $query);
                while ($linha = mysqli_fetch_array($resultado)) {
                    echo "<option value="; 
                    echo '"'.$linha['nome'].'"'; // COMO SERÁ SALVO NO BANCO
                    echo ">".$linha['nome']."</option> "; // COMO SERÁ APRESENTADO PARA O USUÁRIO
                }
            ?>
        </select>
        <button>+</button>
    </div>

    <div>
        <label for="jogadores">Escolha um jogador:</label>
        <select name="jogadores" id="jogadores" >
        <?php
                $query = "SELECT * FROM Jogadores;";
                $resultado = mysqli_query($link, $query);
                while ($linha = mysqli_fetch_array($resultado)) {
                    echo "<option value="; 
                    echo '"'.$linha['nome'].'"'; // COMO SERÁ SALVO NO BANCO
                    echo ">".$linha['nome']."</option> "; // COMO SERÁ APRESENTADO PARA O USUÁRIO
                }
            ?>
        </select>
        <button>+</button>
    </div>

    <div>
        <button>CRIAR ASSOCIAÇÃO</button>
    </div>
    
    <div>
    <h3>Associações existentes:</h3>
        <table border='2'>
            <tr>
                <th>Equipe</th>
                <th>Posição</th>
                <th>Jogador</th>
            </tr>
        </table>               
    </div>
    
</body>
</html>