<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">


</head>
<body class="<?php echo $page->template() ?>   <?php if($page->rtlenable()->bool()) echo "rtl" ?>">

  <div class="hidden-print banner" role="banner">
    <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
    <?= $page->rtlenable()?>
  </div>
