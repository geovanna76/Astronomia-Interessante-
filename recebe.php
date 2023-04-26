<!DOCTYPE html>
<html lang="pt-br">
<head> 
<meta charset="utf-8"/>
<title>Recebe</title>
<link href="css/contato.css" rel="stylesheet">
</head>
<boby>
    
   <?php
       $servername = "localhost";
       $database = "astronomia";  
       $username = "root";
       $password = "usbw";
       //create connection
       $conn = mysqli_connect($servername,$username,$password,$database);

       //verficando a conexão
       if(!$conn){
           die("connectin failed:". mysqli_connect_error());
       }

       // RECEBENDO OS DADOS PREENCHIDOS DO FROMULÁRIO!

       $nome = $_POST ["nome"]; //atribuição do campo "nome" vindo do form para variável
       $email  = $_POST["email"]; //atribuição do campo  "ddd"  vindo do form para variável
       $dtnsc = $_POST ["dtnsc"];
       $senha = $_POST ["senha"];


       //Gravando no banco de dados!

       $query ="INSERT INTO usuario(nome, email, dtnsc, senha) VALUES ('$nome','$email', '$dtnsc', '$senha')";

           if (mysqli_query($conn,$query)){
               echo"<h1 style= 'color:#CC3300; font-family: tahoma;'>Novo cadastro efetuado com sucesso!</h1>";
                } else { 
                    echo"Error:" . $query, "<br>" . mysqli_error($conn);
                }
                mysqli_close($conn);

       ?>
</boby>
</html>  
               