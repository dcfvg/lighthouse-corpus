<?= css('assets/css/screen.css') ?>
<?= js('assets/js/all.min.js') ?>
<?= js('assets/js/lh.js') ?>

<p>
  <?=$page->title()?>…
  <?php foreach($page->children()->sortBy("date")->groupBy('date') as $k => $item): ?>
    <?= html($k) ?>…
  <?php endforeach ?>
</p>

<?php

function initials($str) {
    $ret = '';
    foreach (explode(' ', $str) as $word)
        $ret .= strtoupper($word[0]);
    return $ret;
}

  $fields = [
    "sexe",
    "nom",
    "age",
    "languematernelle",
    "profession",
    "religionenfance",
    "religionpresente"
  ];
?>
<div class="cols">
    <div class="metadatas">

  <?php foreach($fields as $field): ?>
    <div class="metadata <?= $field?>">


    <?php foreach($page->children()->sortBy($field) as $subpage): ?>
      <a href="<?= $subpage->url() ?>"> <?php

      $txt = str_replace("féminin", "f",$subpage->content()->get($field));
      $txt = str_replace("feminin", "f",$txt);
      $txt = str_replace("female", "f",$txt);
      $txt = str_replace("male", "m",$txt);
      $txt = str_replace("masculin", "m",$txt);
      $txt = str_replace("homme", "m",$txt);
      $txt = str_replace("mascu", "m",$txt);

      echo html(substr($txt, 0, 25));


      ?></a> .
    <?php endforeach ?>


    </div>
  <?php endforeach ?>
  </div>

  <div class="portraits">
    <?php foreach($page->children() as $k => $item): ?>
      <div class="hidden portrait">
        <a href="<?= $item->url() ?>"><?= html($item->title()) ?></a>
        <p><?= html($item->portraitredac()) ?></p>
      </div>
    <?php endforeach ?>
  </div>
</div>
