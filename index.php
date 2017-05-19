<?php

include './array.php';

include './functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Дела в Порядке!</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body><!--class="overlay"-->

<h1 class="visually-hidden">Дела в порядке</h1>

<div class="page-wrapper">
    <div class="container container--with-sidebar">

        <?php require './templates/header.php'; ?>

        <div class="content">

            <?php require './templates/leftBar.php'; ?>

            <?php includePathEndArray('./templates/main.php', $task_list); ?>

        </div>
    </div>
</div>

<?php require './templates/footer.php'; ?>

<?php require './templates/beneathFooter.php'; ?>

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>