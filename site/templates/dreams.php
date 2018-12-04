<?php snippet('header') ?>

<?php
  $params = params();
  if(isset($params['dreamid'])) snippet('collection-index');
  else snippet('collection-viz');
?>
<?php snippet('footer') ?>
