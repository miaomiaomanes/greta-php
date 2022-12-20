/**
 *
 *
 *
 *
 * var produits=[['sel.jpg','sel',2],['sucre.jpg','sucre',3]];
 *
 * faire une boucle sur produits[] et generer le HTML
 *
 * faire une fonction ajouterPanier()
 *
 * alimenter le cadre de panier avec les produit ajouter
 *
 */

var menu = [
  ["Produit", "href='produits.html'"],
  ["Inscription", 'onclick=\'modal("open",".inscription")\''],
  ["Authentification", 'onclick=\'modal("open",".authentification")\''],
];

for (var i = 0; i < menu.length; i++) {
  document.querySelector(".menu ul").innerHTML +=
    "<li><a " + menu[i][1] + ">" + menu[i][0] + "</a></li>";
}

var produits = [
  ["https://picsum.photos/300/300", "sel", 10],
  ["https://picsum.photos/300/301", "sucre", 20],
  ["https://picsum.photos/300/302", "cafe", 30],
  ["https://picsum.photos/300/303", "tai", 15],
  ["https://picsum.photos/300/304", "pain", 5],
  ["https://picsum.photos/300/305", "bla", 9],
];

for (var i = 0; i < produits.length; i++) {
  document.querySelector(".listeProduits").innerHTML +=
    '<div class="produit" ><img src="' +
    produits[i][0] +
    '" ><h2>' +
    produits[i][1] +
    "</h2><p>" +
    produits[i][2] +
    '€</p><button onclick="ajouterPanier(' +
    i +
    ')">Ajouter au panier</button></div>';
}

var prixTotal = 0;

function ajouterPanier(i) {
  prixTotal = prixTotal + produits[i][2];
  document.querySelector(".prixTotal").innerHTML = prixTotal;
  document.querySelector(".listePanier").innerHTML +=
    "<div >" + produits[i][1] + " : " + produits[i][2] + "€</div>";
}

function modal(param, selector) {
  document.querySelector(selector).style.display =
    param == "open" ? "block" : "none";
}

function payer(param) {
  if (param == "confirmer") {
    modal("close", ".payer");
    document.querySelector(".listePanier").innerHTML = "";
    document.querySelector(".prixTotal").innerHTML = "";
  } else {
    modal("open", ".payer");
    var listePanier = document.querySelector(".listePanier").innerHTML;
    var prixTotal = document.querySelector(".prixTotal").innerHTML;
    document.querySelector(".modalContent").innerHTML =
      listePanier + "<div>Prix Total : " + prixTotal + " €</div>";
  }
}

function ville() {
  let villes = ["Paris", "Lyon", "Marseille", "Bordeaux", "Toulouse"];

  if (document.querySelector(".ville").length > 0) return;

  villes.forEach((ville) => {
    let optionVille = document.createElement("option");
    optionVille.innerHTML = ville;
    document.querySelector(".ville").appendChild(optionVille);
  });
}

// var villes = ['Paris', 'Lyon', 'Montreuil', 'Bordeaux', 'Toulouse'];

// var selectVille = document.getElementById('ville');
// for (var ville of villes) {
//     var option = '<option value="' + ville + '"';
//     if (ville === 'Montreuil') {
//         option += ' selected';
//     }
//     option += '>' + ville + '</option>';
//     selectVille.innerHTML += option;
// }
var selectElement = document.querySelector(".menuBgColor");
function menuChangeBgColor() {
  let colors = ["red", "blue", "yellow"];
  
  if (document.querySelector(".menuBgColor").length > 0) return;
  colors.forEach((color) => {
    var option = '<option value="' + color + '"';
    
    option += ">" + color + "</option>";
    selectElement.innerHTML += option;


      
  });

};

selectElement.addEventListener('change',(event)=>{
    let modal=document.querySelectorAll('.modalContent');
    modal.style.backgroundColor=event.target.value;

});


function  changeColor(){
    let changeColor=document.querySelector('.modalContent');
    changeColor.style.backgroundColor = "red";

}
