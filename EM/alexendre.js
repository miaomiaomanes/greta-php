var articles = [
  { nom: "Article 1", prix: 10 },
  { nom: "Article 2", prix: 15 },
  { nom: "Article 3", prix: 20 },
  { nom: "Article 4", prix: 25 },
  { nom: "Article 5", prix: 30 },
  { nom: "Article 6", prix: 35 },
];

// Récupère la div qui contiendra les articles
var articlesElt = document.getElementById("articles");

// Parcourt tous les articles du tableau
for (var article of articles) {
  // Crée un élément div pour l'article
  var articleElt = document.createElement("ul");

  articleElt.innerHTML =
    "<li>" +
    article.nom +
    "</li>" +
    " : " +
    "<li>" +
    article.prix +
    "€" +
    "</li>" +
    "<button onclick='ajouterArticle( article.nom, article.prix )'>Ajouter au panier</button>";

  articlesElt.appendChild(articleElt);
}

// var panierElt = document.getElementById("liste-articles");
// var prixTotal = 0;
// function ajouterArticle(nom, prix) {
//   // Crée un élément li pour l'article
//   var articleElt = document.createElement("li");

//   prixTotal = prixTotal + prix;

//   articleElt.innerHTML = nom;

//   document.querySelector(".prixTotal").innerHTML = prixTotal + " " + "€";

//   panierElt.appendChild(articleElt);
// }
