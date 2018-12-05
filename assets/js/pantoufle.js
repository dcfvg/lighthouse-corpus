
document.getElementsByTagName('body').item(0).classList.toggle("preview");

// Events
document.onkeypress = function (oPEvt) {
  var oEvent = oPEvt || window.event;
  switch (String.fromCharCode(oEvent.charCode)) {
    case 'w':
      oEvent.preventDefault();
      document.getElementsByTagName('body').item(0).classList.toggle("preview");
      break;
  }
};


var elmnt = document.getElementById('ticket');

elmnt.innerHTML = elmnt.innerHTML.replace(
  /<p>-([A-Z](.)+) :/g,
  '<span class="person">$1</span>&nbsp;:&nbsp;'
);
// elmnt.innerHTML = elmnt.innerHTML.replace(
//   /([\u0600-\u06FF\u0750-\u077F\u0000-\u007F](.)) :/g,
//   '<span class="person">$1</span>&nbsp;:&nbsp;'
// );

JsBarcode(".barcode").init();
