<?php
namespace App;
use PDO;
class Item{
    public $id;
    public $nome;
    public $descricao;
    public $patrimonio;
    public function cadastrar(){
        
        $db = new DataBase('item');
<<<<<<< HEAD
        $this->id = $db->insert([
=======
        $db->insert([
>>>>>>> a032ad8aecd08e850484080052dda1a27b7b891a
            "nome"       => $this->nome,
            "descricao"  => $this->descricao,
            "patrimonio" => $this->patrimonio
        ]);
        return true;        
    } 
    public function alterar(){
        
<<<<<<< HEAD
        return (new DataBase('item'))->update('id='.$this->id,[
=======
        return (new DataBase('item'))->update($this->id,[
>>>>>>> a032ad8aecd08e850484080052dda1a27b7b891a
            "nome"       => $this->nome,
            "descricao"  => $this->descricao,
            "patrimonio" => $this->patrimonio
        ]);       
    } 
    public function excluir(){
        return (new DataBase('item'))->delete('id='.$this->id);

    }
    public static function listar($where = null, $order = null, $limit = null){
        return (new DataBase('item'))->select()->fetchAll(PDO::FETCH_CLASS, self::class);
    }
<<<<<<< HEAD
    public static function buscarPorId($id){
        return (new DataBase('item'))->select('id = '.$id)->fetchObject(self::class);
    }
=======
>>>>>>> a032ad8aecd08e850484080052dda1a27b7b891a
}