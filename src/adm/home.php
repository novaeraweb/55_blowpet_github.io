 <?php header('Content-Type: text/html; charset=utf-8');
    session_start();
    require "checkLogin.php";
    require_once "conecta.php"; 
    require_once "../function-produto.php";
    require_once "../produto.php";
    $adocoes = listaAdocao($conexao);
    $totalAdocao = totalAdocao($conexao);

 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Criação de sites e sistemas web - Agência Nova Era Web | Botucatu - SP</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 

        <meta name="description" content="Nova Era Web | (14)9.9628.5428 - Criação e desenvolvimento de sites responsivos, Marketing Digital e Hospedagem de Sites profissional." />
        <meta name="keywords" content="criação de sites, desenvolvimento de sites, sites, agencia web, agência digital, marketing online, hospedagem de sites, botucatu, avare, bauru, criação de sites botucatu, desenvolvimento de sites botucatu" />
        <meta name="author" content="Thiago Motta Vannuchi | Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP"> 
        <meta name="company" content="Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP" />
        <meta name="robots" content="follow,index">
        <meta name= "googlebot" content="follow,index">

        <link rel="author" href="https://www.novaeraweb.com.br"/>
        <link rel="publisher" href="https://plus.google.com/+NovaEraWebCria%C3%A7%C3%A3oeDesenvolvimentoBotucatu/posts"/>
        <link rel="canonical" href="https://novaeraweb.com.br" />

        <!-- Open Graph Data -->
        <meta property="og:locale" content="pt_BR">
        <meta property="og:title" content="Criação de sites | Agência Nova Era Web - Botucatu / SP" />
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://www.novaeraweb.com.br/"/>
        <meta property="og:image" content="https://novaeraweb.com.br/img/logo-nova-era-web.jpg" />
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="600">
        <meta property="og:description" content="Website da agência Nova Era Web criação e desenvolvimento de sites, marketing Digital e hospedagem de sites" />
        <meta property="og:site_name" content="Agência Nova Era Web"/>
        <meta property="fb:admins" content="Facebook ID - toda conta developer possui um ID"/>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

        <script src="js/responsive-nav.js"></script>
        <script src="js/picturefill.js"></script>

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@novaeraweb">
        <meta name="twitter:title" content="Nova Era Web - Criação e desenvolvimento de sites">
        <meta name="twitter:domain" content="Agência Nova Era Web"/>
        <meta name="twitter:description" content="Website da agência Nova Era Web criação e desenvolvimento de sites, marketing Digital e hospedagem de sites" />
        <meta name="twitter:creator" content="@novaeraweb">
        <!-- Imagem 200x200px -->
        <meta name="twitter:image" content="https://www.novaeraweb.com.br/img/logo-nova-era-web-twitter.jpg">
        
        <!-- Marcações HTML5 no IE9 anterior  -->
        <!--[if lt IE9]>
        <script src="js/html5shiv.min.js"></script>
        <![endif] -->
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">

window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "theme2",//theme1
        title:{
            text: "Basic Column Chart - CanvasJS"              
        },
        animationEnabled: false,   // change to true
        data: [              
        {
            // Change type to "bar", "area", "spline", "pie",etc.
            type: "column",
            dataPoints: [
                { label: "apple",  y: 10  },
                { label: "orange", y: 15  },
                { label: "banana", y: 25  },
                { label: "mango",  y: 30  },
                { label: "grape",  y: 28  }
            ]
        }
        ]
    });
    chart.render();
}
</script>
        
        <!--[if lt IE 9]>
            <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <div class="container">
                <div class="grid_1">
                    <img class="logo" src="images/logo-maos-e-patas.png" alt="Logo">
                </div>
                <div class="grid_8 topo-adm">
                             <nav>
            <div id="cssmenu">
              <ul>
                 <li class="has-sub"><img class="logo" src="images/icon_adm.png" alt="Logo"><a href="#"> Administrador</a>
                    <ul>
                       <li> <a href="#">Alterar Senha</a></li>
                       <li> <a href="#">Sair</a></li>
                    </ul>
                 </li>

              </ul>
            </div>
        </nav>
                </div>

            </div>  
        </header>
<div id="lateral">
<div id="menu">

<h3 class="link-titulo">Animais para Adoção</h3>              
    <ul class="box">                    
        <li><a href="#">Listar</a></li>
        <li><a href="#">Incluir</a></li>             
    </ul>

<h3 class="link-titulo">Animais Desaparecidos</h3>
    <ul class="box">                    
        <li><a href="#">Listar</a></li>
        <li><a href="#">Incluir</a></li>      
        <!-- mais links -->
    </ul>

<h3 class="link-titulo">Animais Encontrados</h3>
    <ul class="box">                    
        <li><a href="#">Listar</a></li>
        <li><a href="#">Incluir</a></li>               
        <!-- mais links -->
    </ul>
    
<!-- mais seções -->

</div> <!-- /#menu -->
</div id="link"> <!-- vazio --> <div>
</div> <!-- /#lateral -->


        <div id="main" class="container">
            <article class="grid_10">
            <p>Estatísticas gerais Mãos e Patas</p>
                <div class="grid_2 stats"><p><span> <?= $totalAdocao  ?></span><br> Postagens</p></div>
                <div class="grid_2 stats"><p><span><?= $totalAdocao  ?></span><br> Animais Chipados</p></div>
                <div class="grid_2 stats"><p><span><?= $totalAdocao  ?></span><br> Tutores</p></div>
                <div class="grid_2 stats"><p><span><?= $totalAdocao  ?></span><br> Animais para adoção</p></div>
                <div class="grid_2 stats"><p><span><?= $totalAdocao  ?></span><br> Animais perdidos</p></div>
                <div class="grid_2 stats"><p><span><?= $totalAdocao  ?></span><br> Animais perdidos</p></div>
            </article>
            <article class="grid_10">
            <p>Associados</p>
                <div class="grid_2 stats"><p><span> <?= $totalAdocao  ?></span><br> Associados ativos</p></div>
                <div class="grid_2 stats"><p><span><?= $totalAdocao  ?></span><br> Associados inativos </p></div>
                <p >Associados</p><div class="grid_4 stats" style="margin-top:-37px;"><p><span><?= $totalAdocao  ?></span><br> Tutores</p></div>


            </article>
        </div>

        <footer class="container">
            <p class="grid_10">&copy; //UX.BLOG, Curso de Responsive Web Design - Todos os direitos reservados.</p>

        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/jquery.fittext.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script type="text/javascript">
            $("h1").fitText(0.62);
            $("h2").fitText(1.7);

            $(document).ready(function(){
                // Target your .container, .wrapper, .post, etc.
                $("#video").fitVids();
              });

            var navigation = responsiveNav("#nav", {customToggle: "#menu"});
        </script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
