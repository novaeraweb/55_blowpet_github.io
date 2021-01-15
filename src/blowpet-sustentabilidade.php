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
  <title>Sustentabilidade - Blowpet | Botucatu/SP</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
  <meta name="description" content="A Blowpet, preocupada com os efeitos do incorreto descarte de embalagens e sabendo da importância do seu papel na sociedade adota uma gestão voltada para estratégias sustentáveis:" />
  <meta name="keywords" content="Botucatu/SP" />
  <meta name="author" content="Thiago Motta Vannuchi | Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP"> 
  <meta name="company" content="Sustentabilidade - Blowpet | Botucatu/SP" />
  <meta name="robots" content="follow,index">
  <meta name= "googlebot" content="follow,index">
  <meta name="DC.publisher" content="Nova Era Web">
  <meta name="DC.date.created" content="2008-10-01">
  <meta name="DC.Identifier" content="https://www.blowpet.com.br">
  <meta name="DC.date.modified" content="<?php echo date("o"); ?>-<?php echo date("n"); ?>-<?php echo date("j"); ?>">
  <link rel="author" href="https://www.novaeraweb.com.br"/>
  <link rel="canonical" href="https://www.blowpet.com.br/blowpet-sustentabilidade.php" />
  <meta property="og:locale" content="pt_BR">
  <meta property="og:title" content="Sustentabilidade - Blowpet | Botucatu/SP" />
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://www.blowpet.com.br/blowpet-sustentabilidade.php"/>
  <meta property="og:image" content="https://blowpet.com.br/images/logo-blowpet.png" />
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="800">
  <meta property="og:image:height" content="600">
  <meta property="og:description" content="A Blowpet, preocupada com os efeitos do incorreto descarte de embalagens e sabendo da importância do seu papel na sociedade adota uma gestão voltada para estratégias sustentáveis:" />
  <meta property="og:site_name" content="Sustentabilidade - Blowpet | Botucatu/SP"/>
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

    <div class="container texto" style="padding-bottom:5%;">
      <h1>Sustentabilidade</h1>
      <p>Empresa com responsabilidade ambiental</p>
    </div>
    <div class="grid_10 sustentabilidade">

    </div>


    <div class="grid_10" style="margin-bottom:80px;margin-top: 60px;">
    <div class="container justifica">
    <p>A Blowpet, preocupada com os efeitos do incorreto descarte de embalagens e sabendo da importância do seu papel na sociedade adota uma gestão voltada para estratégias sustentáveis:</p>

    <ul class="list-sustentabilidade">
      <li><img src="images/leaf.svg" alt="BlowPet - Sustentabilidade" width="20px" style="margin-right: 20px;">Uso de PET reciclado grau alimentício (PET – PCR) como insumo;</li>
      <li><img src="images/leaf.svg" alt="BlowPet - Sustentabilidade" width="20px" style="margin-right: 20px;">Reaproveitamento dos rejeitos de produção;</li>
      <li><img src="images/leaf.svg" alt="BlowPet - Sustentabilidade" width="20px" style="margin-right: 20px;">Área de reciclagem para prensagem e moagem dos rejeitos;</li>
      <li><img src="images/leaf.svg" alt="BlowPet - Sustentabilidade" width="20px" style="margin-right: 20px;">Compressores isentos de óleo;</li>
      <li><img src="images/leaf.svg" alt="BlowPet - Sustentabilidade" width="20px" style="margin-right: 20px;">Foco em redução de perdas no processo produtivo</li>
      <li><img src="images/leaf.svg" alt="BlowPet - Sustentabilidade" width="20px" style="margin-right: 20px;">Projetos de desenvolvimento de pessoas</li>
    </ul>

    <p>De acordo com a Política Nacional de Resíduos Sólidos, temos orgulho de usar resina reciclada a partir de embalagens pós-consumo (PET – PCR) em sua produção.</p>

    <p>O PET-PCR grau alimentício (PET pós-consumo reciclado) é o PET obtido após um processo de reciclagem e descontaminação do PET pós-consumo. O processo de reciclagem e descontaminação consiste em uma tecnologia de reciclagem física ou química com alta eficiência de descontaminação, que tenha sido demonstrada por procedimento de validação normalizado (challenge test ou equivalente), e que por isso, conta com autorizações especiais de uso, validadas pela Anvisa.</p>

    <p>Segundo o 10º Censo da Reciclagem de PET no Brasil, publicado em Nov/2016 pela Abipet, 51% de todo volume disponível de PET no país foi reciclado. Desse total, 25,7% são usados para produzir novas embalagens (caso da Blowpet). Outras aplicações são têxteis, tintas, resinas insaturadas, lâminas, fitas de arquear, entre outros.</p>

    <p>Os volumes de reciclagem no Brasil aumentam ano a ano, propiciando a criação de uma nova indústria, pois a reciclagem de PET é economicamente viável, gerando emprego, renda e resgate social.</p>

    <p>Conforme a Abipet destaca, evitar o descarte inadequado, fomentar a reciclagem e apoiar a educação ambiental são atribuição de todos os integrantes do setor.</p>

    <p>Além da preocupação em utilizar um produto reciclado como insumo, a Blowpet se preocupa em cuidar adequadamente dos rejeitos gerados no processo. Possuímos uma pequena área de reciclagem onde as garrafas e preformas livres de contaminação são moídas, virando o que chamamos de “flake” e esse flake é vendido para ser transformado em resina novamente. Além disso, todas as garrafas descartadas que estão contaminadas são prensadas e também vendidas para outra finalidade.</p>

    <p>Fonte: Abipet em www.abipet.org.br<br>
    Anvisa: Informe Técnico nº. 71/2016 –GGALI/ANVISA pág 2
    </p>
<div class="grid_10" style="margin: 0 auto;">
<video controls class="video">
  <source src="foo.ogg" type="video/ogg">
  <source src="video/sustentabilidade.mp4" type="video/mp4">
  Seu navegador não suporta o elemento <code>video</code>.
</video>
</div>



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