<?php
/**
 * Created by PhpStorm.
 * User: furmanchuk
 * Date: 04.07.2016
 * Time: 14:50
 */

$imagePath = '/data/images';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Default App</title>

    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logotip</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Инвестиции <span class="sr-only">(current)</span></a>
                    </li>
                    <li><a href="#">Гарантии</a></li>
                    <li><a href="#">Публикации</a></li>
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
                <div class="navbar-right">
                    <a href="#" class="btn btn-default navbar-btn">Разместить инвестиции</a>
                </div>
            </div>
        </div>
    </nav>
</header>
