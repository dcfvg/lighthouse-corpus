
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

  <?php foreach($site->index()->filterby('intendedtemplate','dream')->visible() as $item): ?>

    <div class="row">

      <div class="col-xs-6">
        <p class="codeTitle" ><?= $item->title() ?></p>
      </div>

      <div class="col-xs-6">
        <svg class="barcode"
            jsbarcode-value="<?= $item->dreamid()?>"
           jsbarcode-width="1"
           jsbarcode-height="15"
           jsbarcode-displayValue="true"
           jsbarcode-fontSize="6"
        ></svg>
      </div>
    </div>

  <?php endforeach ?>

</div>
