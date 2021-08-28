<!doctype html>
<html lang="en">
<style>
    .nav1 {
        font-family: 'Segoe UI';
        font-size: 12px;
        font-style: normal;
        font-variant: normal;
        font-weight: 700;
        line-height: 26.4px;
        color: #FFFFFF;
    }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>

    <!-- MY CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/header.css">


    <nav class="navbar navbar-expand-lg navbar-light bg-light nav1" style="left:200px; right: 200px; width:calc(100% - 400px); border-radius: 0px 0px 10px 10px; height: 40px;">
        <div class="container">
            <div class="text-left" class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#"><img src="assets/img/logohelp1.png" width="80" height="30"></a>
                </div>
            </div>
            <div class="text-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?= site_url('dashboardC') ?>" style="padding-right:50px">HOME</a>
                    <a class="nav-item nav-link" href="<?= site_url('aboutC') ?>" style="padding-right:50px; padding-left:50px;">ABOUT US</a>
                    <?php if ($login) { ?>
                        <a class="nav-item nav-link" href="<?= site_url('landingC') ?>">OUR SERVICES</a>
                    <?php } else { ?>
                        <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#cek_login">OUR SERVICES</a>
                    <?php } ?>
                </div>
            </div>
            <div class="text-right" class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <?php if ($login) { ?>
                        <a class="nav-item nav-link" href="<?= site_url('loginC/logout') ?>">LOG OUT</a>
                    <?php } else { ?>
                        <a class="nav-item nav-link" href="<?= site_url('loginC') ?>">LOG IN</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>
</head>

<body>