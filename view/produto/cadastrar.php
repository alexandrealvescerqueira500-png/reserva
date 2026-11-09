<?php
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/Menu.php");
include("../includes/rodape.php");

?>
<main class="container">
    <form action="/reserva/action/action_produto.php?action=cadastrar" method="post">
        Nome * : <input type="text" name="nome" required class="form-control"><br>
        Descrição : <input type="text" name="descricao" class="form-control"><br>
        Codigo * : <input type="number" name="codigo" required class="form-control"><br>
        Marca * : <input type="text" name="marca" required class="form-control"><br>
        Data Validade * : <input type="date" name="dtn_validade" required class="form-control"><br>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
</main>