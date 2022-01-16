<?php

session_start();

include_once ('connect.php');

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$date = filter_input(INPUT_POST,'date');

//echo "NOME: $nome <br>EMAIL: $email";

$res = "INSERT INTO queixas (nome,email,criada,data_queixa) VALUES ('$nome' , '$email', NOW(), '$date')";

//$res_queixa = mysqli_query($conn,$res);

if (mysqli_insert_id($conn)){
    $_SESSION['msg']="<p style='color:green'>Queixa registada com sucesso!</p>";
    header("location: index.php");
}else {
    $_SESSION['msg']="<p style='color:red'>Queixa não registada</p>";
    header("location: index.php");
}