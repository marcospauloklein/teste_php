<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <style>
        body{
          background-color: #DBDBDB;
        }

        #tamanhocontainer{
          width: 550px;
          margin-top: 60px;
        }

        #botao{
          background-color: #5B5B5B ;
        }

        #h1{
            color: #262523;
            font-style: oblique;
        }

        #navbar{
          color-scheme: antiquewhite;
        }
  
      </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand">Clientes</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a style="color:#FBECCF" class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listar_clientes.php">Listar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
  </header>

  <div class = "container" id="tamanhocontainer">
  <br>

  <h1 id="h1">Cadastro de Clientes</h1>


  <div class="row">
      <form action="_inserir_cliente.php" method="post">
          <br>
          <div class="form-floating mb-3">
              <input type="text" class="form-control" name="nome_cli" placeholder="Nome completo" required>
              <label for="floatingInput">Nome do cliente</label>
          </div>
          
          <div class="form-floating mb-3">
              <input type="text" class="form-control" name="endereco" placeholder="Endereço" required>
              <label for="floatingInput">Endereço</label>
          </div>
          
          <div class="form-floating mb-3">
              <input type="text" class="form-control" name="cidade" placeholder="Cidade" required>
              <label for="floatingInput">Cidade</label>
          </div>
          
          <div class="form-floating">
              <select class="form-select" name="estado" aria-label="Floating label select example" required>
                <option selected>Selecione o Estado</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AM">AM</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MG">MG</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="PR">PR</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="RS">RS</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
              </select>
              <label for="floatingSelect">Estado</label>
          </div>
          <br>
          <div class="form-floating mb-3">
              <input type="number" class="form-control" name="telefone" placeholder="Telefone" required>
              <label for="floatingInput">Telefone</label>
          </div>
          
          <div class="form-floating">
              <textarea class="form-control" name="comentarios" placeholder="Comentários" id="floatingTextarea2" style="height: 120px"></textarea>
              <label for="floatingTextarea2">Comentários</label>
            </div>
        <br>
        <button type="submit" class="btn btn-dark">Salvar</button>
        <!--<button type="button" class="btn btn-dark">Pesquisar</button>
        <button type="button" class="btn btn-dark">Alterar</button>
        <button type="button" class="btn btn-danger">Excluir</button>-->
      </form>
  </div>
  <br><br>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>