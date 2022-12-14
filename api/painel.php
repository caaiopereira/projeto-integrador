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
    <img src="cerva.jpg">
    <br>
    <br>
    </div>
    <div style="text-align:center">
        <h2>Da antiguidade ?? Idade Moderna</h2>
    <hr>
    </div>    
        <p>A hist??ria da cerveja tem in??cio h?? aproximadamente <b>9.000 anos</b> na Mesopot??mia, onde os sum??rios passaram a cultivar e a se alimentar de gr??os.
Depois do p??o, a cerveja foi acidentalmente descoberta atrav??s da fermenta????o espont??nea de cereais ou da pr??pria massa de p??o exposta ?? ??gua. Nesta ??poca, as mulheres ?? que eram respons??veis pela fabrica????o de distribui????o da cerveja, que passou a ser uma bebida bastante consumida e valorizada pelos povos da Antiguidade.
</p>    
<p>A cerveja era tida como uma bebida divina e oferecida frequentemente aos Deuses cultuados. Sum??rios, babil??nios e Gregos deixaram diversas provas arqueol??gicas que apontam tradi????es religiosas e produtivas relacionadas ?? cerveja.
O c??digo Hammurabi, por exemplo, (conjunto de leis dos babil??nios) exposto no Museu de Louvre em Paris, determinava n??o s?? regras para a fabrica????o de cerveja de boa qualidade, mas tamb??m a quantidade permitida para cada casta da sociedade.</p>

<div style="text-align:center">
    <h2>A antiguidade</h2>
    <hr>
    </div>
    <p>As <b>primeiras cervejas</b> que surgiram eram muito diferentes das cervejas que conhecemos hoje. Como o trigo era o melhor cereal para fabrica????o de p??es devido ?? grande quantidade de gl??ten, ele era tamb??m o cereal mais utilizado na fabrica????o de cervejas. Os eg??pcios tamb??m deixaram v??rias provas arqueol??gicas sobre produ????o de cerveja. A imagem acima, simula uma pr??-produ????o de cerveja, que nada mais ?? do que ama??ar uma massa de p??o e posteriormente misturar com ??gua, virando cerveja.</p>
    <p>Comparando com os dias atuais, o consumo nesta ??poca era em torno de 300 litros ano, sendo que atualmente, o maior consumo per capita no mundo ?? de 170 litros, na Rep??blica Tcheca. No Brasil, o consumo est?? em torno de 72 litros/ano.</p>
    <p>Os mosteiros na ??poca produziam 3 diferentes tipos de cerveja, que at?? hoje ?? seguido: Uma cerveja mais ???leve??? para consumo dos pr??prios monges, uma cerveja para as datas festivas e uma cerveja que era produzida para os viajantes que passavam pelos mosteiros.</p>
    <div style="text-align:center">
    <h2>Os Sum??rios</h2>
    <hr>
    </div>
<p>As provas arqueol??gicas mais antigas relacionadas ?? produ????o de cerveja vem da Sum??ria. H?? duas suspeitas principais de como a cerveja foi feita pela primeira vez.
Os povos, que antes eram n??mades, passaram a se fixar em alguns locais e a cultivar cereais, formando civiliza????es.</p>
    
    <p>A<b> primeira suspeita</b> ?? de que os gr??os foram acidentalmente expostos ?? ??gua. Os principais cereais cultivados nessa ??poca era a cevada e precursores gen??ticos do trigo.</p>

<p>Basicamente, com cereal exposto ?? ??gua, enzimas eram produzidas quebrando o amido em a??ucares menores tornando-o ferment??vel e posteriormente virando cerveja.</p>

<p>A<b> segunda suspeita</b> ?? que possivelmente uma massa de p??o foi exposta acidentalmente ?? ??gua e fermentado.</p>
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
    <p>&copy; 2022???2022 Cervejaria, Inc. &middot; <a href="#">Home</a> &middot; <a href="sair.php">Sair</a></p>
  </footer>
</main>


    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
