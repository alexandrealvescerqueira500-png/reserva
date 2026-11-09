<?php

namespace App;

class Emprestimo
{
    public $id;
    public $id_item;
    public $id_servidor;
    public $data_emprestimo;
    public $data_devolucao;

    public function cadastrar()
    {
        return (new DataBase('emprestimo'))->insert([
            'id_item' => $this->id_item,
            'id_servidor' => $this->id_servidor,
            'data_emprestimo' => $this->data_emprestimo,
            'data_devolucao' => $this->data_devolucao
        ]);
    }

    public function alterar()
    {
        return (new DataBase('emprestimo'))->update('id = ' . (int) $this->id, [
            'id_item' => $this->id_item,
            'id_servidor' => $this->id_servidor,
            'data_emprestimo' => $this->data_emprestimo,
            'data_devolucao' => $this->data_devolucao
        ]);
    }

    public function excluir()
    {
        return (new DataBase('emprestimo'))->delete('id = ' . (int) $this->id);
    }

    public static function listar()
    {
        return (new DataBase('emprestimo'))
            ->select(null, 'id DESC')
            ->fetchAll(\PDO::FETCH_CLASS, self::class);
    }

    public static function buscarPorId($id)
    {
        return (new DataBase('emprestimo'))
            ->select('id = ' . (int) $id)
            ->fetchObject(self::class);
    }
}
