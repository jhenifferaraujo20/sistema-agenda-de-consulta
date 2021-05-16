<?php 

include "conexao.php";

$id = $_GET['id'];

$sqlExcluir = "DELETE FROM tb_agenda WHERE id = {$id}";

$resultado = mysqli_query($conexao, $sqlExcluir);

if($resultado){
    echo "Excluído com sucesso <br>";
    echo "<a href='enviar.php'>Voltar</a>";
}else{
    echo "Ocorreu algum problema";
}
?>