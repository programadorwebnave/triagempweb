<html>

 <head>

   <meta http-equiv="Content-Type" 

content="text/html; charset=utf-8" />
   
   <title>formulario php</title>
 
   </head>
 
   <body>
   
   <form action="lol.php" method="post">
 <?php
$teste = $_POST['nome'];

echo "Nome digitado na pagina1: ".$teste;

?>
   </form>
 
 </body>
 
 </html>