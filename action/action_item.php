<?php

use App\Item;
require('../vendor/autoload.php');
$action = $_GET['action'];
$item = new Item();
switch($action){
    case 'cadastrar':
        $item->nome = $_POST['nome'];
        $item->descricao = $_POST['descricao'];
        $item->patrimonio = $_POST['patrimonio'];
        $item->cadastrar();
<<<<<<< HEAD
        header('location: /reserva/view/item/listar.php');
    break;
    case 'alterar':
        $item = Item::buscarPorId($_GET['id']);
        $item->nome = $_POST['nome'];
        $item->descricao = $_POST['descricao'];
        $item->patrimonio = $_POST['patrimonio'];
        $item->alterar();
        header('location: /reserva/view/item/listar.php');
=======
        
        header('location: /reserva/view/item/listar.php');
        echo "<pre>";
        print_r($item);
        echo "</pre>";
>>>>>>> a032ad8aecd08e850484080052dda1a27b7b891a
    break;    
    case 'excluir':
        $item->id = $_GET['id'];
        $item->excluir();
        header('location: /reserva/view/item/listar.php');
}