<?php
    require_once('cabecalho.php');
?>

<h2>Categorias</h2>
    <a href="nova_categoria.php" class="btn btn-success mb-3">Novo Registro</a>
    <table class="table table-hover table-striped">
    <thead>
        <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        
        <tr>
            <td>1</td>
            <td>Exemplo</td>
            <td class="d-flex gap-2">
            <a href="alterar_categoria.php" class="btn btn-sm btn-warning">Editar</a>
            <a href="consultar_categoria.php" class="btn btn-sm btn-info">Consultar</a>
            </td>
        </tr>
        
        <tr>
            <td>2</td>
            <td>Exemplo</td>
            <td class="d-flex gap-2">
            <a href="#" class="btn btn-sm btn-warning">Editar</a>
            <a href="#" class="btn btn-sm btn-info">Consultar</a>
            </td>
        </tr>
        
        <tr>
            <td>3</td>
            <td>Exemplo</td>
            <td class="d-flex gap-2">
            <a href="#" class="btn btn-sm btn-warning">Editar</a>
            <a href="#" class="btn btn-sm btn-info">Consultar</a>
            </td>
        </tr>
        
        <tr>
            <td>4</td>
            <td>Exemplo</td>
            <td class="d-flex gap-2">
            <a href="#" class="btn btn-sm btn-warning">Editar</a>
            <a href="#" class="btn btn-sm btn-info">Consultar</a>
            </td>
        </tr>
        
        <tr>
            <td>5</td>
            <td>Exemplo</td>
            <td class="d-flex gap-2">
            <a href="#" class="btn btn-sm btn-warning">Editar</a>
            <a href="#" class="btn btn-sm btn-info">Consultar</a>
            </td>
        </tr>
        
    </tbody>
    </table>

<?php
    require_once('rodape.php');