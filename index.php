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
        <form action="enviar.php" method="POST">
            <div class="row mt-3 mb-3">
                <div class="col-md-4">
                    <h4 class="text-white">DADOS DO PACIENTE</h4>
                    <label for="nome">NOME</label><br>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <div class="col-md-4 align-self-end">
                    <label for="telefone">TELEFONE</label><br>
                    <input type="text" name="telefone" id="telefone" class="form-control" required>
                </div>
                <div class="col-md-4 align-self-end">
                    <label for="idade">IDADE</label><br>
                    <input type="number" name="idade" id="idade" min="1" max="100" class="form-control" required>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col">
                    <h4 class="text-white">DADOS PARA DIAGNÓSTICO</h4>
                    <label for="sintomas">SINTOMAS</label><br>
                    <textarea name="sintomas" id="sintomas" class="form-control" rows="4" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="data">DATA</label><br>
                    <input type="date" name="data" id="data" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="hora">HORA</label><br>
                <input type="time" name="hora" id="hora" class="form-control" min="08:00" max="18:00" required onchange="Periodo();">
                </div>
                <div class="col-md-3">
                    <label for="periodo">PERÍODO</label><br>
                    <input type="text" id="periodo" name="periodo" class="form-control" readonly>
                </div>
                <div class="col-md-3">
                    <label for="medico">MÉDICO</label><br>
                    <select name="medico" id="medico" class="form-select">
                        <option value="">Selecione...</option>
                        <option value="José Souza">Dr. José Souza</option>
                        <option value="Maria Luísa">Dra. Maria Luísa</option>
                        <option value="Renato Ferreira">Dr. Renato Ferreira</option>
                        <option value="Marklene Rossi">Dra. Marklene Rossi</option>
                        <option value="Alessandra Negrini">Dra. Alessandra Negrini</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-2 btn">
                    <button type="submit" class="">AGENDAR</button>
                </div>
            </div>
        </form>

        <div class="table-responsive mt-5">
            <table class="table table-light table-hover">
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>TELEFONE</th>
                        <th>IDADE</th>
                        <th>SINTOMAS</th>
                        <th>DATA</th>
                        <th>HORA</th>
                        <th>MÉDICO</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $sqlBusca = "SELECT * FROM tb_agenda";
                            $resultado = mysqli_query($conexao, $sqlBusca);

                            $listaConsultas = [];

                            while($consulta = mysqli_fetch_assoc($resultado)) {
                                $listaConsultas[] = $consulta;
                            }

                            foreach($listaConsultas as $consulta): ?>
                            <tr>
                                <td><?php echo $consulta['nome']; ?></td>
                                <td><?php echo $consulta['telefone']; ?></td>
                                <td><?php echo $consulta['idade']; ?></td>
                                <td><?php echo $consulta['sintomas']; ?></td>
                                <?php $dataBrasil = date('d/m/Y', strtotime($consulta['data'])); ?>
                                <td><?php echo $dataBrasil; ?></td>
                                <td><?php echo $consulta['hora']; ?></td>
                                <td><?php echo $consulta['medico']; ?></td>
                                <?php echo "<td><a href='formulario-alterar.php?id={$consulta['id']}' class='btn btn-success'>Alterar</a> "; ?>
                                <?php echo "<a href='excluir.php?id={$consulta['id']}' class='btn btn-danger'>Excluir</a></td>"; ?>
                            </tr>
                            <?php endforeach; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="bootstrp-5/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>