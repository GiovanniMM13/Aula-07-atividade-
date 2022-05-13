<?php

class cadProduto
{

    private $conexao;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    function insereProduto(Produto $produto)
    {

        $query = "insert into produtos (descricao, valor, quantidade, ) 
					values ('{$produto->getDescricao()}', {$produto->getValor()}, 
						'{$produto->getQuantidade()}',)";

        return mysqli_query($this->conexao, $query);
    }
}
