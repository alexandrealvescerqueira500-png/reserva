<?php

use App\Emprestimo;

require('../vendor/autoload.php');

$action = $_GET['action'];
$emprestimo = new Emprestimo();

switch ($action) {
    case 'cadastrar':
        $emprestimo->id_item = $_POST['id_item'];
        $emprestimo->id_servidor = $_POST['id_servidor'];
        $emprestimo->data_emprestimo = str_replace('T', ' ', $_POST['data_emprestimo']);
        if (strlen($emprestimo->data_emprestimo) === 16) {
            $emprestimo->data_emprestimo .= ':00';
        }
        $emprestimo->data_devolucao = empty($_POST['data_devolucao'])
            ? null
            : str_replace('T', ' ', $_POST['data_devolucao']);
        $emprestimo->cadastrar();

        header('Location: /reserva/view/emprestimo/listar.php');
        break;

    case 'alterar':
        $emprestimo = Emprestimo::buscarPorId($_GET['id']);
        $emprestimo->id_item = $_POST['id_item'];
        $emprestimo->id_servidor = $_POST['id_servidor'];
        $emprestimo->data_emprestimo = str_replace('T', ' ', $_POST['data_emprestimo']);
        if (strlen($emprestimo->data_emprestimo) === 16) {
            $emprestimo->data_emprestimo .= ':00';
        }
        $emprestimo->data_devolucao = empty($_POST['data_devolucao'])
            ? null
            : str_replace('T', ' ', $_POST['data_devolucao']);
        $emprestimo->alterar();

        header('Location: /reserva/view/emprestimo/listar.php');
        break;

    case 'excluir':
        $emprestimo->id = $_GET['id'];
        $emprestimo->excluir();

        header('Location: /reserva/view/emprestimo/listar.php');
        break;
}
