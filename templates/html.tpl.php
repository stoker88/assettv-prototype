<!DOCTYPE HTML>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ATV PROTOTYPE</title>

        <!-- $styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>

    <!-- REPLACE WITH isdrupalfrontpage() -->
    <body <?php if ($_SERVER['REQUEST_URI'] == '/prototype2/') print 'class="front"'; ?>>
       
        <?php print $content; ?>

        <!-- $scripts -->
        <script src="http://twitter.github.com/hogan.js/builds/3.0.1/hogan-3.0.1.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/dropdown.js" type="text/javascript"></script>
        <script src="vendor/components/header-slider.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>


        <script src="vendor/bootstrap/js/collapse.js" type="text/javascript"></script>

        <script src="vendor/bootstrap/js/modal.js" type="text/javascript"></script>
       

        <script src="vendor/bootstrap/js/tab.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/carousel.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/transition.js" type="text/javascript"></script>

        <script src="vendor/libraries/typeahead.jquery.js" type="text/javascript"></script>

        <script src="vendor/components/supersearch.js" type="text/javascript"></script>
         <script src="vendor/components/mobile-tab-dropdown.js" type="text/javascript"></script>
        <script src="vendor/components/popout-menu.js" type="text/javascript"></script>
        <script src="vendor/components/paratrunc.js" type="text/javascript"></script>
        <div class='addbackdrop'></div>
    </body>
</html>
