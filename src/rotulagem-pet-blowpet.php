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
  <title>Rotulagem em Embalagens Pet Plástico - Blowpet | Botucatu/SP</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
  <meta name="description" content="A Blowpet trabalha com linhas para entrega de produtos rotulados atendendo diferentes técnicas de rotulagem | BlowPet | Botucatu/SP" />
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
  <link rel="canonical" href="https://www.blowpet.com.br/rotulagem-pet-blowpet.php" />
  <meta property="og:locale" content="pt_BR">
  <meta property="og:title" content="Blowpet | Botucatu/SP" />
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://www.blowpet.com.br/rotulagem-pet-blowpet.php"/>
  <meta property="og:image" content="https://blowpet.com.br/images/logo-blowpet.png" />
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="800">
  <meta property="og:image:height" content="600">
  <meta property="og:description" content="A Blowpet trabalha com linhas para entrega de produtos rotulados atendendo diferentes técnicas de rotulagem | BlowPet | Botucatu/SP" />
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
<div class="grid_10">
    <div class="container texto" style="padding-bottom:5%;">
      <h1>Rotulagem em Embalagens Pet</h1>
        <p>Rotulagem de acordo com os padrões da sua peça</p>
    </div>
    <div class="grid_10 rotulagem">

    </div>

    <div class="grid_10 justifica" style="margin-top: 60px;">
    <div class="container texto">
    <p>A Blowpet trabalha com linhas para entrega de produtos rotulados atendendo diferentes técnicas de rotulagem.</p>
  </div>
  <div class="container" style="margin-bottom:80px;">
    <h2>Rotulagem Hot Melt</h2><br>
    <p>O adesivo Hot Melt é um material termo fundível que não possui solventes em sua composição. É o tipo mais comum de rotulagem para garrafas pet, composta por um rótulo que ocupa toda a circunferência de rotulagem da garrafa, podendo ser facilmente removido sem deixar resíduos, o que facilita a reciclagem da embalagem.</p>
    <p>Indicado para garrafas cilindricas.</p>
  </div>
  <div class="container" style="margin-bottom:80px;">
    <h2>Rotulagem Auto Adesiva</h2><br>
    <p>A rotulagem auto adesiva possui algumas opções de cola que garantem a aderência à diversas superfícies. Os auto adesivos também são muito versáteis em relação ao tamanho e garantem maior resistência à umidade e calor.</p>
    <p>São indicados para garrafas quadradas e retangulares, aplicando-se o rótulo na frente e no verso da garrafa.</p>
  </div>
  <div class="container" style="margin-bottom:80px;">
    <h2>Rotulagem Termoencolhível</h2><br>
    <p>A rotulagem termoencolhível consiste em um forno e a aderência do rótulo se dá através do calor, dispensando o uso de cola e permitindo que a embalagem seja envolta por completo com o rótulo, ampliando a área para comunicação.</p>
  </div>
  <div class="container" id="contato">
          <form action="phpmailer/enviar.php" method="post" name="form" class="form-contato">
          <?php require_once "alerta.php"?>
              <h3>Solicite um Orçamento para Rotulagem</h3><br>
            <div class="grid_55"><input type="text" name="nome" placeholder="Nome *"required></div>
            <div class="grid_55"><input type="text" name="email" placeholder="Email *" required></div>
            <div class="grid_55"><input type="text" name="telefone" placeholder="Tel/WhatsApp *"  required></div>
            <div class="grid_55"><input type="text" name="cidade" placeholder="Cidade" ></div>
            <div class="grid_10"> <label for="Quantidade">Quantidade</label><br>

            <input type="number" id="quantidade" name="quantidade" min="0" max="100000" step="500" value="1000" ><br><br></div>
            <textarea type="text" name="" id="" cols="30" rows="10" placeholder="Conte-nos um pouco mais sobre seus produtos e sua demanda *" style="padding:2%;"></textarea>
            <div class="g-recaptcha" data-sitekey="6LdDoiwaAAAAABHGz9fSpZkKkRY8DNvor7wio_8c"></div>
            <input type="hidden" name="pagina" value="rotulagem-pet-blowpet.php">
            <button type="submit" name="btn-rotulagem">Enviar</button>
            <p style="font-weight: 200; font-size:0.9em;">* campos obrigatórios</p>
          </form>
 <hr> </div>

</div>

</main>
<?php require_once "footer.php" ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script><script defer src="js/main.js"></script>
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script type="text/javascript">
$(document).ready(function(){
// Target your .container, .wrapper, .post, etc.
$("#video").fitVids();
});
</script></body></html>