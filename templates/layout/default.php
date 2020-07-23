<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HIGH STAR SECURITY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <?= $this->Html->charset() ?>

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/jcarousel.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <?= $this->Html->css('bootstrap') ?>
    <?= $this->Html->css('bootstrap-responsive') ?>
    <?= $this->Html->css('jquery.fancybox') ?>
    <?= $this->Html->css('jcarousel') ?>
    <?= $this->Html->css('flexslider') ?>
    <?= $this->Html->css('style.css') ?>

    <!-- Theme skin -->
    <link href="skins/default.css" rel="stylesheet" />
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="ico/HSS_ico.jpg" />
    <?= $this->Html->meta('ico/HSS_ico.jpg') ?>




    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


</head>

<body>
    <div id="wrapper">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/portfolio/jquery.quicksand.js"></script>
    <script src="js/portfolio/setting.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.nivo.slider.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <script src="js/animate.js"></script>

    <?= $this->Html->script('jquery') ?>
    <?= $this->Html->script('jquery.easing.1.3') ?>
    <?= $this->Html->script('bootstrap') ?>
    <?= $this->Html->script('/jcarousel/jquery.jcarousel.min.js') ?>
    <?= $this->Html->script('jquery.fancybox.pack') ?>
    <?= $this->Html->script('jquery.fancybox-media.js') ?>
    <?= $this->Html->script('/google-code-prettify/prettify.js') ?>
    <?= $this->Html->script('/portfolio/jquery.quicksand.js') ?>
    <?= $this->Html->script('/portfolio/setting.js') ?>
    <?= $this->Html->script('jquery.flexslider') ?>
    <?= $this->Html->script('jquery.nivo.slider') ?>
    <?= $this->Html->script('modernizr.custom') ?>
    <?= $this->Html->script('jquery.ba-cond.min') ?>
    <?= $this->Html->script('jquery.slitslider') ?>
    <?= $this->Html->script('animate') ?>


    <!-- Template Custom JavaScript File -->
    <script src="js/custom.js"></script>
    <?= $this->Html->script('custom') ?>

</body>

</html>