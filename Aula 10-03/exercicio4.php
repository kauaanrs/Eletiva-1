<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercicio 4</h1>
        <form method="post">
            <div class="mb-3">
                <label for="dia" class="form-label">Digite um dia</label>
                <input type="number" id="dia" name="dia" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="mes" class="form-label">Digite um mês</label>
                <input type="number" id="mes" name="mes" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="ano" class="form-label">Digite um ano</label>
                <input type="number" id="ano" name="ano" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $dia = $_POST['dia'];
                $mes = $_POST['mes'];
                $ano = $_POST['ano'];

                if (checkdate($mes, $dia, $ano)){
                    $diaFormatado = str_pad($dia, 2, "0", STR_PAD_LEFT);
                    $mesFormatado = str_pad($mes, 2, "0", STR_PAD_LEFT);
                    $anoFormatado = str_pad($ano, 4, "0", STR_PAD_LEFT);
                    echo "$diaFormatado/$mesFormatado/$anoFormatado";
                }
                else
                    echo "Data inválida !";
            }
        
        
        ?>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>