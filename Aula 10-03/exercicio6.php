<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1></h1>
        <form method="post">
            <div class="mb-3">
                <label for="num" class="form-label">Digite um número decimal: </label>
                <input type="number" step="any" id="num" name="num" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $num = $_POST['num'];
                echo "<p>$num arredondado pra cima é: ". ceil($num)."</p>";
                echo "<p>$num arredondado pra baixo é: ". floor($num)."</p>";
                echo "<p>$num arredondado de forma padrão é: ". round($num)."</p>";
            }
        
        
        ?>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>