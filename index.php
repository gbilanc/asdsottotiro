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


</html>
