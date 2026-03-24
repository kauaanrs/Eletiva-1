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
                <h3>Produto 1</h3>
                <label for="codigo1" class="form-label">Digite o código do produto: </label>
                <input type="number" id="codigo1" name="codigo1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nome1" class="form-label">Digite o nome do produto: </label>
                <input type="text" id="nome1" name="nome1" class="form-control">
            </div>
            <div class="mb-3">
                <label for="preco1" class="form-label">Digite o preço do produto: </label>
                <input type="number" step="any" id="preco1" name="preco1" class="form-control" required="">
            </div>
            
            <div class="mb-3">
                <h3>Produto 2</h3>
                <label for="codigo2" class="form-label">Digite o código do produto: </label>
                <input type="number" id="codigo2" name="codigo2" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nome2" class="form-label">Digite o nome do produto: </label>
                <input type="text" id="nome2" name="nome2" class="form-control">
            </div>
            <div class="mb-3">
                <label for="preco2" class="form-label">Digite o preço do produto: </label>
                <input type="number" step="any" id="preco2" name="preco2" class="form-control" required="">
            </div>           
    
            <div class="mb-3">
                <h3>Produto 3</h3>
                <label for="codigo3" class="form-label">Digite o código do produto: </label>
                <input type="number" id="codigo3" name="codigo3" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nome3" class="form-label">Digite o nome do produto: </label>
                <input type="text" id="nome3" name="nome3" class="form-control">
            </div>
            <div class="mb-3">
                <label for="preco3" class="form-label">Digite o preço do produto: </label>
                <input type="number" step="any" id="preco3" name="preco3" class="form-control" required="">
            </div>

            <div class="mb-3">
                <h3>Produto 4</h3>
                <label for="codigo4" class="form-label">Digite o código do produto: </label>
                <input type="number" id="codigo4" name="codigo4" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nome4" class="form-label">Digite o nome do produto: </label>
                <input type="text" id="nome4" name="nome4" class="form-control">
            </div>
            <div class="mb-3">
                <label for="preco4" class="form-label">Digite o preço do produto: </label>
                <input type="number" step="any" id="preco4" name="preco4" class="form-control" required="">
            </div>

            <div class="mb-3">
                <h3>Produto 5</h3>
                <label for="codigo5" class="form-label">Digite o código do produto: </label>
                <input type="number" id="codigo5" name="codigo5" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nome5" class="form-label">Digite o nome do produto: </label>
                <input type="text" id="nome5" name="nome5" class="form-control">
            </div>
            <div class="mb-3">
                <label for="preco5" class="form-label">Digite o preço do produto: </label>
                <input type="number" step="any" id="preco5" name="preco5" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $produtos = [];
                $nomesValores = [];
                for($i = 1; $i < 6; $i++){
                    $nomes[] = $_POST["nome$i"];
                    $codigos[] = $_POST["codigo$i"];
                    $precos[] = $_POST["preco$i"]; 

                    $nomesValores[$nomes] = $precos;
                    $produtos[$codigos] = $nomesValores; 
                }
                foreach($produtos as $codigos => $nomesValores){
                    echo "<p>Produto: $codigos - $nomesValores</p>";
                }

            }
        
        
        ?>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>