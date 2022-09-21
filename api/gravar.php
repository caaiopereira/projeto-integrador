<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Dados Registrados</h1>

<?php
// resgate de dados
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);
    $perfil = $_POST["perfil"];
    $rua = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $cep = $_POST["cep"];
    $ibge = $_POST["ibge"];

    
    // != diferente
    // == igual 
    // = recebe
    // && e
    // || 
  
    
    // validação na segunda camada
        if($nome != "" && $login != "" && $senha != "" && $perfil != "" && $cep != "" && $rua != "" && $bairro != "" && $cidade != "" && $uf != "" && $cep != ""&& $ibge != ""){


           //se entrou aqui significa que validou
    echo"<br>Nome: ".$nome;
    echo"<br>Login: ".$login;
    echo"<br>Categoria: ".$perfil;
    echo"<br>Rua: ".$rua;
    echo"<br>Bairro: ".$bairro;
    echo"<br>Cidade: ".$cidade;
    echo"<br>UF: ".$uf;
    echo"<br>Cep: ".$cep;
    echo"<br>IBGE: ".$ibge;

            //definindo o local
            date_default_timezone_set("America/Sao_Paulo");
            //criamos o arquivo texto
            $arquivo = fopen("dados.txt","a+");
            // gravar
            fwrite($arquivo, "Dados do Cliente - Cadastro realizado em :".date("d/m/Y")." as ".date("H:i:s"));
            fwrite($arquivo, "\nNome :".$nome);
            fwrite($arquivo, "\nLogin :".$login);
            fwrite($arquivo, "\nCategoria :".$perfil);
            fwrite($arquivo, "\nRua :".$rua);
            fwrite($arquivo, "\nBairro :".$bairro);
            fwrite($arquivo, "\nCidade :".$cidade);
            fwrite($arquivo, "\nUF :".$uf);
            fwrite($arquivo, "\nCep :".$cep);
            fwrite($arquivo, "\nIBGE :".$ibge);
            fwrite($arquivo, "\n----------------------------\n\n");
            // fechar o arquivo texto
            fclose($arquivo);
        //acessar local do "dados.txt" atraves do servidor(xampp)
       
         }else{
            // deu ruim
            echo "<script>alert ('Preencha os dados corretamente'); location.href='formulario.php';</script>";
        }
        // nome = input, endereco = input, sexo = radio, curso: checkbox
?>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>