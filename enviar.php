<?php 
if(isset($_POST['nome']) && $_POST['nome'] != ''){
    $paciente = [];

    $paciente['nome'] = $_POST['nome'];

    if(isset($_POST['telefone'])){
        $paciente['telefone'] = $_POST['telefone'];
    }else{
        $paciente['telefone'] = '';
    }

    if(isset($_POST['idade'])){
        $paciente['idade'] = $_POST['idade'];
    }else{
        $paciente['idade'] = '';
    }

    if(isset($_POST['sintomas'])){
        $paciente['sintomas'] = $_POST['sintomas'];
    }else{
        $paciente['sintomas'] = '';
    }

    if(isset($_POST['data'])){
        $paciente['data'] = $_POST['data'];
    }else{
        $paciente['data'] = '';
    }

    if(isset($_POST['hora'])){
        $paciente['hora'] = $_POST['hora'];
    }else{
        $paciente['hora'] = '';
    }

    if(isset($_POST['medico'])){
        $paciente['medico'] = $_POST['medico'];
    }else{
        $paciente['medico'] = '';
    }
}

include "conexao.php";

if(isset($paciente)){
    $sqlInserir = "INSERT INTO tb_agenda(nome, telefone, idade, sintomas, data, hora, medico
    ) VALUES(
        '{$paciente['nome']}',
        '{$paciente['telefone']}',
        '{$paciente['idade']}',
        '{$paciente['sintomas']}',
        '{$paciente['data']}',
        '{$paciente['hora']}',
        '{$paciente['medico']}'
    );";

    mysqli_query($conexao, $sqlInserir);
}

include "index.php";
?>