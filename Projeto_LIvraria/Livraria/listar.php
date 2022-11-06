<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php //include('menu.php'); ?>

<?php
include('menu.php');

session_start();
    if(isset($_SESSION['msg'])){
        echo"<p> class=alert>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }

    require('connect.php');
    $contatos = mysqli_query($con, "Select * from `tb_livraria`");

    while($contato = mysqli_fetch_array($contatos)){
    echo "<div class=box>";
    echo "<p> Nome: $contato[Nome_Livro] </p>";
    echo "<p> Autor: $contato[Autor]</p>";
    echo "<p> Preço: $contato[Preco] </p>";
    echo "</div>";
    }
?>
</body>
</html>