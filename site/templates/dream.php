<?php snippet('header') ?>

    <?= css('assets/css/pantoufle.css') ?>
    <?= css('assets/css/print.css') ?>
  <!-- start page -->
  <section class="page">
    <div class="content">
      <div class="meta">
      <?php if($user = $site->user()): ?>

        <p><?= $page->date('d/m/Y')?>, <?= $page->heure()?></p>
        <p><strong>rapporteurs</strong><br><?= $page->rapporteurs()?></p>
        <p><strong>retranscripteur</strong><br><?= $page->retranscripteur()?></p>
        <p><strong>theme</strong><br><?= $page->theme()?></p>
        <p><strong>le rêveur</strong></p>
        <p><?= $page->portraitreveur()?></p>

        <p><?= $page->nom()?>, <?= $page->sexe()?>, <?= $page->age()?> ans, <?= $page->profession()?>/</p>

        <p>né(e) à <?= $page->lieudenaissance()?>
            avec pour langue maternelle le
            <?= $page->languematernelle()?> et pour religion d'enfance <?= $page->religionenfance()?> (aujourd'hui <?= $page->religionpresente()?></p>
        <p>

        <p> vit à <?= $page->lieudevie()?></p>
            </p>

        </div>
        <hr>
        <h4>situation</h4>
            <p><?= $page->situation()->kirbytext()?></p>
        <h4>entretien édité</h4>
            <p><?= $page->recit()->kirbytext()?></p>
        <h4>entretien brut</h4>
            <p><?= $page->retranscription()->kirbytext() ?></p>
        <?php endif ?>


    </div>
  </section>
  <!-- end page -->

  <?= js('assets/js/pantoufle.js') ?>
</body>
</html>

<?php snippet('footer') ?>
