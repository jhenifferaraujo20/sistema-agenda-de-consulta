<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Consulta</title>
    <link rel="stylesheet" href="bootstrap-5/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <img src="" alt="">
        <h1 class="text-center">agendamento de <br><strong>CONSULTA</strong></h1>
        <form action="">
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
                    <label for="data">DATA</label><br>
                    <input type="date" name="data" id="data" class="form-control" required>
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
    </div>

    <script src="bootstrp-5/bootstrap.bundle.min.js"></script>
</body>
</html>