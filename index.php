<!DOCTYPE html>
<?php
include_once 'mailer.php';

$p = filter_input(INPUT_GET, 'p');
$page = $p ? $p : 'page01';
$menu = filter_input(INPUT_GET, 'm');
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>AsdSottotiro</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" href="assets/css/main.css">
        <!--<link rel="stylesheet" href="assets/css/slideshow.css">-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
              crossorigin="anonymous">
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
    </head>
    <body class="is-preload">
        <div id="page-wrapper">
            <?php include "header.html" ?>
            <?php include $page . ".html" ?>
            <?php include "footer.html" ?>
        </div>
    </body>

    <!-- Cookie Consent by PrivacyPolicies.com https://www.PrivacyPolicies.com -->
    <script type="text/javascript" src="//www.privacypolicies.com/public/cookie-consent/4.1.0/cookie-consent.js" charset="UTF-8"></script>
    <script type="text/javascript" charset="UTF-8">
        document.addEventListener('DOMContentLoaded', function () {
            cookieconsent.run({"notice_banner_type": "simple", "consent_type": "express", "palette": "light", "language": "it", "page_load_consent_levels": ["strictly-necessary"], "notice_banner_reject_button_hide": false, "preferences_center_close_button_hide": false, "page_refresh_confirmation_buttons": false, "website_name": "www.asdsottotiro.it", "website_privacy_policy_url": "https://privacy.clion.agency/privacy.php?id=a1419921311b9940b779eb9492d96f20&dom=862"});
        });
    </script>

    <noscript>Cookie Consent by <a href="https://www.privacypolicies.com/">Privacy Policies website</a></noscript>
    <!-- End Cookie Consent by PrivacyPolicies.com https://www.PrivacyPolicies.com -->
    <!-- Below is the link that users can use to open Preferences Center to change their preferences. Do not modify the ID parameter. Place it where appropriate, style it as needed. -->

    <a href="#" id="open_preferences_center">Update cookies preferences</a>
<!--    <script>
        $(function () {
            $('.carousel').carousel({interval: 200, cycle: true});
        });
    </script>-->

</html>
