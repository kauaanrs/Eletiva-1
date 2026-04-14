<?php
    require_once('cabecalho.php');
?>

<h1>Alterar Categoria</h1>
    <form method="post">
        <div class="mb-3">
              <label for="descricao" class="form-label">Informe a descrição</label>
              <input type="text" id="descricao" name="descricao" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

<?php
    require_once('rodape.php');