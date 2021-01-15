<?php header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL, "pt_BR", "pt_BR.utf8", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
session_start();
require_once "adm/conecta.php";
require_once "adm/function.php";
require_once "adm/class.php";
mysqli_select_db($blowpet,$database_blowpet);
$produtos = listaProdutos($blowpet);


      if(!isset($_SESSION['carrinho'])){
         $_SESSION['carrinho'] = array();
      }
 
      //adiciona produto
 
      if(isset($_GET['acao'])){
 
         //ADICIONAR CARRINHO
         if($_GET['acao'] == 'add'){
            $id = intval($_GET['prod_id']);
            if(!isset($_SESSION['carrinho'][$id])){
               $_SESSION['carrinho'][$id] = 1;
            }else{
               echo '<script>alert("Esse produto já está na lista!");</script>';
            }
         }
 
         //REMOVER CARRINHO
         if($_GET['acao'] == 'del'){
            $id = intval($_GET['id']);
            if(isset($_SESSION['carrinho'][$id])){
               unset($_SESSION['carrinho'][$id]);
            }
         }
 
         //ALTERAR QUANTIDADE
         if($_GET['acao'] == 'up'){
            if(is_array($_POST['prod'])){
               foreach($_POST['prod'] as $id => $qtd){
                  $id  = intval($id);
                  $qtd = intval($qtd);
                  if(!empty($qtd) || $qtd <> 0){
                     $_SESSION['carrinho'][$id] = $qtd;
                  }else{
                     unset($_SESSION['carrinho'][$id]);
                  }
               }
            }
         }
 
      }

		mysqli_select_db($blowpet, $database_blowpet);
		$query_rs_produtos = "SELECT * FROM produtos WHERE ativo = 'sim' ";
		$rs_produtos = mysqli_query($blowpet, $query_rs_produtos) or die(mysqli_error());
		$row_rs_produtos = mysqli_fetch_assoc($rs_produtos);
		$totalRows_rs_produtos = mysqli_num_rows($rs_produtos);


$data_completa = strftime("%d de %b de %Y");
$hora = date("h:i:s a");
$pedido = rand(9999, 999999); 
$_SESSION["pedido"] = $pedido; 
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="pt" class="no-js"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Blowpet | Botucatu/SP</title>
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
  <link rel="canonical" href="https://blowpet.com.br" />
  <meta property="og:locale" content="pt_BR">
  <meta property="og:title" content="Blowpet | Botucatu/SP" />
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://blowpet.com.br"/>
  <meta property="og:image" content="https://blowpet.com.br/images/logo-blowpet.png" />
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="800">
  <meta property="og:image:height" content="600">
  <meta property="og:description" content="Blowpet - | Botucatu/SP" />
  <meta property="og:site_name" content="Blowpet - Botucatu/SP"/>
  <meta property="fb:admins" content="Facebook ID - toda conta developer possui um ID"/>
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
      <h1>Orçamento</h1>
        <p>Selecione os produtos e quantidades que entraremos em contato.</p>
    </div>
                <div class="container">
                    <form action="pdf.php" method="post" name="form1" id="form1" >            
                            <div class="grid_10" style="margin-bottom:90px;">                        
                              <p><strong>Sua lista está assim:</strong></p>   
                              <p> <span class="tempo">( Conferir a quantidade )</span></p>
                               <?php
                                 if(count($_SESSION['carrinho']) == 0){
                                    echo '<p style="text-align:center;"><strong> N&atilde;o h&aacute; produtos na lista !</strong></p>';
                                 }else{
                                      $total = 0;
                                    foreach($_SESSION['carrinho'] as $id => $qtd){
                                        $sql   = "SELECT * FROM produtos WHERE id= '$id'";
                                        $qr    = mysqli_query($blowpet,$sql) or die(mysqli_error());
                                        $ln    = mysqli_fetch_assoc($qr);
                                        $nome  = $ln['nome'];
                                        $arquivo  = $ln['arquivo'];
                                        $id  = $ln['id'];
                                        // $preco = number_format($ln['preco'], 2, ',', '.');
                                        // $sub   = number_format($ln['preco'] * $qtd, 2, ',', '.');
                                        // $total += $ln['preco'] * $qtd;  
                                        echo '
                                        <div class="grid_10">  <div class="nophone"><hr></div> 
                                          <div class="grid_3 img-orcamento" >
                                            <img src="adm/arquivos/'.$arquivo.'" />
                                          </div>
                                          <div class="grid_3" >Modelo<br>
                                            <input type="text" style="width:100%;" name="nome" value="'.$nome.'" disabled>
                                          </div>
                                          <div class="grid_1">
                                            Quantidade<br>
                                            <input type="number" id="quantidade" name="quantidade" min="0" max="100000" step="500" value="1000"></br>
                                          </div>
                                          <div class="grid_1">
                                            <div class="excluir">

                                            <a href="#ex1" rel="modal:open">
                                              <img src="images/delete.png" title="Excluir da lista" width="20" height="20" border="0"   />
                                            </a>
                                            </div>
                                          </div>
                                        </div>
                                                   ';
                                            }     
                                         }
                                   ?><hr>   
                            </div>
