<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Busca</title>
    <link rel="stylesheet" href="estilo2.css">
</head>

<body>
    
    <div class="container">
        <?php
        session_start();     
        include('conexao.php');

        
        if (isset($_GET['id'])) {
            
            $id = $_GET['id'];

           
            $sql = "SELECT * FROM produto WHERE id = $id";

            
            $result = $conn->query($sql);

            
            if ($result->num_rows == 1) {
               
                $row = $result->fetch_assoc();
                $id = $row['id'];
                $nome = $row['nome'];
                $valor = $row['valor'];
                $descricao = $row['descricao'];
            } else {
              
                echo "Registro não encontrado.";
                exit();
            }
        } else {
           
            echo "ID não especificado.";
            exit();
        }

       
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
           
            $id = $row['id'];
            $nome = $row['nome'];
            $valor = $row['valor'];
            $descricao = $row['descricao'];

            
            $sql = "UPDATE produto SET nome='$nome', valor='$valor', descricao='$descricao' WHERE id=$id";

            
            if ($conn->query($sql) === TRUE) {
                echo "Registro atualizado com sucesso!";
            } else {
                echo "Erro ao atualizar registro: " . $conn->error;
            }
        }
       
        $conn->close();
        ?>
       
        <form method="post">
            Nome: <input type="text" name="nome" value="<?php echo $nome; ?>"><br>
            valor: <input type="text" name="valor" value="<?php echo $valor; ?>"><br>
            descricao: <input type="text" name="descricao" value="<?php echo $descricao; ?>"><br>
            <input type="submit" value="Salvar Alterações">
        </form>

        <br>
       
        <a href="index.php">Voltar para o Dashboard</a>
    </div>
    
</body>
</html>