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
                <h3>Livro 1</h3>
                <label for="livro1" class="form-label">Digite o nome do livro</label>
                <input type="text" id="livro1" name="livro1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="quantidade1" class="form-label">Quantidade em estoque</label>
                <input type="number" id="quantidade1" name="quantidade1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <h3>Livro 2</h3>
                <label for="livro2" class="form-label">Nome do livro</label>
                <input type="text" id="livro2" name="livro2" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="quantidade2" class="form-label">Quantidade em estoque</label>
                <input type="number" id="quantidade2" name="quantidade2" class="form-control" required="">
            </div>
            <div class="mb-3">
                <h3>Livro 3</h3>
                <label for="livro3" class="form-label">Nome do livro</label>
                <input type="text" id="livro3" name="livro3" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="quantidade3" class="form-label">Quantidade em estoque</label>
                <input type="number" id="quantidade3" name="quantidade3" class="form-control" required="">
            </div>
            <div class="mb-3">
                <h3>Livro 4</h3>
                <label for="livro4" class="form-label">Nome do livro</label>
                <input type="text" id="livro4" name="livro4" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="quantidade4" class="form-label">Quantidade em estoque</label>
                <input type="number" id="quantidade4" name="quantidade4" class="form-control" required="">
            </div>
            <div class="mb-3">
                <h3>Livro 5</h3>
                <label for="livro5" class="form-label">Nome do livro</label>
                <input type="text" id="livro5" name="livro5" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="quantidade5" class="form-label">Quantidade em estoque</label>
                <input type="text" id="quantidade5" name="quantidade5" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $livros = [];
                for($i = 1; $i < 6; $i++){
                    $livro = $_POST["livro$i"];
                    $quantidade = $_POST["quantidade$i"];

                    $livros[$livro] = $quantidade; 
                    if ($quantidade < 5){
                        echo "<p>ATENÇÃO ! A quantidade em estoque do livro $livro esta baixa !!</p>";
                    }
                }

                ksort($livros);

                foreach($livros as $livro => $quantidade){
                    echo "<p>Livro: $livro - Quantidade em estoque: $quantidade</p>";
                }
            }
        
        
        ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>