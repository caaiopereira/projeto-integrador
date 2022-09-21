<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cervejaria</title>
</head>
<body>
    
</body>
</html>

<?php 
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Pricing example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/pricing/pricing.css" rel="stylesheet">
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal"> 
      <?php echo "Seja Bem Vindo(a), ".$_SESSION["nome"];?></h5>
    <?php
        if($_SESSION["perfil"] == "adm"){
            include_once 'menu_adm.php';
        }else {
            include_once 'menu_user.php';
        }
    ?>
    </div>
    <div class="container">
    <div style="text-align:center">
    <img src="img/cerva.jpg">
    <br>
    <br>
    </div>
    <div style="text-align:center">
        <h2>Da antiguidade à Idade Moderna</h2>
    <hr>
    </div>    
        <p>A história da cerveja tem início há aproximadamente <b>9.000 anos</b> na Mesopotâmia, onde os sumérios passaram a cultivar e a se alimentar de grãos.
Depois do pão, a cerveja foi acidentalmente descoberta através da fermentação espontânea de cereais ou da própria massa de pão exposta à água. Nesta época, as mulheres é que eram responsáveis pela fabricação de distribuição da cerveja, que passou a ser uma bebida bastante consumida e valorizada pelos povos da Antiguidade.
</p>    
<p>A cerveja era tida como uma bebida divina e oferecida frequentemente aos Deuses cultuados. Sumérios, babilônios e Gregos deixaram diversas provas arqueológicas que apontam tradições religiosas e produtivas relacionadas à cerveja.
O código Hammurabi, por exemplo, (conjunto de leis dos babilônios) exposto no Museu de Louvre em Paris, determinava não só regras para a fabricação de cerveja de boa qualidade, mas também a quantidade permitida para cada casta da sociedade.</p>

<div style="text-align:center">
    <h2>A antiguidade</h2>
    <hr>
    </div>
    <p>As <b>primeiras cervejas</b> que surgiram eram muito diferentes das cervejas que conhecemos hoje. Como o trigo era o melhor cereal para fabricação de pães devido à grande quantidade de glúten, ele era também o cereal mais utilizado na fabricação de cervejas. Os egípcios também deixaram várias provas arqueológicas sobre produção de cerveja. A imagem acima, simula uma pré-produção de cerveja, que nada mais é do que amaçar uma massa de pão e posteriormente misturar com água, virando cerveja.</p>
    <p>Comparando com os dias atuais, o consumo nesta época era em torno de 300 litros ano, sendo que atualmente, o maior consumo per capita no mundo é de 170 litros, na República Tcheca. No Brasil, o consumo está em torno de 72 litros/ano.</p>
    <p>Os mosteiros na época produziam 3 diferentes tipos de cerveja, que até hoje é seguido: Uma cerveja mais “leve” para consumo dos próprios monges, uma cerveja para as datas festivas e uma cerveja que era produzida para os viajantes que passavam pelos mosteiros.</p>
    <div style="text-align:center">
    <h2>Os Sumérios</h2>
    <hr>
    </div>
<p>As provas arqueológicas mais antigas relacionadas à produção de cerveja vem da Suméria. Há duas suspeitas principais de como a cerveja foi feita pela primeira vez.
Os povos, que antes eram nômades, passaram a se fixar em alguns locais e a cultivar cereais, formando civilizações.</p>
    
    <p>A<b> primeira suspeita</b> é de que os grãos foram acidentalmente expostos à água. Os principais cereais cultivados nessa época era a cevada e precursores genéticos do trigo.</p>

<p>Basicamente, com cereal exposto à água, enzimas eram produzidas quebrando o amido em açucares menores tornando-o fermentável e posteriormente virando cerveja.</p>

<p>A<b> segunda suspeita</b> é que possivelmente uma massa de pão foi exposta acidentalmente à água e fermentado.</p>
</div>
    </div>
</body>
</html>
<br>
<hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">De volta ao topo</a></p>
    <p>&copy; 2022–2022 Cervejaria, Inc. &middot; <a href="#">Home</a> &middot; <a href="sair.php">Sair</a></p>
  </footer>
</main>


    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
