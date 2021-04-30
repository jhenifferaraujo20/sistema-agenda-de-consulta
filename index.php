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
        <h1 class="text-center">agendamento de <br><strong>CONSULTA</strong></h1>
        <form action="enviar.php" method="GET">
            <div class="row">
                <div class="col-md-4">
                    <h4>DADOS DO PACIENTE</h4>
                    <label for="nome">NOME</label><br>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <div class="col-md-4 align-self-end">
                    <label for="telefone">TELEFONE</label><br>
                    <input type="text" name="telefone" id="telefone" class="form-control" required>
                </div>
                <div class="col-md-4 align-self-end">
                    <label for="idade">IDADE</label><br>
                    <input type="number" name="idade" id="idade" placeholder="20" min="1" max="100" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>DADOS PARA DIAGNÓSTICO</h4>
                    <label for="sintomas">SINTOMAS</label><br>
                    <textarea name="sintomas" id="sintomas" class="form-control" rows="5" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="datas">DATA</label><br>
                    <input type="date" name="datas" id="datas" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="hora">HORA</label><br>
                    <input type="time" name="hora" id="hora" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="medico">MÉDICO</label><br>
                    <select name="medico" id="medico" class="form-select">
                        <option value="José Souza">Dr. José Souza</option>
                        <option value="Maria Luísa">Dra. Maria Luísa</option>
                        <option value="Renato Ferreira">Dr. Renato Ferreira</option>
                        <option value="Marklene Rossi">Dra. Marklene Rossi</option>
                        <option value="Alessandra Negrini">Dra. Alessandra Negrini</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col btn">
                        <button type="submit" class="">AGENDAR</button>
                    </div>
                </div>
            </div>
        </form>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th colspan="3">DADOS PESSOAIS</th>
                    <th colspan="4">DADOS PARA DIAGNÓSTICO</th>
                </tr>
                <tr>
                    <th>NOME</th>
                    <th>TELEFONE</th>
                    <th>IDADE</th>
                    <th>SINTOMAS</th>
                    <th>DATA</th>
                    <th>HORA</th>
                    <th>MÉDICO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $sqlBusca = "SELECT * FROM tb_consulta";
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
                            <td><?php echo $consulta['datas']; ?></td>
                            <td><?php echo $consulta['hora']; ?></td>
                            <td><?php echo $consulta['medico']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="bootstrp-5/bootstrap.bundle.min.js"></script>
</body>
</html>