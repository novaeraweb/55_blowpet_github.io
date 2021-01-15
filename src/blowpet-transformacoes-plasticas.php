<?php header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once "adm/conecta.php";
require_once "adm/function.php";
require_once "adm/class.php";
mysqli_select_db($blowpet,$database_blowpet);
$produtos = listaProdutos($blowpet);
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="pt" class="no-js"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Blowpet Transformações Plásticas | Botucatu/SP</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
  <meta name="description" content="BlowPet | Botucatu/SP" />
  <meta name="keywords" content="Desenvolvemos, produzimos e comercializamos embalagens PET ao longo de 22 anos e nos consolidamos como referência no segmento de frascos soprados PET." />
  <meta name="author" content="Thiago Motta Vannuchi | Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP"> 
  <meta name="company" content="Blowpet Transformações Plásticas| Botucatu/SP" />
  <meta name="robots" content="follow,index">
  <meta name= "googlebot" content="follow,index">
  <meta name="DC.publisher" content="Nova Era Web">
  <meta name="DC.date.created" content="2008-10-01">
  <meta name="DC.Identifier" content="https://www.blowpet.com.br">
  <meta name="DC.date.modified" content="<?php echo date("o"); ?>-<?php echo date("n"); ?>-<?php echo date("j"); ?>">
  <link rel="author" href="https://www.novaeraweb.com.br"/>
  <link rel="canonical" href="https://www.blowpet.com.br/blowpet-transformacoes-plasticas.php" />
  <meta property="og:locale" content="pt_BR">
  <meta property="og:title" content="Blowpet Transformações Plásticas | Botucatu/SP" />
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://www.blowpet.com.br/blowpet-transformacoes-plasticas.php"/>
  <meta property="og:image" content="https://www.blowpet.com.br/images/logo-blowpet.png" />
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="800">
  <meta property="og:image:height" content="600">
  <meta property="og:description" content="Desenvolvemos, produzimos e comercializamos embalagens PET ao longo de 22 anos e nos consolidamos como referência no segmento de frascos soprados PET." />
  <meta property="og:site_name" content="Blowpet Transformações Plásticas | Botucatu/SP"/>
  <meta property="fb:admins" content="Blowpet"/>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
  .demo-code{ background-color:#ffffff; border:1px solid #333333; display:block; padding:10px;}
  .option-table td{ border-bottom:1px solid #eeeeee;}
  </style>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<?php require "header.php" ?>
<main id="main" class="grid_10">
<div class="grid_10">
    <div class="container texto" style="padding-bottom:5%;">
      <h1>A Blowpet</h1>
        <p>Localizada no Distrito Industrial III em Botucatu/SP, desenvolvemos, produzimos e comercializamos embalagens PET ao longo de 22 anos e nos consolidamos como referência no segmento de frascos soprados PET.</p>
    </div>
    <div class="grid_10 empresa">
        <div class="container">
          <div class="grid_6">
          </div>
        </div>
    </div>
</div>  



<div class="grid_10 garrafa-pet">
    <div class="container">
      <div class="grid_4">

    </div>
    <div class="grid_6" style="text-align: justify;">
      <p><strong>Nossa missão</strong> é desenvolver produtos de excelência em embalagens plásticas, atendendo as expectativas dos clientes e promovendo bem-estar aos nossos profissionais, parceiros e comunidade, agregando valor ao nosso negócio.</p>
      <p>Nosso parque industrial foi concebido para atender com <strong>qualidade, segurança, baixo custo e agilidade</strong> desde <strong>pequenos até grandes envasadores.</strong></p>
      <p>Utilizamos compressores isentos de óleo, para evitar riscos de contaminação em produtos do ramo alimentício. Possuímos injetoras e moldes alemães, o que nos habilita ao uso de material reciclado com garantia de qualidade.</p>
      <p>Atuamos, preferencialmente, em sistema just in time, com frota própria. Assim, reduzimos o custo e espaço de estocagem do envasador, com garantia de entrega e qualidade na hora marcada.</p>
      <p>Hoje, produzimos em 3 cidades paulistas. Além da sede em Botucatu temos 2 franquias: São Carlos e Sorocaba.</p>
    </div>
</div>


</main>
<section class="grid_10">
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBltISLHfV6EWHxb-q5WrUcSKgXoE8TBZU'></script><div style='overflow:hidden;width:100%;'><div id='gmap_canvas' style='height:350px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(-22.8522313,-48.4914871),scrollwheel: false, mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-22.8522313,-48.4914871)});infowindow = new google.maps.InfoWindow({content:'<h4 style="text-align:center;margin-top:2px;">ONDE ESTAMOS</h4><strong>Blowpet - Transformações Plásticas</strong><br>Rua Lourival Ferreira,95 | Distrito Industrial III<br>Botucatu/SP<br><br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
    </script>
</section> 
<?php require "footer.php" ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/vendor/modernizr-2.6.2.min.js"></script><script defer src="js/main.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script type="text/javascript">
$(document).ready(function(){
// Target your .container, .wrapper, .post, etc.
$("#video").fitVids();
});
</script></body></html>