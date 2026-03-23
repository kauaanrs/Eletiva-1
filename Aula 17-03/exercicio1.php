<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercicio 1</h1>
        <form method="post">
            <div class="mb-3">
                <label for="nome1" class="form-label">Digite o nome do contato: </label>
                <input type="text" id="nome1" name="nome1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="tel1" class="form-label">Digite o número de telefone: </label>
                <input type="number" id="tel1" name="tel1" class="form-control" required="">
            </div>
                        <div class="mb-3">
                <label for="nome2" class="form-label">Digite o nome do contato: </label>
                <input type="text" id="nome2" name="nome2" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="tel2" class="form-label">Digite o número de telefone: </label>
                <input type="number" id="tel2" name="tel2" class="form-control" required="">
            </div>
            <div class="mb-3">  
                <label for="nome3" class="form-label">Digite o nome do contato: </label>
                <input type="text" id="nome3" name="nome3" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="tel3" class="form-label">Digite o número de telefone: </label>
                <input type="number" id="tel3" name="tel3" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nome4" class="form-label">Digite o nome do contato: </label>
                <input type="text" id="nome4" name="nome4" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="tel4" class="form-label">Digite o número de telefone: </label>
                <input type="number" id="tel4" name="tel4" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="nome5" class="form-label">Digite o nome do contato: </label>
                <input type="text" id="nome5" name="nome5" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="tel5" class="form-label">Digite o número de telefone: </label>
                <input type="number" id="tel5" name="tel5" class="form-control" required="">
            </div>            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $contatos = [];
                $verificaTel = [];
                for ($i = 1; $i < 6; $i++){
                    $nome[] = $_POST["nome$i"];
                    $telefone[] = $_POST["tel$i"];
                    }
                
                for ($i = 0; $i < 5; $i++){
                    $nome[$i] = ucfirst($nome[$i]);
                    }               

                for ($i = 0; $i < 5; $i++){
                    if(array_key_exists($nome[$i], $contatos) || in_array($telefone[$i], $verificaTel)){
                        echo "<p>Nome duplicado</p>";  
                    }
                    else{
                        $contatos[$nome[$i]] = $telefone[$i];
                        $verificaTel[] = $telefone[$i];
                    }                  
                }
                ksort($contatos);
                foreach($contatos as $chave => $valor){
                    echo "<p>Contato: $chave \tTelefone: $valor</p>";
                } 
            }
        
        ?>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>