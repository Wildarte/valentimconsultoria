<?php

if($_POST['submit'] == 'Enviar'){
   // Check for empty fields
   if(empty($_POST['name'])      ||
      empty($_POST['email'])     ||
      empty($_POST['phone'])     ||
      empty($_POST['message'])   ||
      !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
      {
      echo "No arguments Provided!";
      return false;
      }
      
   $name = strip_tags(htmlspecialchars($_POST['name']));
   $email_address = strip_tags(htmlspecialchars($_POST['email']));
   $phone = strip_tags(htmlspecialchars($_POST['phone']));
   $message = strip_tags(htmlspecialchars($_POST['message']));
      
   // Create the email and send the message
   $to = 'wildarte10@gmail.com'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
   $email_subject = "Contato Valentimconsultoria:  $name";
   $email_body = "Você recebeu uma mensagem do formulário do site valentimconsultoria.\n\n"."Aqui estão os detalhes:\n\nNome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";

   // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
   $headers = "From: consultoria@valentimconsultoria.com.br"."\r\n".
               "Replay-To: ".$email_address."\e\n".
               "X=Mailer:PHP/".phpversion();

   if(mail($to,$email_subject,$email_body,$headers)){
      echo "Enviado com sucesso!";
      header("Location: https://valentimconsultoria.com.br");
      echo "<script>alert('Seu email foi enviado com sucesso, aguarde que em breve será respondido')</script>";
   }else{
      echo "Algo deu errado!";
      header("Location: https://valentimconsultoria.com.br");
      echo "<script>alert('Algo deu errado ao enviar seu, tente diretamente pelo provedor ou use outros meios de contato')</script>";
   }
   return true;
   
}else{
   header("Location: https://valentimconsultoria.com.br");
   echo "<script>alert('Dados incorretos')</script>";
}
?>