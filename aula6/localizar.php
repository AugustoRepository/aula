<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Busca</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <?php
        session_start(); 
        include('conexao.php');

        if (isset($_POST['localizar'])) { 
            $termo = $_POST['localizar']; 

            $sql = "SELECT * FROM produto WHERE nome LIKE '%$termo%'";
            

            $result = $conn->query($sql); 

            if ($result->num_rows > 0) { 
                echo "<h2>Resultados da Busca:</h2>"; 
                while ($row = $result->fetch_assoc()) { 
                    echo "<div class='result'>";
                    echo "<br><strong>idNome:</strong> " . $row["id"] . "<br>"; 
                    echo "<strong>nome:</strong> " . $row["nome"] . "<br>"; 
                    echo "<strong>valor:</strong> " . $row["valor"] . "<br>"; 
                    echo "<strong>descricao:</strong> " . $row["descricao"] . "<br>"; 
                    echo "<a href='excluir.php?nome=" . $row["nome"] . "'>Excluir</a>"; 
                    
                    echo "<a href='editar.php?id=" . $row["id"] . "'>Editar</a><br>";
                    echo "</div>"; 
                }
            } else {
                echo "Nenhum resultado encontrado."; 
            }
        } else {
            echo "Termo de busca não especificado."; 
        }
        $conn->close(); 
        ?>
        <br>
        <a href="index.php">Voltar para o Dashboard</a> 
    </div>
</body>
</html>