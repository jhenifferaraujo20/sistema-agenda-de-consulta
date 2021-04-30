<?php 
if(isset($_GET['nome']) && $_GET['nome'] != ''){
    $paciente = [];

    $paciente['nome'] = $_GET['nome'];

    if(isset($_GET['telefone'])){
        $paciente['telefone'] = $_GET['telefone'];
    }else{
        $paciente['telefone'] = '';
    }

    if(isset($_GET['idade'])){
        $paciente['idade'] = $_GET['idade'];
    }else{
        $paciente['idade'] = '';
    }

    if(isset($_GET['sintomas'])){
        $paciente['sintomas'] = $_GET['sintomas'];
    }else{
        $paciente['sintomas'] = '';
    }

    if(isset($_GET['datas'])){
        $paciente['datas'] = $_GET['datas'];
    }else{
        $paciente['datas'] = '';
    }

    if(isset($_GET['hora'])){
        $paciente['hora'] = $_GET['hora'];
    }else{
        $paciente['hora'] = '';
    }

    if(isset($_GET['medico'])){
        $paciente['medico'] = $_GET['medico'];
    }else{
        $paciente['medico'] = '';
    }
}

include "conexao.php";

if(isset($paciente)){
    $sqlInserir = "INSERT INTO tb_consulta(nome, telefone, idade, sintomas, datas, hora, medico
    ) VALUES(
        '{$paciente['nome']}',
        '{$paciente['telefone']}',
        '{$paciente['idade']}',
        '{$paciente['sintomas']}',
        '{$paciente['datas']}',
        '{$paciente['hora']}',
        '{$paciente['medico']}'
    );";

    mysqli_query($conexao, $sqlInserir);
}

include "index.php";
?>