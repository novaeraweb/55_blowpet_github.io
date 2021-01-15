<?php if (array_key_exists('enviado', $_GET) && $_GET['enviado']=='true') { ?>
<div id="autofade" style="z-index: 999;position: relative;">
<div class="alert-box success"><span></span>Seu contato foi enviado com sucesso!<br>Retornaremos o quanto antes!!</div>
</div>
<?php } ?>
<?php if (array_key_exists('orcamento', $_GET) && $_GET['orcamento']=='true') { ?>
<div id="autofade" style="z-index: 999;position: relative;">
<div class="alert-box success"><span></span>Sua solicitação de orçamento foi enviada com sucesso!<br>Retornaremos o mais breve!!</div>
</div>
<?php } ?>
