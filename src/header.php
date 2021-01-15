<header>
<div class="grid_10 top">
    <div class="grid_10" style="margin-top:-10px;">
        <img src="images/icon-phone.svg" alt="WhatsApp - Atendimento Blowpet"   ><a href="tel:1438821751" rel="noopener" rel="noreferrer"> (14) 3882-1751</a>
        <img src="images/icon-mail.svg"  alt="Email Blowpet" style="margin-right: 5px;margin-left: 30px;"><a href="mailto:blowpet@blowpet.com.br" rel="noopener" rel="noreferrer">blowpet@blowpet.com.br</a>
        <a href="blowpet-orcamento.php" rel="noopener" rel="noreferrer"><label class="botao4 atendimento"><img src="images/icon-list.svg"  width="6.6%" alt="Orçamento Blowpet" style="margin-right: 5px;"> LISTA DE ORÇAMENTO (  <?php 
                  if(isset($_SESSION['carrinho'])){
                      echo count($_SESSION['carrinho']);
                  }else { echo "0";}
                ?>   )</label></a>
    </div>
</div>
<div class="grid_1 logo">
   <a href="index.php"> <img src="images/logo-blowpet.png" alt="Logo Blowpet - Transformações Plásticas"></a>
</div>
      <div class="grid_8 nav" id="MeuMenu">
          <div id="container" class="container">
              <div class="topo"><i><b></b></i> 
              <ul class="menu">
                <li><a href="index.php"><img src="images/icon-home.svg" alt="Home Blowpet Botucatu" style="margin-right: 5px;">HOME</a></li>
                <li><a href="blowpet-transformacoes-plasticas.php"><img src="images/icon-fabrica-vermelho.svg" alt="Imóveis a venda no interior de SP" style="margin-right: 5px;">EMPRESA</a></li>
                <li><a href=""><img src="images/icon-produtos.svg" alt="Produtos Plásticos Pet" style="margin-right: 5px;">PRODUTOS</a>
                    <ul class="submenu-1"> 
                       <li><a href="frascos-pet-blowpet.php">Frascos</a></li>
                       <li><a href="preformas-pet-blowpet.php">Preformas</a></li>
                       <li><a href="rotulagem-pet-blowpet.php">Rotulagem</a></li>
                    </ul></li>
                </li>
                <li><a href="blowpet-sustentabilidade.php"><img src="images/icon-meio-ambiente.svg" alt="Icone Meio ambiente" style="margin-right: 5px;">SUSTENTABILIDADE</a></li>
                <li><a href=""><img src="images/icon-pin.svg" alt="Contato - Blowpet" style="margin-right: 5px;">CONTATO</a>
                    <ul class="submenu-1"> 
                       <li><a href="blowpet-fale-conosco.php">Fale Conosco</a></li>
                       <li><a href="blowpet-trabalhe-conosco.php">Trabalhe Conosco</a></li>
                    </ul></li>
              </ul>
              </div>
          </div>
      </div>
</header>