<div id="ex1" class="modal">
<span>EXCLUIR ÍTEM DA LISTA ?</span>
<a href="?acao=del&id=<?= $id;?>" class="botao4">
SIM
</a>
NÃO
</div>

<!-- Link to open the modal -->

                            </div>
                            <div class="container" style="margin-bottom: 140px;"><br><br>
                          <a href="frascos-pet-blowpet.php" id="bt-carrinho"> < Inserir mais produtos </a>
                            <a href="#dados_pedido" id="bt-carrinho2" onclick="$('html,body').animate({scrollTop: $('#btn-carrinho2').offset().top}, 2000);"  > Finalizar Orçamento > </a>
                          <div class="toggle" style="display: block;">                   
                        <div class="grid_10" id="dados_pedido" style="margin-top: 60px;">
                          <p><strong>Dados do Pedido</strong></p>
                          <p>Código do Orçamento: <strong> <?php echo $pedido ?></strong>
                          <input type="hidden" name="pedido" value="<?php echo $pedido ?>" ><br>Data da solicitação: <strong><?php echo $data_completa; ?> | <?php echo $hora; ?></strong> </p>
                          <input type="hidden" name="data" value="<?php echo $data_completa ?> | <?php echo $hora; ?>" >
                          <div class="grid_10" style="margin-bottom: 30px;"><hr>
                            <div class="grid_5" style="margin-left: 20px;">
                                <label>Empresa *</label><br>
                                <input type="text" style="width:90%;" name="empresa" value="" required> 
                                <label>Nome Responsável *</label><br>
                                <input type="text" style="width:90%;" name="cliente" value="" required>
                                <label>Email *</label><br>
                                <input type="email" style="width:90%;" name="email" value="" required>
                            </div>
                            <div class="grid_3"> 
                                <label> Cidade *</label><br>
                                <input type="text" name="cidade" value="" required>
                            </div>    
                            <div class="grid_3"> 
                                <label> Celular *</label><br>
                        <input type="text" name="telefone" placeholder="Tel/WhatsApp *" onkeypress="MascaraTelefone(form.telefone)" maxlength="15" required><br>
                        <p>*todos os campos são obrigatórios</p>
                            </div>
                              <button type="submit" id="btn-carrinho3">Enviar Solicitação</button> 
                      </div>
                    </form>





                </div>
</div>  

<br><hr><br>
</main>
 
<?php require "footer.php" ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="js/vendor/modernizr-2.6.2.min.js"></script><script defer src="js/main.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script>
  $( "#quantidade" ).blur(function() {
    this.value = parseFloat(this.value).toFixed(2);
});
</script>
<script>
  $(document).ready(function () {
      $('.toggle').hide();
      $('a#bt-carrinho2').on('click', function (e) {
          e.preventDefault();
          var elem = $(this).next('.toggle')
          $('.toggle').not(elem).hide('slow');
          elem.toggle('slow');                     
      });
  });
</script>
<script>
$(document).ready(function () {
$('#bt-carrinho2').click(function() {
  $('#bt-carrinho2').toggleClass('btn-some');
});
});
</script>

<script type="text/javascript">
$(document).ready(function(){
// Target your .container, .wrapper, .post, etc.
$("#video").fitVids();
});
</script></body></html>