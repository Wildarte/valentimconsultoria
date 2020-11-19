<?php
include './../app/configuracao.php';
include './../app/Libraries/Rota.php';
include './../app/Libraries/Controller.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="consultoria, coaching, coach, gestão de recursos humanos" />
    <meta name="author" content="WildArte" />
    <title><?= APP_NOME ?></title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?=URL?>/public/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=URL?>/public/css/mystyle.css">
    
</head>
<body id="page-top">
    
    <?php
        include '../app/Views/topo.php';
        $rotas = new Rota();
        include '../app/Views/rodape.php';
    ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="<?=URL?>/public/js/scripts.js"></script>
    <script src="<?=URL?>/public/js/themejs.js"></script>
    <script>
        $(document).ready(function(){

            $('#btn-palestras').click(function(){

                $(this).siblings('#content-palestras').slideToggle();

            })

        })
    </script>
</body>
</html>