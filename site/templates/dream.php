<?php snippet('header') ?>

  <?= css('assets/css/pantoufle.css') ?>
  <?= css('assets/css/print.css') ?>

  <!-- start page -->
  <section class="page">
    <?php snippet('ticket') ?>
  </section>

  <!-- end page -->
  <script type="text/javascript">
    var pageUri = "<?= $page->dreamid(); ?>";
  </script>

  <?= js('assets/js/all.min.js') ?>
  <?= js('assets/js/pantoufle.js') ?>

<?php snippet('footer') ?>
