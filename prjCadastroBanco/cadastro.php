<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet"href="css/styles.css">
    <title> Cadastro :D </title>
</head>
<body>

    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href= "index.html"  style="color: rgb(146, 108, 161); font-size: 20px;"> PARABENS JÁ FOI CADASTRADO!!  </a>
        </li>
      </ul>
<br><br>



<script src="cadastro.js"></script>  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<?php


 include 'conec.php';





 


$nome = $_POST["nome"];

$idade = $_POST["idade"];

$email = $_POST["email"];


try{

$comando = "Insert into cad(nome, idade, email) VALUES(?, ?,?)";





$s = $con->prepare($comando);

$s->bindParam(1, $nome);

$s->bindParam(2, $idade);

$s->bindParam(3, $email);





$s->execute();


echo "Dados cadastrados com sucesso :D";

    
 

}catch (PDOException $erro) {
    echo "Erro :( : " . $erro->getMessage();
}  





?>
