const initialQuantity = 0;

var fruits = [
  {
    image: "./img/clothes.jpg",
    name: "banana",
    price: 5,
    quantity: initialQuantity,
  },
  {
    image: "./img/clothes.jpg",
    name: "apple",
    price: 10,
    quantity: initialQuantity,
  },
  {
    image: "./img/clothes.jpg",
    name: "peer",
    price: 15,
    quantity: initialQuantity,
  },
  {
    image: "./img/clothes.jpg",
    name: "orange",
    price: 20,
    quantity: initialQuantity,
  },
];

var fruitsbox = document.querySelector("#fruitsbox");

// Parcourt tous les articles du tableau
for (var i = 0; i < fruits.length; i++) {
  // Crée un élément div pour l'article
  var fruitbox = document.createElement("ul");

  fruitbox.innerHTML =
  "<li>" +
  "<img src='" + fruits[i].image + "' >"+
  "</li>" +
    "<li>" +
    fruits[i].name +
    "</li>" +
    "<li>" +
    fruits[i].price +
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
  const idName = "number-" + fruits[i].name;

  if (fruits[i].quantity <= 1) {
    panierList.innerHTML +=
      "<li>" +
      fruits[i].name +
      "</li>" +
      "<li>" +
      fruits[i].price +
      "€" +
      "</li>" +
      `<li id='${idName}'>` +
      fruits[i].quantity +
      "</li>";
  } else {
    document.querySelector(`#${idName}`).innerHTML = fruits[i].quantity;
  }

  priceTotal += fruits[i].price;
  document.querySelector("#totalPrice").innerHTML = priceTotal;
}


function modal(param) {
  /* methode 1 */
  document.querySelector('.modal').style.display = (param == 'open') ? 'block' : 'none';
}

// function login(){
//   var loginContainer = document.querySelector('.loginContainer');

//   loginContainer.style.display= "block";
  
// }