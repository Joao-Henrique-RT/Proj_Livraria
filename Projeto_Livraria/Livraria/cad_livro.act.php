<?php
require('connect.php');
extract($_FILES);
extract($_POST);
$endereco = "imgs/".md5(time()).".jpg";
move_uploaded_file($foto['tmp_name'],$endereco);

if(mysqli_query($con, "INSERT INTO `tb_livraria` (`Codigo`, `Nome_adm`, `Email`, `Senha`, `Nome_Livro`, `Autor`, `Preco`, `foto`) 
VALUES (NULL, '$nome_adm', '$email', '$senha', '$nome_livro', '$autor', '$preco', '$foto');")){
    $msg = "Registro criado com sucesso!";
}else{
    $msg = "Erro ao criar registro!";
}

session_start();
$_SESSION['msg'] = $msg;
header("location:listar.php");




?>