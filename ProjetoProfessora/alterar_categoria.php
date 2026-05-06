<?php
    require_once('cabecalho.php');
    require_once('conexao.php');
    $mensagem = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['descricao'];
        $id = $_GET['id'];
        try{
            $sql = "UPDATE categoria SET nome = ? WHERE id = ?";
            $stmt = $pdo->prepare($sql);
          if($stmt->execute([$nome, $id])){
            $mensagem = '<p>Alteração realizada!</p>';
          }else{
            $mensagem = '<p class=text-danger>Erro ao alterar ! Tente novamente</p>';
          }
        }catch(Exception $e){
          echo "Erro: ". $e->getMessage();
        }
      }
    try{
        $stmt = $pdo->prepare("SELECT * FROM categoria WHERE id = ?");
        $stmt->execute([$_GET['id']]);
        $resultado = $stmt->fetch();
    }catch(Exception $e){
        echo "Erro: ".$e->getMessage();
    }
?>

<h1>Alterar Categoria</h1>
    <form method="post" action="alterar_categoria.php?id=<?=$resultado['id']?>">
        <div class="mb-3">
              <label for="descricao" class="form-label">Informe a descrição</label>
              <input value="<?= $resultado['nome']?>" type="text" id="descricao" name="descricao" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <?php
      echo $mensagem; 
    ?>

<?php
    require_once('rodape.php');