<?php

//pegar os dados da tela 
$id = $_POST["id"];
$nome = $_POST["nome"];
$tipo = $_POST["tipo"];
$pais = $_POST["pais"];
$nota = $_POST["nota"];
$comentario = $_POST["comentario"];

//abrir a conexão com o banco
include_once 'conexao.php';

//montar a instrução de atualizar
$sql = "update produto set 
nome = '".$nome."',
tipo = '".$tipo."',
pais = '".$pais."',
nota = '".$nota."',
comentario = '".$comentario."'
where idproduto =".$id;

//executar
$rs = mysqli_query($con,$sql);
if($rs){
    $msg = "Atualizado com Sucesso!";
}else{
    $msg = "Erro ao Atualizar!";
}

//fechar conexao com o banco
mysqli_close($con);
echo"<script>alert('".$msg."');
location.href='consulta.php';


</script>";


?>