<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<title>Cervejaria</title>
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

    <script>
    var check = function () {
      if (document.getElementById('password').value ==
        document.getElementById('confirm_password').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Senhas Iguais';
      } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Senhas Diferentes';
      }
    }
  </script>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5  class="my-0 mr-md-auto font-weight-normal">Painel do Sistema</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-5 text-dark" href="index.php">Login</a></nav>
    <hr>
  </div>
	<div class='container'>
		<fieldset>
			<legend><h4>Cadastro de Cliente</h4></legend>
			
			<form action="gravar2.php" method="post" id='form-contato' enctype='multipart/form-data'>
				<div class="row">
			    <div class="form-group col-6">
			      <label for="nome">Nome</label>
			      <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o Nome" required>
			      <span class='msg-erro msg-nome'></span>
			    </div>
                <div class="form-group col-5 ">
			      <label for="login">Login</label>
			      <input type="text" class="form-control" id="login" name="login" placeholder="Informe o Login" required>
			      <span class='msg-erro msg-nome'></span>
			    </div>
          <div class="form-group col-3">
                <label>Senha :
                    <input class="form-control" name="senha" id="password" type="password" onkeyup='check();'required />
                </label>
            </div>
              <div class="form-group col-3">
                <label>Repita Senha:
                    <input class="form-control" type="password" name="confirm_password" id="confirm_password" onkeyup='check();' required/>
                        <span id='message'></span>
                </label>
                </div>
                <div class="form-group col-5">
                Categoria:
                    <select class="form-control"name="perfil" id="perfil" required>
                    <option value="">Selecione</option>
                    <option value="adm">Administrador</option>
                    <option value="user">Usuario</option>
                </select>
              </div>

			 <script>
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
    </head>
<br>
    <body>
    <div class="row">
    <div class="form-group col-4">
      <form method="get" action=".">
        <label>Cep:
        <input class="form-control"name="cep" type="text" id="cep" value="" size="40" maxlength="9" onblur="pesquisacep(this.value);"required /></label><br />
  </div>
      <div class="form-group col-4">
        <label>Rua:
        <input class="form-control"name="rua" type="text" id="rua" size="40"required /></label><br />
  </div>
      <div class="form-group col-3">
        <label>Bairro:
        <input class="form-control"name="bairro" type="text" id="bairro" size="40" required/></label><br />
  </div>
    <div class="form-group col-4">
        <label>Cidade:
        <input class="form-control"="cidade" type="text" id="cidade" size="40" required/></label><br />
  </div>
    <div class="form-group col-4">
        <label>Estado:
        <input class="form-control"name="uf" type="text" id="uf" size="40" required/></label><br />
  </div>
    <div class="form-group col-4">
        <label>IBGE:
        <input class="form-control" name="ibge" type="text" id="ibge" size="20"required /></label><br />
  </div>
      </form>
  </div>
    </body>
</html>   
<div class="form-group col-3">
			    <input type="hidden" name="acao" value="incluir">
			    <button type="submit" class="btn btn-primary col-10" id='botao'> 
			      Gravar
			    </button>
  </div>
  <div class="form-group col-3">
			    <button type="reset" class="btn btn-danger col-10 " id='botao'>Limpar
          </button>
          </div>

		</fieldset>
	</div>
  <br>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
<br>
<br>
<br>
<br>    
<br>
<br>
<hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="index.php">Sair</a></p>
    <p>&copy; 2022–2022 Cervejaria, Inc</a></p>
  </footer>
</main>


    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
