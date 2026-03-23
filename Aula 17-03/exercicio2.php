<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercicio 2</h1>
        <form method="post">
            <div class="mb-3">
                <label for="nome1" class="form-label">Digite o nome do aluno: </label>
                <input type="text" id="nome1" name="nome1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota1_1" class="form-label">Digite a nota 1: </label>
                <input type="number" step="any" id="nota1_1" name="nota1_1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota2_1" class="form-label">Digite a nota 2: </label>
                <input type="number" step="any" id="nota2_1" name="nota2_1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota3_1" class="form-label">Digite a nota 3: </label>
                <input type="number" step="any" id="nota3_1" name="nota3_1" class="form-control" required="">
            </div>                        
            <div class="mb-3">
                <label for="nome2" class="form-label">Digite o nome do aluno: </label>
                <input type="text" id="nome2" name="nome2" class="form-control" required="">
            <div class="mb-3">
                <label for="nota1_2" class="form-label">Digite a nota 1: </label>
                <input type="number" step="any" id="nota1_2" name="nota1_2" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota2_2" class="form-label">Digite a nota 2: </label>
                <input type="number" step="any" id="nota2_2" name="nota2_2" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota3_2" class="form-label">Digite a nota 3: </label>
                <input type="number" step="any" id="nota3_2" name="nota3_2" class="form-control" required="">
            </div> 
            <div class="mb-3">  
                <label for="nome3" class="form-label">Digite o nome do aluno: </label>
                <input type="text" id="nome3" name="nome3" class="form-control" required="">
            <div class="mb-3">
                <label for="nota1_3" class="form-label">Digite a nota 1: </label>
                <input type="number" step="any" id="nota1_3" name="nota1_3" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota2_3" class="form-label">Digite a nota 2: </label>
                <input type="number" step="any" id="nota2_3" name="nota2_3" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota3_3" class="form-label">Digite a nota 3: </label>
                <input type="number" step="any" id="nota3_3" name="nota3_3" class="form-control" required="">
            </div> 
            <div class="mb-3">
                <label for="nome4" class="form-label">Digite o nome do aluno: </label>
                <input type="text" id="nome4" name="nome4" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota1_4" class="form-label">Digite a nota 1: </label>
                <input type="number" step="any" id="nota1_4" name="nota1_4" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota2_4" class="form-label">Digite a nota 2: </label>
                <input type="number" step="any" id="nota2_4" name="nota2_4" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota3_4" class="form-label">Digite a nota 3: </label>
                <input type="number" step="any" id="nota3_4" name="nota3_4" class="form-control" required="">
            </div> 
            <div class="mb-3">
                <label for="nome5" class="form-label">Digite o nome do aluno: </label>
                <input type="text" id="nome5" name="nome5" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota1_5" class="form-label">Digite a nota 1: </label>
                <input type="number" step="any" id="nota1_5" name="nota1_5" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota2_5" class="form-label">Digite a nota 2: </label>
                <input type="number" step="any" id="nota2_5" name="nota2_5" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nota3_5" class="form-label">Digite a nota 3: </label>
                <input type="number" step="any" id="nota3_5" name="nota3_5" class="form-control" required="">
            </div>            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $alunos = [];
                for($i = 1; $i < 6; $i++){
                    $nomes = $_POST["nome$i"];
                    $nota1 = $_POST["nota1_$i"];
                    $nota2 = $_POST["nota2_$i"];
                    $nota3 = $_POST["nota3_$i"];

                    $media = ($nota1 + $nota2 + $nota3) / 3;

                    $alunos[$nomes] = $media;
                }

                arsort($alunos);

                foreach ($alunos as $nomes => $media)
                    echo "<p>Nome: $nomes - Média: ".number_format($media, 2)."</p>";
            }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>