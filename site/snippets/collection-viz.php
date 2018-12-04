<?= css('assets/css/screen.css') ?>
<?= js('assets/js/all.min.js') ?>
<?= js('assets/js/lh.js') ?>

<p><?=$page->title()?></p>

<?php foreach($page->children()->sortBy("date")->groupBy('date') as $k => $item): ?>
  <?= html($k) ?>…
<?php endforeach ?>

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
<div class="metadatas">

<?php foreach($fields as $field): ?>
  <div class="metadata <?= $field?>">


  <?php foreach($page->children()->sortBy($field) as $subpage): ?>
    <a href="<?= $subpage->url() ?>"> <?php

    $txt = str_replace("féminin", "f",$subpage->content()->get($field));
    $txt = str_replace("feminin", "f",$txt);
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
    <a class="portrait" href="<?= $item->url() ?>"><?= html($item->title()) ?><br><?= html($item->portraitredac()) ?></a>
  <?php endforeach ?>
</div>
