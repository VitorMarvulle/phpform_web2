<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Cadastro com Imagem e Background</title>
</head>
<body>
<style>
.parent {
  min-height: 100vh;

  }
</style>

<div class="parent container d-flex justify-content-center align-items-center h-100">
<div class=" child container w-75 p-3 text-primary-emphasis bg-dark-subtle border border-primary-subtle rounded-3">
  <div class="row">
    <div class="col">
             <form method="POST" enctype="multipart/form-data" action="upload.php"> 
      
        <div class="form-floating mb-4">
          <input type="name" name="txtNome" class="form-control" id="floatingInput" placeholder=""/>
          <label for="floatingInput">Nome Completo</label>
        </div>
        <div class="form-floating mb-4">
          <input type="email" name="txtEmail" class="form-control" id="floatingInput" placeholder=""/>
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-4">
          <input type="password" name="txtSenha" class="form-control" id="floatingInput" placeholder=""/>
          <label for="floatingInput">Senha</label>
        </div>
        <div class="form-floating mb-4">
          <input type="date" name="txtData" class="form-control" id="floatingInput" placeholder=""/>
          <label for="floatingInput">Ano de Nascimento</label>
        </div>
        <div class="form-floating mb-4">
          <input type="text" name="txtCidade" class="form-control" id="floatingInput" placeholder=""/>
          <label for="floatingInput">Cidade</label>
        </div>

        <div class="form-floating mb-4">
          <select class="form-select" name="txtUF" id="floatingSelect" aria-label="Floating label select example">
            <option selected>Selecione a UF</option>
            <option value="SP">SP</option>
            <option value="RJ">RJ</option>
            <option value="MG">MG</option>
          </select>
          <label for="floatingSelect">Estado</label>
        </div>

    </div>
                  <div class="col">
                        <legend style="font-size: 110%;">Sexo</legend>
                      <div class="form-check">
                              <input class="form-check-input" type="radio" name="sexo" value="Masculino" id="flexRadioDefault1">
                              <label class="form-check-label" for="flexRadioDefault1">
                              Masculino
                              </label>
                      </div>
                      <div class="form-check">
                              <input class="form-check-input" type="radio" name="sexo" value="Feminino" id="flexRadioDefault2">
                              <label class="form-check-label" for="flexRadioDefault2">
                              Feminino
                              </label>
                      </div>
                      <br>
                        <legend style="font-size: 110%;">Interesses</legend>
                      <div class="form-check">
                              <input class="form-check-input" name="interesses[]" type="checkbox" value="Música" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                Música
                              </label>
                        </div>
                        <div class="form-check">
                              <input class="form-check-input" name="interesses[]" type="checkbox" value="Tecnologia" id="flexCheckChecked">
                              <label class="form-check-label" for="flexCheckChecked">
                                Tecnologia
                              </label>
                        </div>
                        <div class="form-check">
                              <input class="form-check-input" name="interesses[]" type="checkbox" value="Esportes" id="flexCheckChecked">
                              <label class="form-check-label" for="flexCheckChecked">
                                Esportes
                              </label>
                        </div>
                        <br><br>
                        <div class="form-floating">
                              <textarea class="form-control" name="txtSobre" placeholder="Escreva aqui" id="floatingTextarea2" style="height: 100px"></textarea>
                              <label for="floatingTextarea2">Fale mais sobre você</label>
                        </div>
                      <br>
                      <label for="conteudo">Upload imagem do perfil:</label>
                      <input type="file" name="pic" accept="image/*">
                      <br><br>
                      <label for="conteudo">Cor background do perfil:</label>
                      <br> 
                      <input name="clr" type="color"><br> <br>   


                  </div>
                    <div class="d-grid gap-2 ">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
            </form>
  </div>
</div>
</div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>






</body>
</html>


