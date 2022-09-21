<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cervejaria</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>
<?php include_once 'topo.php' ?>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<?php

echo"<div class='container'>
<fieldset>
  <legend><h4>Consultar Cerveja </h4></legend>";

include_once 'conexao.php';

$sql = "select * from produto ORDER BY nome ASC";

$rs = mysqli_query($con,$sql);

?>
<input class="form-control col-5" id="myInput" type="text" placeholder="Buscar.."></div>
<br>
<div class='container'>
<table class="table">
<thead class="thead-dark">
<tr>
    <th>Nome</th>
    <th>Tipo</th>
    <th>País</th>
    <th>Nota</th>
    <th>Comentário</th>
    <th>Editar</th>
    <th>Exclusão</th>
</tr>
</thead>               

<?php        
while($linha = mysqli_fetch_array($rs)){
?>

 <tbody id="myTable">
<tr>
    <td ><?php echo $linha["nome"]; ?></td>
    <td><?php echo $linha["tipo"]; ?></td>
    <td><?php echo $linha["pais"]; ?></td>
    <td><?php echo $linha["nota"]; ?></td>
    <td><?php echo $linha["comentario"]; ?></td>
    <td>
    <a href="editar.php?id=<?php echo base64_encode($linha["idproduto"]); ?>">editar
    </a>
    </td>

    <td>
        <a href="#" onclick="excluir(<?php echo($linha["idproduto"]); ?>)">excluir
    </a>
    </td>
</tr>
</tbody>
<?php          } ?>
<?php 

mysqli_close($con); ?>
</table>
</style>
    <script>
    function excluir(id){
        if(confirm('deseja realmente excluir este produto?')){;
        location.href='excluir.php?id='+id;
    }
    }
    </script>
    </div>
  
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
</div>