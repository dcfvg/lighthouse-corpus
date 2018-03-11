<?php snippet('header') ?>
  <?= css('assets/css/print.css') ?>

  <!-- start page -->
  <section class="page dreams container">
    <?php
      // print_r(params());
      $params = params();
      if(isset($params['dreamid'])) {

        $p = $site->index()->filterby('dreamid', $params['dreamid'])->first();
          snippet('ticket', array('page' => $p, 'id' => $params['dreamid']));

        // css('assets/css/pantoufle.css');
      } else {
        snippet('dreamIndex');
      }
    ?>
  </section>


  <!-- end page -->
  <script type="text/javascript">
  var pageUri = "<?= $page->dreamid(); ?>";
  </script>
  <?= js('assets/js/all.min.js') ?>
  <?= js('assets/js/pantoufle.js') ?>

<?php snippet('footer') ?>
