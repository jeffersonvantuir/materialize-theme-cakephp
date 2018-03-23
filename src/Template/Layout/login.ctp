<?php
/**
 * Created by Jefferson Vantuir
 * https://jeffersonbehling.github.io/
 * jefferson.behling@gmail.com
 */

$description = 'Login';
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $description ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?= $this->Html->css('Materialize.materialize.min.css') ?>
    <?= $this->Html->css('Materialize.materialize.css') ?>
    <?= $this->Html->css('Materialize.custom.css') ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<!--Import jQuery before materialize.js-->
<?= $this->Html->script('Materialize.jquery-3.2.1.min.js') ?>
<?= $this->Html->script('Materialize.materialize.min.js') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

<body class="cyan preloader">

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <footer>
    </footer>
</body>
</html>