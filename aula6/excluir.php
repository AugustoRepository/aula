
<?php 
session_start();
include('conexao.php');

if(isset($_GET['nome'])){
    
    $nome = $_GET['nome'];
    
    $sql = "DELETE from produto where nome = '$nome'";

    if($conn->query($sql) === true){
        echo "Registro excluido com sucesso!";
        echo "<br><a href='index.php'>Voltar para o Dashboard</a>";                
    }else{
        echo "Registro excluido com erro!" . $conn->error;
    }
}
else{
    echo "Nome completo não existe";
}
    $conn->close();
?>