
<div class="content dreamIndex" id="ticket">
  <h5>THE LIGHT HOUSE</h5>
  <h5>index des rêves</h5>
  <svg class="barcode"
     jsbarcode-value="all"
     jsbarcode-width="2"
     jsbarcode-height="30"
     jsbarcode-displayValue="true"
     jsbarcode-fontSize="8"
  ></svg>

  <?php foreach($site->index()->filterby('intendedtemplate','dream')->visible() as $item): ?>
    <p>
    <svg class="barcode"
        jsbarcode-value="<?= $item->dreamid()?>"
       jsbarcode-width="2"
       jsbarcode-height="30"
       jsbarcode-displayValue="true"
       jsbarcode-fontSize="8"
    ></svg><br><?= $item->title() ?></p>

  <?php endforeach ?>

</div>
