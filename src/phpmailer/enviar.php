<?php header('Content-Type: text/html; charset=utf-8'); 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("class.phpmailer.php");
require("class.smtp.php");

//Defino a Chave do meu site
$secret_key = '6LdDoiwaAAAAAEoK81f9eyUeZXrDXYGvF1U4nL2f';

//Pego a validação do Captcha feita pelo usuário
$recaptcha_response = $_POST['g-recaptcha-response'];

// Verifico se foi feita a postagem do Captcha 
if(isset($recaptcha_response)){
        
    // Valido se a ação do usuário foi correta junto ao google
    $answer = 
        json_decode(
            file_get_contents(
                'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.
                '&response='.$_POST['g-recaptcha-response']
            )
        );

    // Se a ação do usuário foi correta executo o restante do meu formulário
    if($answer->success)
  
    {

      // Inicia a classe PHPMailer
      $mail = new PHPMailer();
      

      if (isset($_POST['btn-contato'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $cidade = $_POST['cidade'];
        $mensagem = $_POST['mensagem'];
        $pagina = $_POST['pagina'];
      }
      if (isset($_POST['btn-rotulagem'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $cidade = $_POST['cidade'];
        $quantidade = $_POST['quantidade'];
        $mensagem = $_POST['mensagem'];
        $pagina = "rotulagem-pet-blowpet.php";
      }
      if (isset($_POST['btn-trabalhe'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $cidade = $_POST['cidade'];
        $area = $_POST['area'];
        $mensagem = $_POST['mensagem'];
        if (isset($_FILES['arquivo'])) {
        $arquivo = $_FILES['arquivo'];
        }
        $pagina = 'blowpet-trabalhe-conosco.php';
      }

      if (isset($_POST['btn-projeto-personalizado'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $cidade = $_POST['cidade'];
        $mensagem = $_POST['mensagem'];
        if (isset($_FILES['arquivo'])) {
        $arquivo = $_FILES['arquivo'];
        }
        $pagina = 'blowpet-fale-conosco.php';
      }

      // Define os dados do servidor e tipo de conexão
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->IsSMTP(); // Define que a mensagem será SMTP
      $mail->Host = "mail.systemway.com.br"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
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
      $mail->FromName =  $nome; // Seu nome


      if (isset($_POST['btn-contato'])) {
      // Define os destinatário(s)
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      //$mail->AddAddress($email);
      $mail->AddAddress('pcp@blowpet.com.br', 'BlowPet'); // Copia
      $mail->AddBCC('contato@novaeraweb.com.br', 'BlowPet'); // Cópia Oculta
      }

      if (isset($_POST['btn-trabalhe'])) {
      // Define os destinatário(s)
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      //$mail->AddAddress($email);
      $mail->AddAddress('rh@blowpet.com.br', 'BlowPet'); // Copia
      $mail->AddBCC('contato@novaeraweb.com.br', 'BlowPet'); // Cópia Oculta
      }

      // Define os dados técnicos da Mensagem
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
      $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
      

      if (isset($_POST['btn-contato'])) {
      // Define a mensagem (Texto e Assunto)
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->Subject  = "Contato do site | BlowPet"; // Assunto da mensagem 
      $mail->Body = '
      Contato enviado através do site:<br><br>
      Nome: '.$nome.'<br>
      Email: '.$email.'<br>
      Telefone: '.$telefone.'<br>
      Cidade: '.$cidade.'<br><br>
      Mensagem: '.$mensagem.'
      ';

      $mail->AltBody = '
      Contato enviado através do site por<br><br>
      Nome: '.$nome.'<br>
      Email: '.$email.'<br>
      ';
      }

      if (isset($_POST['btn-rotulagem'])) {
      // Define a mensagem (Texto e Assunto)
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->Subject  = "Orçamento Rotulagem | Site BlowPet"; // Assunto da mensagem 
      $mail->Body = '
      Orçamento enviado através do site:<br><br>
      Nome: '.$nome.'<br>
      Email: '.$email.'<br>
      Telefone: '.$telefone.'<br>
      Cidade: '.$cidade.'<br><br>
      Quantidade de frascos: '.$quantidade.'<br><br>
      Mensagem: '.$mensagem.'
      ';

      $mail->AltBody = '
      Orçamento enviado através do site:<br><br>
      Nome: '.$nome.'<br>
      Email: '.$email.'<br>
      Telefone: '.$telefone.'<br>
      Cidade: '.$cidade.'<br><br>
      Quantidade de frascos: '.$quantidade.'<br><br>
      Mensagem: '.$mensagem.'
      ';
      }



      if (isset($_POST['btn-trabalhe'])) {
      // Define a mensagem (Texto e Assunto)
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->Subject  = "Trabalhe Conosco | Site BlowPet"; // Assunto da mensagem 
      $mail->Body = '
      Contato enviado através do site:<br><br>
      Nome: '.$nome.'<br>
      Email: '.$email.'<br>
      Telefone: '.$telefone.'<br>
      Cidade: '.$cidade.'<br><br>
      Área de Interesse : '.$area.'<br><br>
      Mensagem: '.$mensagem.'<br>';


      $mail->AltBody = '
      Contato enviado através do site:<br><br>
      Nome: '.$nome.'<br>
      Email: '.$email.'<br>
      Telefone: '.$telefone.'<br>
      Cidade: '.$cidade.'<br><br>
      Área de Interesse : '.$area.'<br><br>
      Mensagem: '.$mensagem.'<br>';


      }

      if (isset($_POST['btn-projeto-personalizado'])) {
      // Define a mensagem (Texto e Assunto)
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->Subject  = "Orçamento Projeto Personalizado | BlowPet"; // Assunto da mensagem 
      $mail->Body = '
      Contato enviado através do site:<br><br>
      Nome: '.$nome.'<br>
      Email: '.$email.'<br>
      Telefone: '.$telefone.'<br>
      Cidade: '.$cidade.'<br><br>
      Mensagem: '.$mensagem.'<br>';

      $mail->AltBody = '
      Contato enviado através do site por<br><br>
      Nome: '.$nome.'<br>
      Email: '.$email.'<br>
      ';
      }

      if (isset($_FILES['arquivo'])) {
      $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']);
      }

      //==================================================== 
      if ($enviado = $mail->Send()){ 
              header("Location: ../index.php?enviado=true");
              } 
          else{ 
              echo "</b>Falha no envio do E-Mail!</b>"; 
      echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
            }
    }
  // Caso o Captcha não tenha sido validado 
      //retorno uma mensagem de erro. 
      else {
          header("Location: ../$pagina?confirma=true");
      }
  }