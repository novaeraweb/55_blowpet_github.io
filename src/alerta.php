<?php if (array_key_exists('enviado', $_GET) && $_GET['enviado']=='true') { ?>
<div id="autofade" style="z-index: 999;position: relative;">
<div class="alert-box success"><span></span>Seu contato foi enviado com sucesso!<br>Retornaremos o quanto antes!!</div>
</div>
<?php } ?>
<?php if (array_key_exists('inserido', $_GET) && $_GET['inserido']=='true') { ?>
<div class="sucesso" id="autofade">
<p> Anúncio inserido com sucesso! </p>
</div>
<?php } ?>
<?php if (array_key_exists('alterado', $_GET) && $_GET['alterado']=='true') { ?>
<div class="cadastro" id="autofade">
<p> Anúncio alterado com sucesso! </p>
</div>
<?php } ?>
<?php if (array_key_exists('erro', $_GET) && $_GET['erro']=='true') { ?>
<div class="erro" id="autofade">
<p> Login/Senha não conferem! </p>
</div>
<?php } ?>
<?php if (array_key_exists('cadastro', $_GET) && $_GET['cadastro']=='true') { ?>
<div class="cadastro" id="autofade">
<p><strong>Cadastro inserido com sucesso!!</strong></p>
</div>
<?php } ?>
<?php if (array_key_exists('erro1', $_GET) && $_GET['erro1']=='true') { ?>
<div class="erro" id="autofade">
<p> As senhas não conferem! </p>
</div>
<?php } ?>
<?php if (array_key_exists('orcamento', $_GET) && $_GET['orcamento']=='true') { ?>
<div id="autofade" style="z-index: 999;position: relative;">
<div class="alert-box success"><span></span>Sua solicitação de orçamento foi enviada com sucesso!<br>Retornaremos o mais breve!!</div>
</div>
<?php } ?>
<?php if (array_key_exists('confirma', $_GET) && $_GET['confirma']=='true') { ?>
<div style="position: relative;">
<div class="danger" id="autofade" > <p> Para que o formulário seja enviado, por favor valide o reCAPTCHA</p>
</div>
<?php } ?>