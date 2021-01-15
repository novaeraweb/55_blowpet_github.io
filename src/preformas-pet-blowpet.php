<?php header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once "adm/conecta.php";
require_once "adm/function.php";
require_once "adm/class.php";
mysqli_select_db($blowpet,$database_blowpet);
$preformas = listaPreformas($blowpet);
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="pt" class="no-js"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Preformas Pet Plástico - Blowpet | Botucatu/SP</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
  <meta name="description" content="BlowPet | Botucatu/SP" />
  <meta name="keywords" content="Botucatu/SP" />
  <meta name="author" content="Thiago Motta Vannuchi | Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP"> 
  <meta name="company" content="Blowpet | Botucatu/SP" />
  <meta name="robots" content="follow,index">
  <meta name= "googlebot" content="follow,index">
  <meta name="DC.publisher" content="Nova Era Web">
  <meta name="DC.date.created" content="2008-10-01">
  <meta name="DC.Identifier" content="https://www.blowpet.com.br">
  <meta name="DC.date.modified" content="<?php echo date("o"); ?>-<?php echo date("n"); ?>-<?php echo date("j"); ?>">
  <link rel="author" href="https://www.novaeraweb.com.br"/>
  <link rel="canonical" href="https://www.blowpet.com.br/preformas-pet-blowpet.php" />
  <meta property="og:locale" content="pt_BR">
  <meta property="og:title" content="Blowpet | Botucatu/SP" />
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://www.blowpet.com.br/preformas-pet-blowpet.php"/>
  <meta property="og:image" content="https://blowpet.com.br/images/logo-blowpet.png" />
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="800">
  <meta property="og:image:height" content="600">
  <meta property="og:description" content="Blowpet - | Botucatu/SP" />
  <meta property="og:site_name" content="Blowpet Transformções Plásticas - Botucatu/SP"/>
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
  <link rel="stylesheet" href="css/layout.css">
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
<div class="grid_10">
    <div class="container texto" style="padding-bottom:5%;">
      <h1>Preformas plásticas</h1>
        <p>Preformas em Pet com diferentes gramaturas. Temos como padrão as cores Cristal e Verde, para demais cores favor entrar em contato com o setor de vendas pelos canais de atendimento <span style="font-size: 0.8em">( artur@blowpet.com.br | odirley@blowpet.com.br | Cel/WhatsApp: (14)9.9867.0148</span></p>
    </div>
  <div class="container">

    <ul id="filters" class="clearfix">
      <li><span class="filter active" data-filter="all">Preformas</span></li>
      <!-- <li><span class="filter" data-filter=".1">Preformas</span></li> -->
    </ul>

    <div id="portfoliolist">

      <?php foreach($preformas as $preforma) {  ?>
      <div class="portfolio <?=$preforma->menu?>" data-cat="<?=$preforma->menu?>">
        <div class="portfolio-wrapper">       
          <img src="adm/arquivos/<?=$preforma->arquivo?>" alt="" />
          <div class="label-text">
            <div class="label-text">
              <?=$preforma->nome?><br>
              <p>Densidade: <?=$preforma->densidade?><br>
              PCO: <?=$preforma->pco?><br>
              Máquina: <?=$preforma->maquina?></p>
              

              <a href="blowpet-orcamento.php?acao=add&prod_id=<?=$preforma->id?>" class="botao3" style="padding:1%;"><img src="images/icon-list.svg"  width="50%" alt="Email Blowpet" style="margin-top: 8%;
              margin-left: 10px;"></a>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>
    <?php } ?>

    </div>
    
  </div><!-- container -->


</div>  




</main>
<?php require_once "footer.php" ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=1746270335674877&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.mixitup.min.js"></script><script defer src="js/main.js"></script>
  
  <script type="text/javascript">
  $(function () {
    
    var filterList = {
    
      init: function () {
      
        // MixItUp plugin
        // http://mixitup.io
        $('#portfoliolist').mixItUp({
          selectors: {
            target: '.portfolio',
            filter: '.filter' 
          },
          load: {
            filter: 'all'  
          }     
        });               
      
      }

    };
    
    // Run the show!
    filterList.init();
    
    
  }); 
  </script>
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script type="text/javascript">
$(document).ready(function(){
// Target your .container, .wrapper, .post, etc.
$("#video").fitVids();
});
</script></body></html>