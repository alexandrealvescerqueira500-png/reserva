<?php

use App\Produto;
require('../vendor/autoload.php');
$action = $_GET['action'];
$produto = new Produto();
switch($action){
    case 'cadastrar':
        $produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->codigo = $_POST['codigo'];
        $produto->marca = $_POST['marca'];
        $produto->dtn_validade = $_POST['dtn_validade'];
        $produto->cadastrar();
        header('location: /reserva/view/produto/listar.php');
    break;    
    case 'excluir':
        $produto->id = $_GET['id'];
        $produto->excluir();
        header('location: /reserva/view/produto/listar.php');
}