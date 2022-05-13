<?php
    require_once './conexao.php';
    require_once './funcoesProdutos.php';
    
    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    

   $adicionado = adicionarProduto($conexao, $id, $descricao, $valor, $quantidade);

   if($adicionado){
       echo "O produto $descricao, foi cadastrado com sucesso!";
   }else{
       echo "Produto nao cadastrado!";
   }
   