<?php session_start();
if(!isset($_SESSION['carrinho'])){
 $_SESSION['carrinho'] = array();
}
require_once "adm/conecta.php";
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
include("mpdf60/mpdf.php");


$empresa = $_POST["empresa"];
$cliente = $_POST["cliente"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];
$celular = $_POST["telefone"];
$values='';


foreach ($_SESSION['carrinho'] as $id => $qtd){
	$sql   = "SELECT * FROM produtos WHERE id = '$id'";
	$qr    = mysqli_query($blowpet,$sql) or die(mysqli_error());
	$ln    = mysqli_fetch_assoc($qr);
	$nome  = $ln['nome'];
	$arquivo  = $ln['arquivo'];
	$id  = $ln['prod_id'];
	$pedido  = $_POST['pedido'];
	$data  = $_POST['data'];
	$quantidade  = $_POST['quantidade'];
	$values .='<br>Modelo:'.$ln['nome'].'<br>';
	$values .='<br>Quantidade:'.$quantidade.'<br>';
	$values .='<hr><br>';
}
$html="<img src='images/logo-blowpet.png'>
<h2>Solicitação de orcamento: $pedido</h2>
<h2>Data: $data</h2></center>
Nome: $cliente <br>
E-mail: $email<br>
Cidade: $cidade <br>
Celular: $celular <br>

<h1>Produtos</h1>
$values ";

 $mpdf=new mPDF(); 
 $mpdf->SetDisplayMode('fullpage');
 $css = file_get_contents("css/estilo.css");
 $mpdf->WriteHTML($css,1);
 $mpdf->WriteHTML($html);
 $mpdf->Output("orcamento/orcamento.pdf");


 // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("phpmailer/class.phpmailer.php");
require("phpmailer/class.smtp.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "mail.systemway.com.br"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
$mail->Port       = 587; 
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
$mail->Username = 'site@blowpet.com.br'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = '!bp*0A0B03'; // Senha do servidor SMTP (senha do email usado)
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = $email; // Seu e-mail
$mail->Sender = 'site@blowpet.com.br'; // Seu e-mail
$mail->FromName =  $cliente; // Seu nome
 
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('pcp@blowpet.com.br', 'BlowPet'); // Copia
$mail->AddBCC('contato@novaeraweb.com.br', 'BlowPet'); // Cópia Oculta
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Orçamento $pedido"; // Assunto da mensagem 
$mail->Body = '
<strong>Solicitação de orçamento via site BlowPet</strong><br><br>

Código do orçamento:<strong>'.$pedido.'</strong><br>
Data da solicitação:<strong>'.$data.'</strong><br><br>
Empresa: <strong> '.$empresa.'</strong><br>
Nome: <strong> '.$cliente.'</strong><br>
Email: <strong> '.$email.'</strong><br>
Tel: <strong> '.$celular.'</strong><br>
Cidade: <strong> '.$cidade.'</strong><br>

';
$mail->AltBody = '
Solicitação de orçamento<br>

Código do orçamento:<strong>'.$pedido.'</strong><br>
Data da solicitação:<strong>'.$data.'</strong><br><br>
Empresa: <strong> '.$empresa.'</strong><br>
Nome: <strong> '.$cliente.'</strong><br>
Email: <strong> '.$email.'</strong><br><br>
Cidade: <strong> '.$cidade.'</strong><br>
';// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAttachment("orcamento/orcamento.pdf", "orcamento-$pedido.pdf");  // Insere um anexo

session_unset();
$_SESSION['carrinho'] = array();
$_SESSION['carrinho'] = null;


//==================================================== 
if ($enviado = $mail->Send()){ 
        header("Location: ../index.php?orcamento=true");
        } 
    else{ 
        echo "</b>Falha no envio do E-Mail!</b>"; 
echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
      }