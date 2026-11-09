<?php
namespace App;

class Produto{
    public $id;
    public $nome;
    public $descricao;
    public $codigo;
    public $marca;
    public $dtn_validade;
    public function cadastrar(){
    
    $db = new DataBase('produto');
    $this->id = $db->insert([
        'nome' => $this->nome,
        'descricao' => $this->descricao,
        'codigo' => $this->codigo,
        'marca' => $this->marca,
        'dtn_validade' => $this->dtn_validade
    ]);
    return true;
    }

    public function alterar(){
        return (new DataBase('produto'))->update('id = '.$this->id,[
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'codigo' => $this->codigo,
            'marca' => $this->marca,
            'dtn_validade' => $this->dtn_validade
        ]);
    }

    public function excluir(){
        return (new DataBase('produto'))->delete('id = '.$this->id);
    }
    public static function listar($where = null, $order = null, $limit = null) {
          return  (new DataBase('produto'))->select()->fetchAll(\PDO::FETCH_CLASS,self::class);
}
}



//    public function alterar()
// {
//     $db = new DataBase();

//     return $db->update($this->id, [
//         'nome' => $this->nome,
//         'descricao' => $this->descricao,
//         'patrimonio' => $this->patrimonio
//     ]);
// }

// public function excluir()
// {
//     $db = new DataBase();

//     return $db->delete($this->id);
// }

// public function select()
// {
//     $db = new DataBase();

//     return $db->select($this->id);
// }
    
