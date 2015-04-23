<?php

class Modelo extends Model{

    public function cadastrar($modelo){
        $sql = "INSERT INTO modelo (nome,id_marca) VALUES ('{$modelo->nome}','{$modelo->marca}')";
        $this->executar($sql);
    }
}
