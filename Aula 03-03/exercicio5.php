<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercicio 5</h1>
        <form method="post">
            <div class="mb-3">
                <label for="mes" class="form-label">Digite o número de um mês: </label>
                <input type="number" id="mes" name="mes" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mes = $_POST["mes"];
            switch ($mes) {
                case 1:
                    echo "Janeiro";
                    break;
                case 2:
                    echo "Fevereiro";
                    break;
                case 3:
                    echo "Março";
                    break;
                case 4:
                    echo "Abril";
                    break;
                case 5:
                    echo "Maio";
                    break;
                case 6:
                    echo "Junho";
                    break;
                case 7:
                    echo "Julho";
                    break;
                case 8:
                    echo "Agosto";
                    break;
                case 9:
                    echo "Setembro";
                    break;
                case 10:
                    echo "Outubro";
                    break;
                case 11:
                    echo "Novembro";
                    break;
                case 12:
                    echo "Dezembro";
                    break;
                default:
                    echo "Valor inválido";
            }
        }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>