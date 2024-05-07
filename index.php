<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulário com Validação</title>
    <link rel="stylesheet" href="style.css" />
    
  </head>
  <body class="bodys">
  
    <h1>PROCURA-SE FRANCISCO</h1>
    <form action="conexao.php" method="post">

    <img class="img" src="golden_retriever-p.webp" alt=""><br><br>

    <p class="p">T

       
    What is Lorem Ipsum?
Lorem Ipsum is standard text of the printing and typesetting industry.
 Lorem Ipsum has been the standard dummy text used by industries since the 1500s, when one scrambled 
 characters from text to make a specimen book. This text has not only survived 5 centuries, but also the 
 leap into electronic typography, remaining essentially unchanged. It was popularized in the 1960s with the 
 release of Letraset sheets containing Lorem Ipsum passages, and more recently with publishing programs like 
 Aldus PageMaker which include versions of Lorem Ipsum.<br><br><br>

Why do we use it?
It is an established fact that a reader is distracted by the readable content of a page when analyzing its
 graphic blemish. Therefore, using Lorem Ipsum leads to a more-or-less normal distribution of letters, 
 as opposed to using 'Content here, content here', making it readable text. Many desktop publishing tools and 
 web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
  many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,
   sometimes on purpose (as in the case of humor).<br><br><br>


Where does he come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin 
literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney 
College in Virginia, looked up one of the more obscure Latin words (consectetur) in a Lorem Ipsum passage, 
and going through the world's cities in classical literature, discovered its origin. Lorem Ipsum comes from
 sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil), by Cicero,
  written in 45BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. 
  The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..." appears on a line in section 1.10.32.<br><br><br>



    <div class="container">
      <h1>Formulário de Contato</h1>
       
        <form  method="POST" action="report.php">
        <div class="form-control">
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" />
          <div class="error-message"></div>
        </div>

        <div class="form-control">
          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" />
          <div class="error-message"></div>
        </div>

        <div class="form-control">
          <label for="assunto">Assunto</label>
          <input type="text" id="assunto" name="assunto" />
          <div class="error-message"></div>
        </div>

        <div class="form-control">
          <label for="mensagem">Mensagem</label>
          <textarea id="mensagem" name="mensagem"></textarea>
          <div class="error-message"></div>
        </div>

    
        <button type="submit">Enviar</button><br>

      </form>
    </div>
    
    <footer class="footer"></footer>
  </body>
</html>