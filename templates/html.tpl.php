<!DOCTYPE HTML>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ATV PROTOTYPE</title>

    <!-- $styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
    <link href="style.css" rel="stylesheet" type="text/css" />

    <!-- $scripts -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/dropdown.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/tab.js" type="text/javascript"></script>
    <script src="vendor/libraries/typeahead.jquery.js" type="text/javascript"></script>
    <script src="vendor/components/supersearch.js" type="text/javascript"></script>

  </head>
    
    <body <?php if($_SERVER['REQUEST_URI']) print 'class="front"'; ?>>

    <?php print $content; ?>

  </body>
</html>
