<?php
    session_start();

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href = "estilo.css">
    <title>EFA opinião report</title>
</head>
<body>
<div id="area">
    <form action="processa.php" method="post" id="formulario">
       
        <legend><strong style="text-transform:uppercase;">relatório</strong></legend> 
        <?php

            if(isset($_SESSION['msg'])){
                echo  $_SESSION['msg'];
                unset($_SESSION['msg']);
            }


        ?>

        <div class="tit">
                <label for="nome"  class="tit">Nome Completo    </label>  
                <input type="text"  name="nome" id="nome"   required placeholder="Insira o nome Completo" class="linhas">
            
                <label for="mail" class="tit">E-mail     </label> 
                <input type="email"  name="email" id="mail"required placeholder="Insira o E-mail" class="linhas"> 
        </div>
                <label for="date" class="tit" style="text-align:center">Data e Hora da Ofensa </label> 
                <div style="text-align:center">
                    <input type="date" name="date" id="date" required>
                    <input type="time" name="time" id="time" required>
                </div>
           

            <div>
                <label class="tit">O que causou a sua ofensa?</label>
             
                <ul>
                    <li> <label>
                        <input type="radio" name="ofensa" value="ofensa" > Uma piada
                    </label> </li>  
                    <li><label>
                        <input type="radio" name="ofensa" value="ofensa"> Uma opinião
                    </label> </li>
                    <li><label>
                        <input type="radio" name="ofensa" value="ofensa"> Uma noticia
                    </label> </li>
                    <li><label>
                        <input type="radio" name="ofensa" value="ofensa"> Coisas no geral
                    </label> </li>
                </ul>
            </div> 


            <div>
                <label class="tit">Foi necessário um lenço para limpar as lágrimas?</label>
                <ul>
                <li><label>
                    <input type="radio" name="lagrimas" value="lagrimas" > SIM
                </label></li>    
                <li><label>
                    <input type="radio" name="lagrimas" value="lagrimas"> NÃO
                </label></li> 
                </ul>
            </div>

            <div>
                <label class="tit">Acha que consegue esquecer o assunto?</label>
             
                <ul>
                <li><label>
                    <input type="radio" name="esquecer" value="esquecer" > Sim
                </label>  </li>  
               <li> <label>
                    <input type="radio" name="esquecer" value="esquecer"> Não
                </label> </li>
                <li><label>
                    <input type="radio" name="esquecer" value="esquecer"> Não tenho a certeza
                </label> </li>
                </ul>
            </div>

            <div id="razoes">
                <label class="tit">Razões que levaram à ofensa:<br></label>
                <ul>
                <li><label>
                    <input type="checkbox" name="razoes" value="razoes" >Sou tótó
                </label></li>    
                <li><label>
                    <input type="checkbox" name="razoes" value="razoes">Sou um idiota
                </label> </li>
                <li><label>
                    <input type="checkbox" name="razoes" value="razoes">Sou muito sensível
                </label></li> 
                <li><label>
                    <input type="checkbox" name="razoes" value="razoes" >Sou um falso puritano
                </label></li>    
                <li><label>
                    <input type="checkbox" name="razoes" value="razoes">Sinto falta da minha mãe
                </label></li> 
                <li><label>
                    <input type="checkbox" name="razoes" value="razoes">Senti inveja de não ter de graça
                </label> </li>
                <li><label>
                    <input type="checkbox" name="razoes" value="razoes" >Sou moralmente superior
                </label></li>    
                <li><label>
                    <input type="checkbox" name="razoes" value="razoes">Enfiei a carapuça
                </label></li> 
                <li><label>
                    <input type="checkbox" name="razoes" value="razoes">Não tive likes
                </label></li> 
                
               <li> <label>
                    <input type="checkbox" name="razoes" value="razoes">A minha vida é uma merda
                </label> </li>
                <li><label>
                    <input type="checkbox" name="razoes" value="razoes">Outra(exlique me baixo):
                </label> </li>
                </ul>
            </div>



            
        
            <div class="tit">
            <label for="msg" id="mensagem" class="tit">Mensagem: </label>
          
            <textarea rows="3" cols="15" placeholder="Insira Mensagem..." id="msg" name="message"></textarea>
            </div>
    <div class="btn">
        <button type="submit">Enviar</button>
    </div>
  
  
    </form>

    <footer>
        <p>Copyright 2021 - by Hugo Resende Products </p>
        <p>
        <a class="copyR" href="https://hugoresende27.github.io/portfolio/" target="blank"> Portefolio </a> | <a class="copyR" href="https://www.linkedin.com/in/hugo-resende-781ab1111/" target="blank"> LinkedIn </a> | <a  class="copyR" href="https://github.com/hugoresende27" target="blank"> GitHub </a>
        </p>
     </footer >
  
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>