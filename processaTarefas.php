<?php

session_start();

include_once ('connect.php');


    $tituloTarefa = filter_input(INPUT_POST,'tituloTarefa', FILTER_SANITIZE_STRING);
   
    $tarefa = filter_input(INPUT_POST,'message', FILTER_SANITIZE_STRING);
  
    


    $res = "INSERT INTO tarefas (titulo,tarefa) 
                    VALUES ('$tituloTarefa' , '$tarefa')";

    $res_queixa = mysqli_query($conn,$res);


    if (mysqli_insert_id($conn)){
        $_SESSION['msg']="<p style='color:green' class='tit'>Tarefa registada com sucesso!</p>";
        header("location: tarefas.php");
    }else {
        $_SESSION['msg']="<p style='color:red' class='tit'>Tarefa não registada</p>";
        header("location: tarefas.php");
    }


//}
