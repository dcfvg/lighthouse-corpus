<?= css('assets/css/print.css') ?>

<!-- start page -->
<section class="<?php

    $mystring =  $_SERVER['HTTP_USER_AGENT'];
    $findme   = 'PhantomJS';
    $pos = strpos($mystring, $findme);

    if ($pos === false) echo "printA4"
  ?> page dreams container">
  <p class="marker">.</p>
  <?php

    // print_r(params());
    $params = params();
    if(isset($params['dreamid'])) {

      $p = $page->children()->slice($params['dreamid'], 1)->first();

      snippet('ticket', array('page' => $p, 'id' => $params['dreamid']));

      css('assets/css/pantoufle.css');
    } else {
      snippet('dreamindex');
    }
  ?>
</section>

<!-- end page -->
<script type="text/javascript">
  var pageUri = "<?= $page->dreamid(); ?>";
</script>
<?= js('assets/js/all.min.js') ?>
<?= js('assets/js/pantoufle.js') ?>
