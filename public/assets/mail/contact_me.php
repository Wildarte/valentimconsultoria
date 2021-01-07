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
   $to = 'claudio@valentimconsultoria.com.br'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
   $email_subject = "Contato Valentimconsultoria:  $name";
   $email_body = "Você recebeu uma mensagem do formulário do site valentimconsultoria.\n\n"."Aqui estão os detalhes:\n\nNome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";

   // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
   $headers = "From: consultoria@valentimconsultoria.com.br"."\r\n".
               "Replay-To: ".$email_address."\e\n".
               "X=Mailer:PHP/".phpversion();

   if(mail($to,$email_subject,$email_body,$headers)){
      $nome = strtoupper($_POST['name']);
      echo "<script>alert('Obrigado pelo contato, ".$nome.", em breve retornaremos')</script>";
      echo "<script>window.location.replace('https://valentimconsultoria.com.br');</script>";
   }else{
      echo "<script>alert('Algo deu errado ao enviar seu email, tente diretamente pelo seu provedor de email para claudio@valentimconsultoria.com.br ou use outros meios de contato')</script>";
      echo "<script>window.location.replace('https://valentimconsultoria.com.br');</script>";
      
   }
   return true;
   
}else{
   echo "<script>alert('Dados incorretos')</script>";
   header("Location: https://valentimconsultoria.com.br");
}
?>

<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://wildarte.us7.list-manage.com/subscribe/post?u=487355f191bcd9260410cef47&amp;id=11069a0904" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
      <h2>Subscribe</h2>
      <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
      <div class="mc-field-group">
         <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
      </label>
         <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
      </div>
      <div class="mc-field-group input-group">
         <strong>VsGameBR </strong>
         <ul><li><input type="checkbox" value="1" name="group[78508][1]" id="mce-group[78508]-78508-0"><label for="mce-group[78508]-78508-0">campGrupo1</label></li>
      </ul>
      </div>
      <div id="mce-responses" class="clear">
         <div class="response" id="mce-error-response" style="display:none"></div>
         <div class="response" id="mce-success-response" style="display:none"></div>
      </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_487355f191bcd9260410cef47_11069a0904" tabindex="-1" value=""></div>
      <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone'; /**
 * Translated default messages for the $ validation plugin.
 * Locale: PT_PT
 */
$.extend($.validator.messages, {
	required: "Campo de preenchimento obrigat&oacute;rio.",
	remote: "Por favor, corrija este campo.",
	email: "Por favor, introduza um endere&ccedil;o eletr&oacute;nico v&aacute;lido.",
	url: "Por favor, introduza um URL v&aacute;lido.",
	date: "Por favor, introduza uma data v&aacute;lida.",
	dateISO: "Por favor, introduza uma data v&aacute;lida (ISO).",
	number: "Por favor, introduza um n&uacute;mero v&aacute;lido.",
	digits: "Por favor, introduza apenas d&iacute;gitos.",
	creditcard: "Por favor, introduza um n&uacute;mero de cart&atilde;o de cr&eacute;dito v&aacute;lido.",
	equalTo: "Por favor, introduza de novo o mesmo valor.",
	accept: "Por favor, introduza um ficheiro com uma extens&atilde;o v&aacute;lida.",
	maxlength: $.validator.format("Por favor, n&atilde;o introduza mais do que {0} caracteres."),
	minlength: $.validator.format("Por favor, introduza pelo menos {0} caracteres."),
	rangelength: $.validator.format("Por favor, introduza entre {0} e {1} caracteres."),
	range: $.validator.format("Por favor, introduza um valor entre {0} e {1}."),
	max: $.validator.format("Por favor, introduza um valor menor ou igual a {0}."),
	min: $.validator.format("Por favor, introduza um valor maior ou igual a {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

<script>

   $(document).ready(function(){

      

   });

</script>