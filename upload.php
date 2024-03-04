<?php
 if(isset($_FILES['pic']))
 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = './uploads/'; //Diretório para uploads
 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo '<div class="alert alert-success" role="alert" align="center">
          <img src="./uploads/' . $new_name . '" class="img img-responsive img-thumbnail" width="200"> 
          <br>
          Imagem enviada com sucesso!
          <br>
          <a href="exemplo_upload_de_imagens.php">
          <button class="btn btn-default">Enviar nova imagem</button>
          </a></div>';

          
          if(isset($_POST['clr']))
            $selected_color= $_POST['clr'];
            $nome = $_POST['txtNome'];    
            $email = $_POST['txtEmail'];
            $senha = $_POST['txtSenha'];
            $data = $_POST['txtData'];
            $cidade = $_POST['txtCidade'];
            $estado = $_POST['txtUF'];
            $texto = $_POST['txtSobre'];

          echo "<br> Nome completo:   " . $nome;
          echo "<br> Email:   " . $email;
          echo "<br> Senha:   " . $senha;
          echo "<br> Data de nascimento:   " . $data;
          echo "<br> Cidade:   " . $cidade;
          echo "<br> Estado:   " . $estado;

          echo "<br>Color code is:" . $selected_color;
          echo "<div class='a' style='background-color: $selected_color'>";
          echo "<p>Olá, meu nome é </p>" . $nome;
          echo "<h3>Texto sobre mim: </h3>";
          echo $texto;
          echo "</div>";


 } ?>

