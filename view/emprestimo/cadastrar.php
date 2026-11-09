<?php

include("../../vendor/autoload.php");

include("../includes/cabecalho.php");
include("../includes/Menu.php");

?>

<main class="container">
    <h2 class="text-center">Cadastrar Empréstimo</h2>

    <?php if (isset($_GET['sucesso'])): ?>
        <div class="alert alert-success" role="alert">
            Empréstimo cadastrado com sucesso.
        </div>
    <?php endif; ?>

    <form action="/reserva/action/action_emprestimo.php?action=cadastrar" method="post">
        <div class="mb-3">
            <label for="id_item" class="form-label">ID do item:</label>
            <input type="number" id="id_item" name="id_item" min="1" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="id_servidor" class="form-label">ID do servidor:</label>
            <input type="number" id="id_servidor" name="id_servidor" min="1" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="data_emprestimo" class="form-label">Data do empréstimo:</label>
            <input type="datetime-local" id="data_emprestimo" name="data_emprestimo" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="data_devolucao" class="form-label">Data da devolução:</label>
            <input type="datetime-local" id="data_devolucao" name="data_devolucao" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="/reserva/view/emprestimo/listar.php" class="btn btn-secondary">Ver empréstimos</a>
    </form>
</main>

<?php include("../includes/rodape.php"); ?>
