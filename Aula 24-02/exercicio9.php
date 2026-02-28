<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 9 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercicio 9 </h1>
        <form method="post">
            <div class="mb-3">
                <label for="raio" class="form-label">Digite um valor para o tamanho do raio: </label>
                <input type="number" step="any" id="raio" name="raio" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $raio = $_POST['raio'];
                $area = M_PI * pow($raio, 2); // Pesquisei o M_PI para utilizar um número aproximado de pi que já existe em php 
                echo ("A área do cículo é de: $area");
            }
        
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>