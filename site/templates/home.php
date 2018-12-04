<?php snippet('header') ?>

  <?= css('assets/css/screen.css') ?>

  <div class="container">


    <nav class="navigation column" role="navigation">
      <ul class="menu">
        <?php foreach($pages->visible() as $item): ?>
        <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
          <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </nav>
    <p class="intro"><?= $page->intro() ?></p>

  </div>


<?php snippet('footer') ?>
