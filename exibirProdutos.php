<?php
require_once "./conexao.php";
$listaProdutos = listarProdutos($conexao);
?>

<!DOCTYPE html>
<html>

<body>
    <table border= "1">
        <thead>
            <tr>
                <th style="width: 15%">ID</th>
                <th style="width: 55%">Descricao</th>
                <th style="width: 15%">Valor(R$)</th>
                <th style="width: 15%">Quantidade</th>
</tr>
</thead>
<tbody>
    <?php
    while($produto = mysqli_fetch_assoc($listaProdutos)){
        ?>
        <tr>
            <td><?=$Produto["id"]?></td>
            <td><?=$Produto["descricao"]?></td>
            <td><?=$Produto["valor"]?></td>
            <td><?=$Produto["quantidade"]?></td>
         <td><input type="submit" value= "Alterar"></td>
    </tr>

    <?php
    }
    ?>

</table>
</body>
</html>