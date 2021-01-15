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
  <title>Projetos Personalizados - Blowpet Transformações Plásticas | Botucatu/SP</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
  <meta name="description" content="Projetos Personalizados de frascos Pet - BlowPet Transformações Plásticas | Botucatu/SP" />
  <meta name="keywords" content="Botucatu/SP" />
  <meta name="author" content="Thiago Motta Vannuchi | Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP"> 
  <meta name="company" content="Blowpet Transformações Plásticas | Botucatu/SP" />
  <meta name="robots" content="follow,index">
  <meta name= "googlebot" content="follow,index">
  <meta name="DC.publisher" content="Nova Era Web">
  <meta name="DC.date.created" content="2008-10-01">
  <meta name="DC.Identifier" content="https://www.blowpet.com.br">
  <meta name="DC.date.modified" content="<?php echo date("o"); ?>-<?php echo date("n"); ?>-<?php echo date("j"); ?>">
  <link rel="author" href="https://www.novaeraweb.com.br"/>
  <link rel="canonical" href="https://www.blowpet.com.br" />
  <meta property="og:locale" content="pt_BR">
  <meta property="og:title" content="Blowpet | Botucatu/SP" />
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://www.blowpet.com.br/blowpet-projetos-personalizados.php"/>
  <meta property="og:image" content="https://blowpet.com.br/images/logo-blowpet.png" />
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="800">
  <meta property="og:image:height" content="600">
  <meta property="og:description" content="Blowpet - | Botucatu/SP" />
  <meta property="og:site_name" content="Blowpet - Botucatu/SP"/>
  <meta property="fb:admins" content="BlowPet"/>
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
      <h1>Projetos Personalizados </h1>
    </div>
    <div class="grid_10 trabalhe-conosco">
        <div class="container">
          <div class="grid_6">
          </div>
        </div>
    </div>
</div>  

    <aside class="grid_10" style="margin-bottom:60px;">

        <div class="grid_4 " style="text-align: center;margin-bottom: 50px;">
          <h2 style="padding-top:60px">Projetos Personalizados</h2><br>
          <p>Preencha os dados e anexe o arquivo do seu projeto.</p>
        </div>
        <div class="grid_6">
          <form action="phpmailer/enviar.php" method="post" name="form" class="form-contato">

            <div class="grid_55"><input type="text" name="nome" placeholder="Nome *"required></div>
            <div class="grid_55"><input type="text" name="email" placeholder="Email *" required></div>
            <div class="grid_55"><input type="text" name="telefone" placeholder="Tel/WhatsApp *" onkeypress="MascaraTelefone(form.telefone)" maxlength="15" required></div>
            <div class="grid_55"><input type="text" name="cidade" placeholder="Cidade" ></div>
            <textarea type="text" name="mensagem" id="" cols="30" rows="6" placeholder="Conte-nos sobre seu projeto *"></textarea>
            <label for="">Anexar arquivo do projeto (.doc ou .pdf)</label><br><hr>
            <input type="file" name="arquivo">
            <button style="margin-left: 0;" name="btn-projeto-personalizado">Enviar</button>
            <p style="font-weight: 200; font-size:0.9em;">* campos obrigatórios</p>
          </form>
        </div>

    </aside>


</main>
<section class="grid_10">
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAfgqdePjpGCT89-k9Kf9UHgjJxgQcqF4M'></script><div style='overflow:hidden;width:100%;'><div id='gmap_canvas' style='height:350px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(-22.89150728501956,-48.444168785034455),scrollwheel: false, mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-22.89150728501956,-48.444168785034455)});infowindow = new google.maps.InfoWindow({content:'<h4 style="text-align:center;margin-top:2px;">ONDE ESTAMOS</h4><strong>Blowpet - Transformações Plásticas</strong><br>Rua Lourival Ferreira,95 | Distrito Industrial III<br>Botucatu/SP<br><br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
    </script>
</section>  
<?php require "footer.php" ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script type="text/javascript">
$(document).ready(function(){
// Target your .container, .wrapper, .post, etc.
$("#video").fitVids();
});
</script></body></html>