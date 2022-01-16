<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href = "estiloTarefas.css">
    <title>Tarefas</title>
</head>
<body>

<?php
                //print_r($_POST);

            if(isset($_SESSION['msg'])){
                
                echo  $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            date_default_timezone_set("Europe/Lisbon");
            $hoje = date("Y-m-d H:i:s");//MELHOR PARA BASE DE DADOS
            echo "<p style='text-align:center'>".$hoje."</p>";
          

        ?>

<div class="container p-5">
    <div class="col">
        <form action="processaTarefas.php" method="post">

            <div class="form-group">
                <label for="tituloTarefas">Titulo Tarefa</label>
                <input type="text" class="form-control" id="tituloTarefas" name="tituloTarefa" placeholder="Titulo" required>
            </div>
            <div class="form-group">
                <label for="DescTarefa">Descrição Tarefa</label>
               
                <textarea rows="" cols="25" placeholder="Insira Mensagem..." id="DescTarefa" name="message" class="mt-4" required></textarea>

            </div>

            <div class="d-flex justify-content-center">
                <button class="btn-primary " type="submit">Enviar</button>
            </div>
        
        </form>
    </div>
</div>
    
</body>
</html>