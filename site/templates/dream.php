<?php snippet('header') ?>

    <?= css('assets/css/pantoufle.css') ?>
    <?= css('assets/css/print.css') ?>
  <!-- start page -->
  <section class="page">
    <div class="content">
      <?php if($user = $site->user()): ?>



        <h4>le rêveur</h4>
        <p><?= $page->portraitreveur()?></p>

        <p><?= $page->nom()?>, <?= $page->sexe()?>, <?= $page->age()?> ans, <?= $page->profession()?>/</p>

        <p>né(e) à <?= $page->lieudenaissance()?>
            avec pour langue maternelle le
            <?= $page->languematernelle()?> et pour religion d'enfance <?= $page->religionenfance()?> (aujourd'hui <?= $page->religionpresente()?></p>
        </p>

        <p> vit à <?= $page->lieudevie()?></p>

        <h4>collecteurs</h4>
        <p><?= $page->rapporteurs()?> (rapporteur)
        <br><?= $page->retranscripteur()?> (retranscripteur)</p>

        <h4>situation</h4>

            <p><?= $page->date('d/m/Y')?>, <?= $page->heure()?>
            <br><?=$page->posEntretien()->yaml()['address']?></p>

            <p><em><?= $page->situation()->kirbytext()?></em></p>
        <h4>entretien</h4>
            <p><?= $page->recit()->kirbytext()?></p>

        <?php endif ?>


    </div>
  </section>
  <!-- end page -->

  <?= js('assets/js/pantoufle.js') ?>
</body>
</html>

<?php snippet('footer') ?>
