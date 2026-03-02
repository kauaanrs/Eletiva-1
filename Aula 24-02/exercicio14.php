<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 14</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercicio 14</h1>
        <form method="post">
            <div class="mb-3">
                <label for="km" class="form-label">Digite a distância em quilômetros a ser convertida: </label>
                <input type="number" step="any" id="km" name="km" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $km = $_POST['km'];
                $milhas = $km * 0.621371;
                echo $km."km é igual a ".$milhas." milhas";
            }
        
        ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>