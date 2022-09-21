<?php 

// 1 resgatar os dados vindo do formulario
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);
    $perfil = $_POST["perfil"];
            
 // 2 abrir a conexão com o banco de dados
 include_once 'conexao.php';

 // 3 montar a instrução para gravar no banco
 $sql ="insert into usuario values
 (null,'".$nome."','".$login."','".$senha."','".$perfil."')";

 // 4 gravar
 $result = mysqli_query($con,$sql);

 if($result){
     
    $msg = "Gravado com sucesso!";
}else{
    $msg = "Preencha os dados corretamente!";
}

    // 5 fechar a conexão com o banco
    mysqli_close($con);
    echo"<script>alert('".$msg."');
    location.href='formulario.php';
    </script>";

    ?>