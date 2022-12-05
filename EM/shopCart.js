var banana = document.querySelector("#banana").
  innerHTML;
var bananaPrice = document.querySelector("#bananaPrice").
  innerHTML;
var apple = document.querySelector("#apple").
  innerHTML;
var applePrice = document.querySelector("#applePrice").
  innerHTML;
var peer = document.querySelector("#peer").
  innerHTML;
var peerPrice = document.querySelector("#peerPrice").
  innerHTML;
var orange = document.querySelector("#orange").
  innerHTML;
var orangePrice = document.querySelector("#orangePrice").
  innerHTML;
var bananaQuantity = 0;
var appleQuantity = 0;
var peerQuantity = 0;
var orangeQuantity = 0;
var produit = [
  [banana, bananaPrice, bananaQuantity],
  [apple, applePrice, appleQuantity],
  [peer, peerPrice, peerQuantity],
  [orange, orangePrice, orangeQuantity],
];

var produits = [
  [bananaQuantity],
  [appleQuantity],
  [peerQuantity],
  [orangeQuantity],
];

var fruits=[
    'banana', 'apple' , 'peer','orange'
]

function addProduits(getProduit, getPrice) {
  var produit = document.querySelector(getProduit);
  var price = document.querySelector(getPrice);

  var produitName = produit.innerHTML;
  var produitPrice = price.innerHTML;
  getValue++;

  for (var i = 0; i < produits.length; i++) {
    if (produits[i][0] <= 1 && produitName == fruits[i]) {
      produits[i].push(produitName, produitPrice);
    } else {
      produits[i][0]++;
    }
}
  

  for (var i = 0; i < produit.length; i++) {
    var fruitPrice = produit[i][1] * produit[i][2];
    totalPrice = fruitPrice + totalPrice;
  }

  var total = document.querySelector("#totalPrice");
  total.innerHTML = totalPrice;
}
