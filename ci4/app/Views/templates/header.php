<!doctype html>
<html>
<head>
<?= link_tag('css/styles.css') ?>
<?= link_tag('favicon.ico', 'icon', 'image/ico') ?>
</head>
<body>

    <h1 id="introduction"><?= esc($title) ?></h1>
    <a href=<?= site_url('home') ?>><?= img(array('src'=>'images/id.jpg', 'alt'=>'Home', 'href'=>'/home', 'class'=>'avatar')) ?></a>
