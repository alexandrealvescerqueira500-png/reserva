<?php
use App\Item;
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/Menu.php");
include("../includes/rodape.php");
$id = $_GET['id'];
if (!$id) {
    die('ID do item não foi informado!');
}
$item = Item::buscarPorId($id);
?>
<main class="container">
    <form action="/reserva/action/action_item.php?action=alterar&id=<?= $id ?>" method="post">
        Descrição : <input type="text" name="descricao"  value="<?= $item->descricao?>" class="form-control"><br>
        Patrimônio * : <input type="text" name="patrimonio" value="<?= $item->patrimonio?>" required class="form-control"><br>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
</main>