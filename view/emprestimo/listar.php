<?php

use App\Emprestimo;
use App\Item;
use App\Servidor;

include("../../vendor/autoload.php");

$emprestimos = Emprestimo::listar();

include("../includes/cabecalho.php");
include("../includes/Menu.php");

?>

<main class="container">
    <h2 class="text-center">Lista de Empréstimos</h2>

    <?php if (isset($_GET['sucesso'])): ?>
        <div class="alert alert-success" role="alert">Empréstimo cadastrado com sucesso.</div>
    <?php elseif (isset($_GET['alterado'])): ?>
        <div class="alert alert-success" role="alert">Empréstimo alterado com sucesso.</div>
    <?php endif; ?>

    <a href="/reserva/view/emprestimo/cadastrar.php" class="btn btn-success">Cadastrar Empréstimo</a>

    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Item (ID)</th>
                <th>Servidor (ID)</th>
                <th>Data do empréstimo</th>
                <th>Data da devolução</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emprestimos as $emprestimo): ?>
                <?php
                $item = Item::buscarPorId($emprestimo->id_item);
                $servidor = Servidor::buscarPorId($emprestimo->id_servidor);
                ?>
                <tr>
                    <td><?= (int) $emprestimo->id ?></td>
                    <td>
                        <?= (int) $emprestimo->id_item ?> -
                        <?= $item ? htmlspecialchars($item->nome, ENT_QUOTES, 'UTF-8') : 'Item não encontrado' ?>
                    </td>
                    <td>
                        <?= (int) $emprestimo->id_servidor ?> -
                        <?= $servidor ? htmlspecialchars($servidor->nome, ENT_QUOTES, 'UTF-8') : 'Servidor não encontrado' ?>
                    </td>
                    <td><?= htmlspecialchars($emprestimo->data_emprestimo, ENT_QUOTES, 'UTF-8') ?></td>
                    <td>
                        <?= $emprestimo->data_devolucao
                            ? htmlspecialchars($emprestimo->data_devolucao, ENT_QUOTES, 'UTF-8')
                            : 'Pendente' ?>
                    </td>
                    <td>
                        <a
                            href="/reserva/view/emprestimo/alterar.php?id=<?= (int) $emprestimo->id ?>"
                            class="btn btn-primary btn-sm"
                        >Editar</a>
                        <a
                            href="/reserva/action/action_emprestimo.php?action=excluir&id=<?= (int) $emprestimo->id ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Deseja realmente excluir este empréstimo?');"
                        >Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php include("../includes/rodape.php"); ?>
