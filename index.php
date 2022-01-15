<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href = "estilo.css">
    <title>EFA opinião report</title>
</head>
<body>
<div id="area">
    <form action="" id="formulario">
        <fieldset>
        <legend><strong style="text-transform:uppercase;">REPORT</strong></legend> 

      
            <label for="nome"  class="tit">Nome Completo    </label>  
            <input type="text"  id="nome"   required placeholder="Insira o nome Completo"class="linhas">
           
     
            <label for="mail" class="tit">E-mail     </label> 
            <input type="email"  id="mail"required placeholder="Insira o E-mail" class="linhas"> 
      
            <label for="date" class="tit" style="text-align:center">Data e Hora da Ofensa </label> 
            <div style="text-align:center">
            <input type="date" name="date" id="date">
            <input type="time" name="time" id="time">
            </div>


            <div>
                <label class="tit">O que causou a sua ofensa?<br></label>
             
                <label>
                    <input type="radio" name="hab" value="ofensa" > Uma piada
                </label>    
                <label>
                    <input type="radio" name="hab" value="ofensa"> Uma opinião
                </label> 
                <label>
                    <input type="radio" name="hab" value="ofensa"> Uma noticia
                </label> 
                <label>
                    <input type="radio" name="hab" value="ofensa"> Coisas no geral
                </label> 
            </div> 


            <div>
                <label class="tit">Foi necessário um lenço para limpar as lágrimas?<br></label>
             
                <label>
                    <input type="radio" name="hab" value="lagrimas" > SIM
                </label>    
                <label>
                    <input type="radio" name="hab" value="lagrimas"> NÃO
                </label> 
                
            </div>

            <div>
                <label class="tit">Acha que consegue esquecer o assunto?<br></label>
             
                <label>
                    <input type="radio" name="hab" value="esquecer" > Sim
                </label>    
                <label>
                    <input type="radio" name="hab" value="esquecer"> Não
                </label> 
                <label>
                    <input type="radio" name="hab" value="esquecer"> Não tenho a certeza
                </label> 
                
            </div>

            <div id="razoes">
                <label class="tit">Razões que levaram à ofensa:<br></label>
             
                <label>
                    <input type="checkbox" name="hab" value="razoes" >Sou tótó
                </label>    
                <label>
                    <input type="checkbox" name="hab" value="razoes">Sou um idiota
                </label> 
                <label>
                    <input type="checkbox" name="hab" value="razoes">Sou muito sensível
                </label> 
                <label>
                    <input type="checkbox" name="hab" value="razoes" >Sou um falso puritano
                </label>    
                <label>
                    <input type="checkbox" name="hab" value="razoes">Sinto falta da minha mãe
                </label> 
                <label>
                    <input type="checkbox" name="hab" value="razoes">Senti inveja de não ter de graça
                </label> 
                <label>
                    <input type="checkbox" name="hab" value="razoes" >Sou moralmente superior
                </label>    
                <label>
                    <input type="checkbox" name="hab" value="razoes">Enfiei a carapuça
                </label> 
                <label>
                    <input type="checkbox" name="hab" value="razoes">Não tive likes
                </label> 
                
                <label>
                    <input type="checkbox" name="hab" value="razoes">A minha vida é uma merda
                </label> 
                <label>
                    <input type="checkbox" name="hab" value="razoes">Outra(exlique me baixo):
                </label> 
                
            </div>



            
        

            <label for="msg" id="mensagem" class="tit">Mensagem: </label>
          
            <textarea rows="1" cols="50" placeholder="Insira Mensagem..." id="msg"></textarea>
        
    <div class="btn">
        <button type="submit">Inserir</button>
    </div>
  
    </fieldset>
    </form>
    <footer>
        <p>Copyright 2021 - by Hugo Resende Products </p>
        <p>
        <a class="copyR" href="https://hugoresende27.github.io/portfolio/" target="blank"> Portefolio </a> | <a class="copyR" href="https://www.linkedin.com/in/hugo-resende-781ab1111/" target="blank"> LinkedIn </a> | <a  class="copyR" href="https://github.com/hugoresende27" target="blank"> GitHub </a>
        </p>
     </footer >
  
</div>
    
</body>
</html>