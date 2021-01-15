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
  <title>Fale Conosco - Blowpet Transformações Plásticas | Botucatu/SP</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
  <meta name="description" content="Blowpet Transformações Plásticas | Botucatu/SP" />
  <meta name="keywords" content="contato blowpet, fale conosco blowpet, frascos pet, rotulagem, preformas pet, botucatu" />
  <meta name="author" content="Thiago Motta Vannuchi | Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP"> 
  <meta name="company" content="Blowpet Transformações Plásticas | Botucatu/SP" />
  <meta name="robots" content="follow,index">
  <meta name= "googlebot" content="follow,index">
  <meta name="rating" content="general" />
  <meta name="DC.title" content="Fale Conosco - Blowpet Transformações Plásticas | Botucatu/SP" />
  <meta name="DC.publisher" content="Blowpet Transformações Plásticas">
  <meta name="DC.date.created" content="2008-10-01">
  <meta name="DC.Identifier" content="https://www.blowpet.com.br">
  <meta name="DC.date.modified" content="<?php echo date("o"); ?>-<?php echo date("n"); ?>-<?php echo date("j"); ?>">
  <link rel="author" href="https://www.novaeraweb.com.br"/>
  <link rel="canonical" href="https://www.blowpet.com.br/blowpet-fale-conosco.php" />
  <meta property="og:locale" content="pt_BR">
  <meta property="og:title" content="Fale Conosco - Blowpet Transformações Plásticas | Botucatu/SP" />
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://www.blowpet.com.br/blowpet-fale-conosco.php"/>
  <meta property="og:image" content="https://www.blowpet.com.br/images/logo-blowpet.png" />
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="800">
  <meta property="og:image:height" content="600">
  <meta property="og:description" content="Blowpet Transformações Plásticas - | Botucatu/SP" />
  <meta property="og:site_name" content="Blowpet Transformações Plásticas - Botucatu/SP"/>
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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
      <h1>Fale Conosco</h1>
    </div>
    <div class="grid_10 fale-conosco">
        <div class="container">
          <div class="grid_6">
          </div>
        </div>
    </div>
</div>  

    <aside class="grid_10" style="margin-bottom:60px;">

        <div class="grid_4 " style="text-align: center;margin-bottom: 50px;">
          <h2 style="padding-top:60px">ENTRE EM CONTATO</h2><br>
          <p>Envie sua mensagem que retornaremos o mais breve.<br>Tem um projeto? Fale mais detalhes que podemos lhe ajudar.</p>
        </div>
        <div class="grid_6" id="contato">
          <form action="phpmailer/enviar.php" method="post" name="form" class="form-contato">
          <?php require_once "alerta-confirma.php"?>
            <div class="grid_55"><input type="text" name="nome" placeholder="Nome *"required></div>
            <div class="grid_55"><input type="email" name="email" placeholder="Email *" required></div>
            <div class="grid_55"><input type="text" name="telefone" placeholder="Tel/WhatsApp *" onkeypress="MascaraTelefone(form.telefone)" maxlength="15" required></div>
            <div class="grid_55"><input type="text" name="cidade" placeholder="Cidade" ></div>
            <input type="hidden" name="pagina" value="blowpet-fale-conosco.php">
            <textarea type="text" name="mensagem" id="" cols="30" rows="10" placeholder="Mensagem *"></textarea>
            <div class="g-recaptcha" data-sitekey="6LdDoiwaAAAAABHGz9fSpZkKkRY8DNvor7wio_8c"></div>
            <button style="margin-left: 0;" type="submit" name="btn-contato">Enviar</button>
            <p style="font-weight: 200; font-size:0.9em;">* campos obrigatórios</p>
          </form>
        </div>

    </aside>


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