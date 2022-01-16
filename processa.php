<?php

session_start();

include_once ('connect.php');

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$date = filter_input(INPUT_POST,'date');
$msg = filter_input(INPUT_POST,'message', FILTER_SANITIZE_STRING);
$ofensa = filter_input(INPUT_POST,'ofensa', FILTER_SANITIZE_STRING);
$lagrimas = filter_input(INPUT_POST,'lagrimas', FILTER_SANITIZE_STRING);
$esquecer = filter_input(INPUT_POST,'esquecer', FILTER_SANITIZE_STRING);
$razao = filter_input(INPUT_POST,'razoes', FILTER_SANITIZE_STRING);

//echo "NOME: $nome <br>EMAIL: $email";

$res = "INSERT INTO queixas (nome,email,criada,data_queixa,msg,ofensa,lagrimas,esquecer,razoes) 
                    VALUES ('$nome' , '$email', NOW(), '$date','$msg','$ofensa','$lagrimas','$esquecer','$razao')";

$res_queixa = mysqli_query($conn,$res);


if (mysqli_insert_id($conn)){
    $_SESSION['msg']="<p style='color:green' class='tit'>Queixa registada com sucesso!</p>";
    header("location: index.php");
}else {
    $_SESSION['msg']="<p style='color:red' class='tit'>Queixa não registada</p>";
    header("location: index.php");
}