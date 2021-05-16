<?php 

$id = $_GET['id'];

include "conexao.php";
$sqlBuscar = "SELECT * FROM tb_agenda WHERE id={$id};";

$listaDeConsultas = mysqli_query($conexao , $sqlBuscar);

$nome  = $telefone = $idade = $sintomas = $data = $hora = $medico = "";

while($consulta = mysqli_fetch_assoc($listaDeConsultas)){
    $nome = $consulta['nome'];
    $telefone = $consulta['telefone'];
    $idade = $consulta['idade'];;
    $sintomas = $consulta['sintomas'];
    $data = $consulta['data'];
    $hora = $consulta['hora'];
    $medico = $consulta['medico'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Consulta</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <img src="" alt="">
        <h1 class="text-center text-white">agendamento de <strong>CONSULTA</strong></h1>
        <form action="alterar.php" method="POST">
            <input name="id" type="hidden" value="<?php echo $id;?>">
            <div class="row mt-3 mb-3">
                <div class="col-md-4">
                    <h4 class="text-white">DADOS DO PACIENTE</h4>
                    <label for="nome">NOME</label><br>
                    <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nome;?>" required>
                </div>
                <div class="col-md-4 align-self-end">
                    <label for="telefone">TELEFONE</label><br>
                    <input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo $telefone;?>" required>
                </div>
                <div class="col-md-4 align-self-end">
                    <label for="idade">IDADE</label><br>
                    <input type="number" name="idade" id="idade" min="1" max="100" class="form-control" value="<?php echo $idade;?>" required>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col">
                    <h4 class="text-white">DADOS PARA DIAGNÓSTICO</h4>
                    <label for="sintomas">SINTOMAS</label><br>
                    <textarea name="sintomas" id="sintomas" class="form-control" rows="4" value="<?php echo $sintomas;?>" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="data">DATA</label><br>
                    <input type="date" name="data" id="data" class="form-control" value="<?php echo $data;?>" required>
                </div>
                <div class="col-md-3">
                    <label for="hora">HORA</label><br>
                    <input type="time" name="hora" id="hora" class="form-control" value="<?php echo $hora;?>" required onchange="Periodo();">
                </div>
                <div class="col-md-3">
                    <label for="periodo">PERÍODO</label><br>
                    <input type="text" id="periodo" name="periodo" class="form-control" readonly>
                </div>
                <div class="col-md-3">
                    <label for="medico">MÉDICO</label><br>
                    <select name="medico" id="medico" class="form-select">
                        <option value="José Souza" <?php if($medico == 'José Souza'){ echo "selected "; } ?>>Dr. José Souza</option>
                        <option value="Maria Luísa" <?php if($medico == 'Maria Luísa'){ echo "selected "; } ?>>Dra. Maria Luísa</option>
                        <option value="Renato Ferreira" <?php if($medico == 'Renato Ferreira'){ echo "selected "; } ?>>Dr. Renato Ferreira</option>
                        <option value="Marklene Rossi" <?php if($medico == 'Marklene Rossi'){ echo "selected "; } ?>>Dra. Marklene Rossi</option>
                        <option value="Alessandra Negrini" <?php if($medico == 'Alessandra Negrini'){ echo "selected "; } ?>>Dra. Alessandra Negrini</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-2 btn">
                    <button type="submit" class="">AGENDAR</button>
                </div>
            </div>
        </form>
    </div>

    <script src="bootstrp-5/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>