<?php snippet('header') ?>

    <?= css('assets/css/pantoufle.css') ?>
    <?= css('assets/css/print.css') ?>
  <!-- start page -->
  <section class="page">
    <div class="content">
      <?php if($user = $site->user()): ?>


            <h5>THE LIGHT HOUSE<br>lancelot hamelin</h5>

            <h5>entretien n°<?= $page->dreamid()?></h5>
            <h5><?= $page->title()?></h5>
            <h4></h4>

            <p>
            <strong>date du recueil : </strong><?= $page->date('d/m/Y')?>
            <br/><strong>heure :</strong><?= $page->heure()?>
            <br/><strong>rapporteur du rêve : </strong><?= $page->rapporteurs()?>
            <br/><strong>retranscription par : </strong><?= $page->retranscripteur()?>
            <br/><strong>Lieu du receuil du récit :</strong> <?php

                $pos = $page->posEntretien()->yaml();
                if(array_key_exists('address', $pos)) echo $pos['address'];

            ?> <?= $page->lieu(); ?>
            <br/><strong>Nom du/de la rêveu.se :</strong> <?= $page->nom()?></p>

        <h4>portrait du/de la rêveu.se</h4>
            <p><?= $page->portraitreveur()?></p>

            <p>
                <?= $page->nom()?>,
                <?php

                    $sexe = str_replace('féminin', 'femme', $page->sexe());
                    $sexe = str_replace('masculin', 'homme', $sexe);
                    echo $sexe;

                ?>
                de <?= $page->age()?> ans,
                <?= $page->profession()?> vit à <?= $page->lieudevie()?>.
            </p>

                        <p>Né(e) à
                <?= $page->lieudenaissance()?>
                avec pour langue maternelle le
                <?= $page->languematernelle()?> et dans enfance de religion <?= $page->religionenfance()?> aujourd'hui <?= $page->religionpresente()?>.</p>
            </p>


        <h4>impression de la rencontre</h4>
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
