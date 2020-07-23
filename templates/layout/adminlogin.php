<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HSS Administration - Connexion</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <?= $this->Html->css('bootstrap') ?>
    <?= $this->Html->css('bootstrap-responsive') ?>
    <?= $this->Html->css('jquery.fancybox') ?>
    <?= $this->Html->css('jcarousel') ?>
    <?= $this->Html->css('flexslider') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('all.min.css') ?>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <?= $this->Html->css('sb-admin-2.min.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->

        <?= $this->fetch('content') ?>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('bootstrap.bundle.min.js') ?>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <?= $this->Html->script('jquery.easing.min.js') ?>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <?= $this->Html->script('sb-admin-2.min.js') ?>

</body>

</html>