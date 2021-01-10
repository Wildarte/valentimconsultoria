<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_POSTFIELDS => [
        'secret' => '6Lf0AicaAAAAALtX73jkL07BlNRvgxBnJXrs7BVA', //chave do lado do servidor
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ]
]);

$response = json_decode(curl_exec($curl));
curl_close($curl);

if($response->success):
   
   //filter_input_array recebe os dados do formulário e os coloca em um array
   $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

   if(isset($form)):

      if(in_array("", $form)):

         echo '<script>alert("Marque/preencha todos os campos");
               window.history.back();
               </script>';

      else:

         // Passando os dados obtidos pelo formulário para as variáveis abaixo
         $nomeremetente = $form['name'];
         $emailremetente = trim($form['email']);
         $emaildestinatario = 'wildarte10@gmail.com';// Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
         $telefone = $form['phone'];
         $assunto = 'Mensagem para Valentim Consultoria';
         $mensagem = $form['message'];
         
         /* Montando a mensagem a ser enviada no corpo do e-mail. */
         $mensagemHTML = '
         <strong>Formulário de Contato do site Valentim Consultoria</strong> 
         <p><b>Nome:</b> '.$nomeremetente.' <p>
         <b>E-Mail:</b> '.$emailremetente.' <p>
         <b>Telefone:</b> '.$telefone.' <p>
         <b>Mensagem:</b><br> '.$mensagem.'</p>
         <hr>';
         
         // O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
         // O return-path deve ser ser o mesmo e-mail do remetente.
         $headers = "MIME-Version: 1.1\r\n";
         $headers .= "Content-type: text/html; charset=utf-8\r\n";
         $headers .= "Reply-To: $emailremetent\r\n";
         $headers .= "From: $emailremetente\r\n";
         // remetente
         $headers .= "Return-Path: $emaildestinatario \r\n";
         // return-path
         $envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);
         if($envio):
            $uppername = strtoupper($nomeremetente);
            echo '<script>alert("Agradecemos contato '.$uppername.', em breve responderemos")</script>';
            echo '<script>window.location.replace("https://valentimconsultoria.com.br")</script>';
         else:
            echo '<script>Algo saiu errado, tente novamento ou use outro canal para entrar em contato';
            echo '<script>window.history.back()</script>';
         endif;
      
      endif;
   else:

      echo '<script>alert("Marque/preencha todos os campos");
               window.history.back();
               </script>';

   endif;

else:
    echo '<script>alert("Marque/preencha todos os campos");
         window.history.back();
    </script>';
endif;    
  
?>