<?php

class cadCliente
{

    private $conexao;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    function insereProduto(Cliente $cliente)
    {

        $query = "insert into cliente (nome, email, senha) 
					values ('{$cliente->getNome()}', {$cliente->getEmail()}, 
						'{$cliente->getSenha()}',)";

        return mysqli_query($this->conexao, $query);
    }
}
