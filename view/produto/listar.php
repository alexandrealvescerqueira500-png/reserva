<?php

use App\Produto;
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");
include("../includes/rodape.php");

$produtos = Produto::listar();
 //echo "<pre>";
 //print_r($produtos);
// echo "</pre>";
?>
<main class="container">
    <h2 class="text-center">Lista de Produtos</h2>
    <a href="/reserva/view/produto/cadastrar.php" class="btn btn-success">Cadastrar Produto</a>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th colspan="2">Codigo</th>
                <th colspan="2">Marca</th>
                <th colspan="2">Data Validade</th>
            </tr>
        </thead>
            <?php
            foreach($produtos as $produto){
            ?>
                <tr>
                <td><?= $produto->id ?></td>
                <td><?= $produto->nome ?></td>
                <td><?= $produto->descricao ?></td>
                <td><?= $produto->codigo ?></td>
                <td><?= $produto->marca ?></td>
                <td><?= $produto->dtn_validade ?></td>
                <td> <a href='/RESERVA_RECURSOS/view/produto/editar.php?id=<?= $produto->id ?>'>
                <button class='btn btn-primary'>Editar</button> </a> 

                <a href='/reserva/action/action_produto.php?action=excluir&id=<?= $produto->id ?>'> 
                <button class="btn btn-danger" onclick="return confirm('Deseja realmente excluir esse Produto?');">Excluir</button> </td></a>
                </tr>
            <?php
            }
            ?>
    </table>
</main>