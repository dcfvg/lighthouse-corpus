
<div class="content dreamIndex" id="ticket">

  <h5>THE LIGHT HOUSE</h5>
  <h5>index des rêves</h5>
  <svg class="barcode"
     jsbarcode-value="all"
     jsbarcode-width="1"
     jsbarcode-height="15"
     jsbarcode-displayValue="true"
     jsbarcode-fontSize="8"
  ></svg>

  <?php foreach($site
    ->index()
    ->filterby('intendedtemplate','dream')
    ->filter(function($it){
      return $it
        ->dreamid()
        ->isNotEmpty();
    })
    ->visible()
    ->sortBy('dreamid','desc') as $item): ?>

    <div class="row">
      <div class="col-xs-8">
        <h2 class="codeTitle" ><?= $item->title() ?></h2>
      </div>

      <div class="col-xs-4 barcodebox">
        <svg class="barcode"
            jsbarcode-value="<?= $item->dreamid()?>"
           jsbarcode-width="1"
           jsbarcode-height="12"
           jsbarcode-displayValue="true"
           jsbarcode-margin="0"
           jsbarcode-fontSize="6"
        ></svg>
      </div>
    </div>

  <?php endforeach ?>

</div>
