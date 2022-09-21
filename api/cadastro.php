<?php 

// 1 resgatar os dados vindo do formulario
            $nome = $_POST["nome"];
            $tipo = $_POST["tipo"];
            $pais = $_POST["pais"];
            $nota = $_POST["nota"];
            $comentario = $_POST["comentario"];
            
 // 2 abrir a conexão com o banco de dados
 include_once 'conexao.php';

 // 3 montar a instrução para gravar no banco
 $sql ="insert into produto values
 (null,'".$nome."','".$tipo."','".$pais."','".$nota."','".$comentario."')";

 // 4 gravar
 $result = mysqli_query($con,$sql);

 if($result){
    $msg = "Gravado com sucesso!";
}else{
    $msg = "Erro ao Gravar!";
}

    // 5 fechar a conexão com o banco
    mysqli_close($con);
    echo"<script>alert('".$msg."');
    location.href='consulta.php';
    </script>";

    ?>