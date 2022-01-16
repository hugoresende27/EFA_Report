<?php
 
    $id = $_GET['id'];
    // ELIMINAR REGISTO 
    include 'gestor.php';
    $gestor = new Gestor();

    //buscar os dados dos users registados
    $params = array (
        ':id_user' => $id
    );
    $user = $gestor->EXE_NON_QUERY("DELETE FROM tarefas WHERE id = :id_user",$params);
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

<div class="container p-5">

    <h1 class='text-center' style='margin-top: 200px; color:white'>Tarefa ELIMINADA com sucesso!<br><a href='tarefas.php' class='btn btn-danger'>VOLTAR</a></h1> </br>
    

</div>

</body>
</html>


<?php
    