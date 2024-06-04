<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Camline</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-1/assets/css/hero-1.css" />
    </head>
    <body> 
    <?php echo $this->session->flashdata('message')?>   
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('/Index'); ?>">
                <img src="<?php echo base_url('assets/img/camline_logo.png'); ?>" alt="Camline Logo" style="height: 60px;">
            </a>

                <a class="btn btn-primary" href="https://www.camline.com/" target="_blank">More</a>
            </div>
        </nav>