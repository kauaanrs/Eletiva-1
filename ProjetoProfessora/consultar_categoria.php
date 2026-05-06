<?php
    require_once('cabecalho.php');
    require_once('conexao.php');
    try{
        $stmt = $pdo->prepare('SELECT * FROM categoria WHERE id = ?');
        $stmt->execute([$_GET['id']]);
        $resultado = $stmt->fetch(); 
    }catch(Exception $e){
        echo "Erro: ". $e->getMessage();
    }
?>

<h1>Consultar Categoria</h1>
    <form method="post" action="consultar_categoria.php?id=<?= $resultado['id']?>">
        <div class="mb-3">
              <p><strong>Descrição:</strong> <?= $resultado['nome']?> </p>
        </div>
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $id = $_GET['id'];
                try{
                    $sql = "DELETE FROM categoria WHERE id = ?";
                    $stmt = $pdo->prepare($sql);
                    if($stmt->execute([$id])){
                        header('Location: categorias.php');
                    }
                    else{
                        echo "Erro ao excluir!";
                    }
                }catch(Exception $e){
                    echo "Erro: ". $e->getMessage();
                }
            }
        ?>

<?php
    require_once('rodape.php');