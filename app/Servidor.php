<?php
namespace App;
use PDO;
class Servidor
{
    public $id;
    public $nome;
    public $matricula;
    public $cpf;
    public $telefone;
    public $email;
    public $endereco;
    public $dtn;

    public function cadastrar()
    {

<<<<<<< HEAD
        $db = new DataBase('servidor');
=======
        $db = new DataBase();
>>>>>>> a032ad8aecd08e850484080052dda1a27b7b891a
        $db->insert([
            "nome" => $this->nome,
            "matricula" => $this->matricula,
            "cpf" => $this->cpf,
            "telefone" => $this->telefone,
            "email" => $this->email,
            "endereco" => $this->endereco,
            "dtn" => $this->dtn
        ]);
        return true;
    }
    public function alterar()
    {
<<<<<<< HEAD
        return (new DataBase('servidor'))->update('id='.$this->id,[            
=======
        return new DataBase()->update("id=".$this->id,[            
>>>>>>> a032ad8aecd08e850484080052dda1a27b7b891a
            "nome" => $this->nome,
            "matricula" => $this->matricula,
            "cpf" => $this->cpf,
            "telefone" => $this->telefone,
            "email" => $this->email,
            "endereco" => $this->endereco,
            "dtn" => $this->dtn
        ]);
    }
<<<<<<< HEAD
    public function excluir(){
        return (new DataBase('servidor'))->delete('id='.$this->id);

    }
    public static function listar($where = null, $order = null, $limit = null){
        return (new DataBase('servidor'))->select()->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    public static function buscarPorId($id){
        return (new DataBase('servidor'))->select('id = '.$id)->fetchObject(self::class);
=======
    public function excluir()
    {
        return (new DataBase()->delete($this->id));
    }
    public function listar()
    {
        return (new DataBase()->select()->fetchAll(PDO::FETCH_CLASS, self::class));
>>>>>>> a032ad8aecd08e850484080052dda1a27b7b891a
    }
}