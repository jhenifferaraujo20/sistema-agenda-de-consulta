<?php
include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];;
$sintomas = $_POST['sintomas'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$medico = $_POST['medico'];

$sqlAlterar = "UPDATE tb_agenda SET 
                nome = '{$nome}' , 
                telefone = '{$telefone}' , 
                idade = '{$idade}' ,
                sintomas = '{$sintomas}' , 
                data = '{$data}' ,
                hora = '{$hora}' ,
                medico = '{$medico}' 
                WHERE id = {$id}";

$resultado = mysqli_query($conexao , $sqlAlterar);

if($resultado){
    echo "Alterado com sucesso!<br>";
    echo "<a href='enviar.php'>Voltar</a>";
}else{
    echo "Ocorreu algum erro";
}

?>