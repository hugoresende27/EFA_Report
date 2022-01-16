<?php

 
    
    //VERIFICAR SE O ID FOI INDICADO
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);#verifica se var existe e se é do tipo int

    if($id == false){
        Header('location:tarefas.php');//CHUTAR PARA CANTO
      
    } 


  
    include 'gestor.php';
    $gestor = new Gestor();

    //buscar os dados dos users registados
    $params = array (
        ':id' => $id
    );
    $user = $gestor->EXE_QUERY("SELECT * FROM tarefas WHERE id = :id",$params);

    //VERIFICAR SE EXISTE USER COM O ID INDICATO
    if(count($user)==0){
        Header('location:tarefas.php');//CHUTAR PARA CANTO
    }

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

    <h3 class="text-center" style="margin-top: 100px; color:white">ELIMINAR <strong><?php echo $user[0]['titulo'] ?></strong> ?</h3>

    <div class="d-flex justify-content-center"> 

        <a href="tarefas.php" class="btn btn-danger">NÃO</a> <a href="eliminar_registo.php?id=<?php echo $id ?>" class="btn btn-success ml-4">SIM</a>
    </div>
    
    </div>
</body>
</html>