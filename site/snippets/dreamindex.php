
<div class="content dreamIndex" id="ticket">
  <h1>THE LIGHT HOUSE</h1>
  <h5>index des rêves</h5>
  <svg class="barcode"
     jsbarcode-value="all"
     jsbarcode-width="1"
     jsbarcode-height="15"
     jsbarcode-displayValue="true"
     jsbarcode-fontSize="8"
  ></svg>

  <?php foreach($page
    ->children()
    ->visible()
    ->filterby('intendedtemplate','dream')
    ->filter(function($it){
      return $it
        ->dreamid()
        ->isNotEmpty();
    })
    ->visible()
    ->sortBy('dreamid','asc') as $item): ?>

    <div class="row">
      <p class="col-xs-6" ><?= $item->date('d/m/Y')?><?php e(!$item->heure()->isEmpty(), ',') ?> <?= $item->heure()?></p>

      <div class="col-xs-6 barcodebox">
        <svg class="barcode"
            jsbarcode-value="<?= $item->dreamid()?>"
           jsbarcode-width="1"
           jsbarcode-height="12"
           jsbarcode-displayValue="true"
           jsbarcode-margin="0"
           jsbarcode-fontSize="9"
        ></svg>
      </div>

      <h2 class="codeTitle col-xs-12" ><?= $item->title() ?></h2>
      <p class="col-xs-12 name" > <?= $item->nom()?><?php e(!$item->lieu()->isEmpty(), ',') ?> <?= $item->lieu()?></p>

    </div>

  <?php endforeach ?>

</div>
