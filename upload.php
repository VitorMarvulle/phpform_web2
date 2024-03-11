<!DOCTYPE html>
<html lang="pt-br">
<head >
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Cadastro com Imagem e Background</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body >
 
<?php
 
$selected_color= $_POST['clr'];
 
?>
 
 
<style>

  h1{
    margin: 5px;
    padding: 5px;
  }
 
 
  .raleway {
  font-family: "Raleway", sans-serif;
  font-optical-sizing: auto;
  font-weight: 100px;
  font-style: normal;
}
 
 
 
  .col-sm-6
  {
    max-width: 100%;
    width: 400px;
    height: 400px;
  }
 
 
  img{
    max-width: 100%;
    width: 350px;
    height: 350px;
    object-fit: cover;
    border-style:solid;
    border-color: <?php echo $selected_color ?>;
    border-width: 5px;
    box-shadow: 0px 0px 40px <?php echo $selected_color ?>;
  }
  .parent {
  min-height: 100vh;
}
</style>
 
<?php
 
  $selected_color= $_POST['clr'];
  echo "<body style ='background-color: $selected_color;'>";
  echo "<div class='container w-50 parent d-flex justify-content-center align-items-center h-100 raleway'>";
 
 
 if(isset($_FILES['pic']))
 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo com a data
    $dir = './uploads/'; //Diretório para uploads
 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo '<div class="child rounded alert bg-light " role="alert" align="center">';
          //COLUNA 1 IMAGEM
          echo'<div class="container text-center">';

            echo "<div class='row'>";
            echo "<div class='col'>";
            echo "<h1>Cadastro Realizado com sucesso!<h1>";
            echo "</div>";
            echo "</div>";


            echo'<div class="row">';
              echo'<div class="col-sm-6">';
                echo'<img src="./uploads/' . $new_name . '" style="border-radius:50%" class="img img-responsive">';
              echo'</div>';
 
         
         
 
          //COLUNA 2
              echo'<div class="col-sm-6 text-start align-content-center" >';
               
                echo'<div class="mx-auto p-2" style="width: 250px">';
                if($_POST){
               
                  $nome = $_POST['txtNome'];    
                  $email = $_POST['txtEmail'];
                  $senha = $_POST['txtSenha'];
                  $data = $_POST['txtData'];

                  $data = $_POST['txtData'];

                  // separando yyyy, mm, ddd
                  list($ano, $mes, $dia) = explode('-', $data);
              
                  // data atual
                  $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                  // Descobre a unix timestamp da data de nascimento do fulano
                  $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
              
                  // cálculo
                  $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                  


                  $cidade = $_POST['txtCidade'];
                  $estado = $_POST['txtUF'];
                  $texto = $_POST['txtSobre'];
                  $sexo_selecionado = $_POST['sexo'];
                  $array_interesses = $_POST['interesses'];
 
                  echo "<br> <b>Nome:</b>   " . $nome;
                  echo "<br> <b>Email:</b>   " . $email;
                  echo "<br> <b>Senha:</b>   " . $senha;
                  echo "<br> <b>Idade:</b>   " . $idade ." anos";
                  echo "<br> <b>Cidade:</b>   " . $cidade;
                  echo "<br> <b>Estado:</b>   " . $estado;
                  echo "<br><b>Sexo:</b> ".$sexo_selecionado;
                  echo "<br><b>Areas de interesse:</b> ";
                  foreach($array_interesses as $interesse){
                  echo "<li>$interesse</li>";
                }
                echo'</div>';
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
 
 