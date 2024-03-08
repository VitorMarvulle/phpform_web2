<!DOCTYPE html>
<html lang="pt-br">
<head >
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Cadastro com Imagem e Background</title>
</head>
<body >
<style>
  img{
    max-width: 100%;
    width: 350px;
    height: 350px;
    object-fit: cover;
  }
  .parent {
  min-height: 100vh;
}
</style>
  
<?php

  $selected_color= $_POST['clr'];
  echo "<body style ='background-color: $selected_color;'>";
  echo "<div class='container w-50 parent d-flex justify-content-center align-items-center h-100'>";
  
 
 if(isset($_FILES['pic']))
 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo com a data
    $dir = './uploads/'; //Diretório para uploads
 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo '<div class="child alert alert-warning " role="alert" align="center">';
          //COLUNA 1 IMAGEM
          echo'<div class="container text-center">';
            echo'<div class="row">';
              echo'<div class="col-sm-6">';
                echo'<img src="./uploads/' . $new_name . '" style="border-radius:50%" class="img img-responsive">'; 
              echo'</div>';

          
          

          //COLUNA 2
              echo'<div class="col-sm-6 text-sm-start" >';
              
                if($_POST){
                
                  $nome = $_POST['txtNome'];    
                  $email = $_POST['txtEmail'];
                  $senha = $_POST['txtSenha'];
                  $data = $_POST['txtData'];
                  $cidade = $_POST['txtCidade'];
                  $estado = $_POST['txtUF'];
                  $texto = $_POST['txtSobre'];
                  $sexo_selecionado = $_POST['sexo'];
                  $array_interesses = $_POST['interesses'];

                  echo "<br> Nome completo:   " . $nome;
                  echo "<br> Email:   " . $email;
                  echo "<br> Senha:   " . $senha;
                  echo "<br> Data de nascimento:   " . $data;
                  echo "<br> Cidade:   " . $cidade;
                  echo "<br> Estado:   " . $estado;
                  echo "<br>Sexo: ".$sexo_selecionado;
                  echo "<br>Areas de interesse: ";
                  foreach($array_interesses as $interesse){
                  echo "<li>$interesse</li>"; 
                }
                echo'</div>';
            echo'</div>';
          
         
          // LINHA DE
            echo'<div class="row">';
              echo'<div class="col">';
                  echo "<h3>Texto sobre mim: </h3>";
                  echo $texto;
             
              echo'</div>';
            echo'</div>';
          echo'</div>';
        }
      } 
          
        
          echo'</div>';
     
 

 ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>






</body>
</html>

