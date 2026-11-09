<?php

use App\Servidor;

include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");
include("../includes/rodape.php");

$servidores = Servidor::listar();

?>

<main class="container">

    <h2 class="text-center">Lista de Servidores</h2>

    <br>

    <a
        href="/reserva/view/servidor/cadastrar.php"
        class="btn btn-success btn-sm"
    >
        Cadastrar
    </a>

    <br><br>

    <table class="table table-hover table-sm">

        <thead class="table-dark">

            <tr>

                <th>ID</th>
                <th>Nome</th>
                <th>Matrícula</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Data Nascimento</th>
                <th>Ações</th>

            </tr>

        </thead>

        <tbody>

            <?php foreach ($servidores as $servidor): ?>

                <tr>

                    <td><?= $servidor->id ?></td>
                    <td><?= $servidor->nome ?></td>
                    <td><?= $servidor->matricula ?></td>
                    <td><?= $servidor->cpf ?></td>
                    <td><?= $servidor->telefone ?></td>
                    <td><?= $servidor->email ?></td>
                    <td><?= $servidor->endereco ?></td>
                    <td><?= $servidor->dtn ?></td>

                    <td class="text-nowrap">

                        <a
                            href="/reserva/view/servidor/alterar.php?id=<?= $servidor->id ?>"
                            class="btn btn-primary btn-sm"
                        >
                            Editar
                        </a>

                        <button
                            type="button"
                            class="btn btn-danger btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#modalExcluir<?= $servidor->id ?>"
                        >
                            Excluir
                        </button>

                        <div
                            class="modal fade"
                            id="modalExcluir<?= $servidor->id ?>"
                            tabindex="-1"
                            aria-labelledby="modalExcluirLabel<?= $servidor->id ?>"
                            aria-hidden="true"
                        >

                            <div class="modal-dialog">

                                <div class="modal-content">

                                    <div class="modal-header">

                                        <h5
                                            class="modal-title"
                                            id="modalExcluirLabel<?= $servidor->id ?>"
                                        >
                                            Confirmar exclusão
                                        </h5>

                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Fechar"
                                        ></button>

                                    </div>

                                    <div class="modal-body">

                                        Deseja realmente excluir o servidor
                                        <strong><?= $servidor->nome ?></strong>?

                                    </div>

                                    <div class="modal-footer">

                                        <button
                                            type="button"
                                            class="btn btn-secondary btn-sm"
                                            data-bs-dismiss="modal"
                                        >
                                            Cancelar
                                        </button>

                                        <a
                                            href="/reserva/action/action_servidor.php?action=excluir&id=<?= $servidor->id ?>"
                                            class="btn btn-danger btn-sm"
                                        >
                                            Sim, excluir
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </td>

                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</main>