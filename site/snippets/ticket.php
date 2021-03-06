<div class="content" id="ticket">

  <div class="cover">
    <h1>THE LIGHT HOUSE</h1>
  <?php if($page): ?>
      <p><?php snippet('barcode', array('page' => $page)); ?></p>
      <h2><?= $page->title()?></h2>
    </div>

    <p class="metadata">
      <!-- <strong>Date du recueil : </strong><?= $page->date('d/m/Y')?> -->
      <strong>Date : </strong><?= $page->date('d/m/Y')?>
      <!-- <br/><strong>Heure :</strong><?= $page->heure()?> -->
      <br/><strong>Time :</strong><?= $page->heure()?>
      <!-- <br/><strong>Rapporteur du rêve : </strong><?= $page->rapporteurs()?> -->
      <br/><strong>Interview by : </strong><?= $page->rapporteurs()?>
      <!-- <br/><strong>Retranscription par : </strong><?= $page->retranscripteur()?> -->
      <br/><strong>Retranscription by : </strong><?= $page->retranscripteur()?>
      <!-- <br/><strong>Lieu du recueil du récit :</strong> -->
      <br/><strong>Location of the interview :</strong><br/>
      <?php

          $pos = $page->posEntretien()->yaml();
          if(array_key_exists('address', $pos)) echo $pos['address'];

      ?> <?= $page->lieu(); ?>

      <!-- <br/><strong>Nom du/de la rêveur.se :</strong> <?= $page->nom()?> -->
      <br/><strong>Dreamer's name :</strong> <?= $page->nom()?>
    </p>

    <!-- <h3>Portrait du/de la rêveur.se</h3> -->
    <h3>Dreamer's portrait</h3>
    <p><?= $page->portraitredac()->kirbytext()?></p>

    <!-- <h3>Impression de la rencontre</h3> -->
    <h3>Feeling of the encounter</h3>
    <p><em><?= $page->situation()->kirbytext()?></em></p>


    <!-- <h3>Entretien</h3> -->
    <h3>Interview</h3>
    <p><?= $page->recit()->kirbytext()?></p>
    <?php if(!$page->noteauteur()->empty()): ?>

    <!-- <h3>Note de l'auteur</h3> -->
    <h3>Writer's note</h3>
    <?php endif ?>
    <p><?= $page->noteauteur()->kirbytext()?></p>

    <h1><?php snippet('barcode', array('page' => $page)); ?></h1>
  <?php else: ?>
    Dream #<?= $id?> can't be found …
    <!-- Rêve n° <?= $id?> introuvable … -->
  <?php endif ?>
</div>
