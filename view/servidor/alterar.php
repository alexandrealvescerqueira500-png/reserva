<?php

use App\Servidor;

include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/Menu.php");
include("../includes/rodape.php");

$id = $_GET['id'];
if (!$id) {
    die('ID do servidor não foi informado!');
}

$servidor = Servidor::buscarPorId($id);
?>
<main class="container">
    <form action="/reserva/action/action_servidor.php?action=alterar&id=<?= $id ?>" method="post">
        Nome * : <input type="text" name="nome" value="<?= htmlspecialchars($servidor->nome, ENT_QUOTES, 'UTF-8') ?>" required class="form-control"><br>
        Matrícula * : <input type="text" name="matricula" value="<?= htmlspecialchars($servidor->matricula, ENT_QUOTES, 'UTF-8') ?>" required class="form-control"><br>
        CPF * : <input type="text" name="cpf" value="<?= htmlspecialchars($servidor->cpf, ENT_QUOTES, 'UTF-8') ?>" required class="form-control"><br>
        Telefone * : <input type="text" name="telefone" value="<?= htmlspecialchars($servidor->telefone, ENT_QUOTES, 'UTF-8') ?>" required class="form-control"><br>
        E-mail * : <input type="email" name="email" value="<?= htmlspecialchars($servidor->email, ENT_QUOTES, 'UTF-8') ?>" required class="form-control"><br>
        Endereço * : <input type="text" name="endereco" value="<?= htmlspecialchars($servidor->endereco, ENT_QUOTES, 'UTF-8') ?>" required class="form-control"><br>
        Data de Nascimento * : <input type="date" name="dtn" value="<?= htmlspecialchars($servidor->dtn, ENT_QUOTES, 'UTF-8') ?>" required class="form-control"><br>
        <input type="submit" value="Salvar" class="btn btn-primary">
    </form>
</main>
