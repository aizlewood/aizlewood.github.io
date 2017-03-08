<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="UTF-8">
    <title>Adaptive layout - Pearson LOMT<?php echo isset($title) ? ' - '.$title: '' ?></title>

    <link rel="stylesheet" href="/assets/css/main.css">

</head>
<body>

    <div class="container <?php echo isset($klass) ? $klass : '' ?>">

        <header class="SiteHeader grid__item xx-large--one-whole">
            <div class="SiteHeader-business">
                Pearson
                <span>LOMT (Prototype)</span>
            </div>
            <div class="SiteHeader-controlPanel">
                <a href="#">Help</a> |
                <div class="Dropdown">
                    <div class="Dropdown-header">You</div>
                    <div class="Dropdown-container">
                        <p>Line of Business: School North America</p>
                        <p>Account type: Super User</p>

                        <a href="#">Logout</a>
                    </div>
                </div>
            </div>
        </header>
