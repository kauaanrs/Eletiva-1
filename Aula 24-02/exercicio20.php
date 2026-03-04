<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 20</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercicio 20</h1>
        <form method="post">
            <div class="mb-3">
                <label for="distancia" class="form-label">Insira uma distância em km: </label>
                <input type="number" step="any" id="distancia" name="distancia" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="tempo" class="form-label">Inserir o tempo de viagem em horas: </label>
                <input type="number" step="any" id="tempo" name="tempo" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $distancia = $_POST["distancia"];
                $tempo = $_POST["tempo"];
                $velocidadeMedia = $distancia / $tempo;
                echo "A velocidade média é de ".number_format($velocidadeMedia, 2, ",", ".")."km/h";
            }
        
        ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>