<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cervejaria</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>

<?php include_once 'topo.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class='container'>
		<fieldset>
			<legend><h4>Cadastro de Cerveja</h4></legend>

<form class="form-group" action="cadastro.php" method="post">
    <div class="row">
    <div class="form-group col-6">
Nome:
<input class="form-control" type="text" name="nome" id="nome" required>
</div>
<div class="form-group col-6 ">
Tipo:
<input class="form-control" type="text" name="tipo" id="tipo"required>
</div>
<div class="form-group col-6">
País:
<input class="form-control" type="text" name="pais" id="pais"required>
</div>
<div class="form-group col-6">
Nota:
<select class="form-control"name="nota" id="nota"required>
    <option value="">Selecione</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
</div>
<div class="form-group col-6">
Comentario da Cerveja:<br>
<textarea class="form-control" name="comentario" id="comentario"required></textarea>
</div>
</div>
<br>
<input type="hidden" name="acao" value="incluir">
<button class="btn btn-primary col-3" type="submit"id='botao'>Cadastrar</button>
<input type="reset" class="btn btn-danger col-3" value="Limpar">
</form>
</body>
</div>
<br><br><br><br><br><br><br><br><br><br>
<div>
<hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  <!-- /.container -->

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="painel.php">Home</a></p>
    <p>&copy; 2022–2022 Cervejaria, Inc</a></p>
  </footer>
</main>


    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>