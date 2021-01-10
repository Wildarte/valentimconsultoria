<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_POSTFIELDS => [
        'secret' => '6Lf0AicaAAAAALtX73jkL07BlNRvgxBnJXrs7BVA',
        'response' => $_POST['g-recaptcha-response']
    ]
]);

$response = curl_exec($curl);
curl_close($curl);

if($response['success']):
    echo "Pode tratar o formulário: ".$_POST['nome'];
else:
    echo '<script>alert("Não pode tratar o formuláro");
        //window.history.back();
    </script>';
    var_dump($response);
endif;
?>