<?php

// BUSCAR O ID PELA URL
$id =$_GET["id"];

// MONTAR A INSTRUÇÃO DE APAGAR NO BANCO DE DADOS
$sql = "delete from produto where idproduto =".$id;

//chamar a conexão
include_once 'conexao.php';

if(mysqli_query($con,$sql)){
    $msg = "Produto Excluido com sucesso!";
}else{
    $msg = "Erro ao Excluir!";
}
mysqli_close($con);
echo"<script>alert('".$msg."');
location.href='consulta.php';


</script>";

?>