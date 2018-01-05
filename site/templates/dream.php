<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Pantoufle</title>
    <?= css('assets/css/pantoufle.css') ?>
    <?= css('assets/css/print.css') ?>
</head>
<body>

  <!-- start page -->
  <section class="page">
    <div class="content">

    <table class="table table-striped">
      <tbody>

        <tr><th>date</th><td><?= $page->date('d/m/Y')?></td></tr>
        <tr><th>heure</th><td><?= $page->heure()?></td></tr>
        <tr><th>timecode</th><td><?= $page->timecode()?></td></tr>
        <tr><th>rapporteurs</th><td><?= $page->rapporteurs()?></td></tr>
        <tr><th>retranscripteur</th><td><?= $page->retranscripteur()?></td></tr>
        <tr><th>mode</th><td><?= $page->mode()?></td></tr>
        <tr><th>nature</th><td><?= $page->nature()?></td></tr>
        <tr><th>theme</th><td><?= $page->theme()?></td></tr>
        <tr><th>lieu</th><td><?= $page->lieu()?></td></tr>
        <tr><th>lng</th><td><?= $page->lng()?></td></tr>
        <tr><th>lat</th><td><?= $page->lat()?></td></tr>
        <tr><th>portraitreveur</th><td><?= $page->portraitreveur()?></td></tr>

        <tr><th>nom</th><td><?= $page->nom()?></td></tr>
        <tr><th>age</th><td><?= $page->age()?></td></tr>
        <tr><th>sexe</th><td><?= $page->sexe()?></td></tr>
        <tr><th>lieudenaissance</th><td><?= $page->lieudenaissance()?></td></tr>
        <tr><th>languematernelle</th><td><?= $page->languematernelle()?></td></tr>
        <tr><th>lieudevie</th><td><?= $page->lieudevie()?></td></tr>
        <tr><th>profession</th><td><?= $page->profession()?></td></tr>
        <tr><th>religionenfance</th><td><?= $page->religionenfance()?></td></tr>
        <tr><th>religionpresente</th><td><?= $page->religionpresente()?></td></tr>
      </tbody>
    </table>
      <?php if($user = $site->user()): ?>

            <h4>situation</h4>
            <?= $page->situation()->kirbytext()?>
            <h4>entretien édité</h4>
            <?= $page->recit()->kirbytext()?>
            <h4>entretien brut</h4>
            <?= $page->retranscription()->kirbytext() ?>
        <?php endif ?>


    </div>
  </section>
  <!-- end page -->

  <?= js('assets/js/pantoufle.js') ?>
</body>
</html>

<?php snippet('footer') ?>
