<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercicio 3</h1>
        <form method="post">
            <div class="mb-3">
                <label for="str1" class="form-label">Digite uma frase ou uma palavra: </label>
                <input type="text" id="str1" name="str1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="str2" class="form-label">Digite uma palavra: </label>
                <input type="text" id="str2" name="str2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $str1 = $_POST['str1'];
                $str2 = $_POST['str2'];

                if (str_contains($str1, $str2))
                    echo "$str1 contém $str2 nela";
                else
                    echo "$str1 não contém a palavra $str2 nela";
            }
        
        
        ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>