<?php snippet('header') ?>
  <table class="table table-striped">
    <tbody>
      <?php foreach($pages->find('dreams')->children()->visible() as $item): ?>

        <tr>
          <td><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></td>
          <td><?= $item->date('d/m/Y')?>, <?= $item->heure()?></td>
          <td><?= $item->theme()?></td>
          <td><?= $item->retranscripteur()?></td>
          <td><?= $item->lieu()?></td>
          <td><?= $item->nom() ?> (<?= $item->age()?> ans)</td>
          <td><?= $item->lieudenaissance() ?></td>
          <td><?= $item->languematernelle() ?></td>
          <td><?= $item->lieudevie() ?></td>
          <td><?= $item->profession() ?></td>
          <td><?= $item->religionenfance() ?> / <?= $item->religionpresente() ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>

<?php snippet('footer') ?>
