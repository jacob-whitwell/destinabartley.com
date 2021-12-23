<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="favicons/manifest.json">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <script src="https://use.fontawesome.com/9be10b4077.js"></script>
    <title><?php if (isset($page_title)) {
            echo $page_title;
        } else {
            echo "Destina Bartley | Plymouth Wedding Videographer";
        } ?></title>
</head>
<body>
<header>
    <div class="nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h1 id="logo"><a href="index.php">DB</a></h1>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <ul class="menu">
                        <li><a href="index.php"<?php if ($active_page == 'home') {
                                echo "class='active'";
                            } ?>">Home</a></li>
                        <li><a href="packages.php"<?php if ($active_page == 'packages') {
                                echo "class='active'";
                            } ?>">Packages</a></li>
                        <li><a href="about_me.php"<?php if ($active_page == 'about') {
                                echo "class='active'";
                            } ?>>About</a></li>
                        <li><a href="faq.php"<?php if ($active_page == 'faq') {
                                echo "class='active'";
                            } ?>>FAQ</a></li>
                        <li><a href="contact.php"<?php if ($active_page == 'contact') {
                                echo "class='active'";
                            } ?>>Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
