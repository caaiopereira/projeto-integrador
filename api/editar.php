<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cervejaria</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/pricing/pricing.css" rel="stylesheet">

</head>
<?php include_once 'topo.php' ?>

<body>
    
</body>
</html>

<?php

// resgate de dados da URL
$id = base64_decode($_GET["id"]);

// montar a instrução para selecionar o registro na base de dados
$sql = "select * from produto where idproduto=".$id;

// abrir a conexão com o banco
include_once 'conexao.php';

//executar
$rs =mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==1){
    $reg = mysqli_fetch_array($rs);
}
?>
	<div class='container'>
		<fieldset>
			<legend><h4>Atualizar Cerveja</h4></legend>

<form action="atualizar.php" method="post">
<div class="row">
<div class="form-group col-6">
Nome:
<input class="form-control" type="text" value="<?php echo $reg["nome"]; ?>" name="nome" id="nome">
</div>
<div class="form-group col-6">
Tipo:
<input class="form-control"type="text" value="<?php echo $reg["tipo"]; ?>" name="tipo" id="tipo">
</div>
<div class="form-group col-6">
País:
<input class="form-control" type="text" value="<?php echo $reg["pais"]; ?>" name="pais" id="pais">
</div>
<div class="form-group col-6">
Nota:
<select class="form-control"name="nota" id="nota">
    <option value="<?php echo $reg["nota"]; ?>"><?php echo $reg["nota"]; ?></option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
</div>
<div class="form-group col-6">
Comentario da Cerveja:
<textarea class="form-control"name="comentario" id="comentario" value="<?php echo $reg["comentario"]; ?>"><?php echo $reg["comentario"]; ?></textarea>
</div>
</div>
<br>
<input type="hidden" name="id" value="<?php echo $reg["idproduto"]; ?>">
<input class="btn btn-primary col-3" type="submit" value="Atualizar">
<input class="btn btn-danger col-3" type="reset" value="Desfazer">
</form>
</div>
<br><br><br><br><br><br><br><br><br><br>
<hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="painel.php">Home</a></p>
    <p>&copy; 2022–2022 Cervejaria, Inc</a></p>
  </footer>
</main>


    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
