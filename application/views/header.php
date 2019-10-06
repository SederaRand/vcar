<!DOCTYPE html>
<html>
<head>
	<title>Pouah Estla </title> <!-- titre -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:image" content=""><!-- icon -->

    <!-- Modify description -->
    <meta name="description" content="Bonjour, je suis  ......! Je suis à votre disposition pour tous vos projets immobiliers (achat et vente)" />
    <!-- Modify description -->

	<!-- bootstrarp begin -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <!-- bootstrarp end -->

    <!-- animation begin -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css') ?>">
    <!-- animation end -->

    <!-- font awesome begin -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.5/css/fork-awesome.min.css" integrity="sha256-P64qV9gULPHiZTdrS1nM59toStkgjM0dsf5mK/UwBV4=" crossorigin="anonymous">
    <!-- font awesome end -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css') ?>">



    <!-- change border and perso begin -->
    <style type="text/css">
        <?php $template= "iad";
              $bg = "yes";
        ?>
        <?php
            if ($template=='iad' or $template=='iparticuliers') include 'assets/css/iad.css';
            else include 'assets/css/optihome.css';
            if ($bg=='yes')
                echo '
                /*Style background*/
                body {
                background-image:url(assets/pouah-estla/pouah-estlabg.jpg);;
                background-repeat:repeat-y no-repeat;
                background-size:cover;
                background-position:center;
                background-attachment:fixed;
                }';

            else
                echo '
                /*Style background*/
                body {
                background-image:url(assets/background/bg.png);
                background-repeat:repeat-y no-repeat;
                background-size:cover;
                background-position:center;
                background-attachment:fixed;
                }';
         ?>

    </style>
    <!-- change border and perso end -->
</head>

