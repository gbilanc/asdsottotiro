<!DOCTYPE html>
<?php
include_once 'mailer.php';

$page = filter_input(INPUT_GET, 'p');
$page = $page ? $page : 'page01';
$menu = filter_input(INPUT_GET, 'm');

?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>AsdSottotiro</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/slideshow.css">
    </head>
    <body class="is-preload">
        <div id="page-wrapper">
            <?php include "header.html" ?>
            <?php include $page . ".html" ?>
            <?php include "footer.html" ?>
        </div>
        <script>
            $(function () {
<?php
echo("$('ul li:eq($menu)').addClass('current');");
?>
            });
        </script>
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
