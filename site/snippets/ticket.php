<div class="content" id="ticket">

  <div class="cover">
    <h1>THE LIGHT HOUSE</h1>
  <?php if($page): ?>
      <p><?php snippet('barcode', array('page' => $page)); ?></p>
      <h2><?= $page->title()?></h2>
    </div>

    <p class="metadata">
      <strong>date du recueil : </strong><?= $page->date('d/m/Y')?>
      <br/><strong>heure :</strong><?= $page->heure()?>
      <br/><strong>rapporteur du rêve : </strong><?= $page->rapporteurs()?>
      <br/><strong>retranscription par : </strong><?= $page->retranscripteur()?>
      <br/><strong>Lieu du recueil du récit :</strong>
      <?php

          $pos = $page->posEntretien()->yaml();
          if(array_key_exists('address', $pos)) echo $pos['address'];

      ?> <?= $page->lieu(); ?>

      <br/><strong>Nom du/de la rêveur.se :</strong> <?= $page->nom()?>
    </p>

    <h3>portrait du/de la rêveur.se</h3>
    <p><?= $page->portraitredac()->kirbytext()?></p>

    <h3>impression de la rencontre</h3>
    <p><em><?= $page->situation()->kirbytext()?></em></p>


    <h3>entretien</h3>
    <p><?= $page->recit()->kirbytext()?></p>

    <h1><?php snippet('barcode', array('page' => $page)); ?></h1>
  <?php else: ?>
    Rêve n° <?= $id?> introuvable …
  <?php endif ?>
</div>
