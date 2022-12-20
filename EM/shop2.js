const initialQuantity = 0;

var fruits = [
  { name: "banana", price: 5, quantity: initialQuantity },
  { name: "apple", price: 10, quantity: initialQuantity },
  { name: "peer", price: 15, quantity: initialQuantity },
  { name: "orange", price: 20, quantity: initialQuantity },
];

var fruitsbox = document.querySelector("#fruitsbox");

// Parcourt tous les articles du tableau
for (var i=0; i<fruits.length; i++) {
  // Crée un élément div pour l'article
  var fruitbox = document.createElement("ul");

  fruitbox.innerHTML =
    "<li>" +
    fruits[i].name +
    "</li>" +
    "<li>" +
    fruits[i].price  +
    "€" +
    "</li>" +
    "<button onclick='addFruit(" +
    JSON.stringify(i) +
    ")'>Ajouter au panier</button>";

  fruitsbox.appendChild(fruitbox);
}

var panierList = document.querySelector(".panierbox");
var priceTotal = 0;

function addFruit(i) {
 

  fruits[i].quantity++;

  if (fruits[i].quantity <= 1) {
    panierList.innerHTML +=
      "<li>" +
      fruits[i].name +
      "</li>" +
      "<li>" +
      fruits[i].price +
      "€" +
      "</li>" +
      "<li>" +
      fruits[i].quantity +
      "</li>";
  }

  var fruitPrice = fruits[i].price * fruits[i].quantity;
  priceTotal = priceTotal + fruitPrice;
  document.querySelector("#totalPrice").innerHTML = priceTotal;
}
