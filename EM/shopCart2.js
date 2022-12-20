var bananaPrice = 0;
var applePrice = 0;
var orangePrice = 0;
var peerPrice = 0;
var totalPrice = 0;
var bananaQuantity = 0;
function addBanana(getProduit, getPrice) {
  bananaQuantity++;
  var produit = document.querySelector(getProduit);
  var price = document.querySelector(getPrice);

  var produitName = produit.innerHTML;
  var produitPrice = price.innerHTML;
  if (bananaQuantity > 1) {
    cl.innerHTML = bananaQuantity;
  } else {
    al = document.createElement("li");
    al.innerHTML = produitName;
    document.querySelector(".panierbox").appendChild(al);
    bl = document.createElement("li");
    bl.innerHTML = produitPrice;
    document.querySelector(".panierbox").appendChild(bl);
    cl = document.createElement("li");
    cl.innerHTML = bananaQuantity;
    document.querySelector(".panierbox").appendChild(cl);
  }
  var total = document.querySelector("#totalPrice");
  bananaPrice = produitPrice * bananaQuantity;
  totalPrice = bananaPrice + applePrice + peerPrice + orangePrice;
  total.innerHTML = totalPrice;
}

var appleQuantity = 0;
function addApple(getProduit, getPrice) {
  appleQuantity++;
  var produit = document.querySelector(getProduit);
  var price = document.querySelector(getPrice);

  var produitName = produit.innerHTML;
  var produitPrice = price.innerHTML;
  if (appleQuantity <= 1) {
    dl = document.createElement("li");
    dl.innerHTML = produitName;
    document.querySelector(".panierbox").appendChild(dl);
    fl = document.createElement("li");
    fl.innerHTML = produitPrice;
    document.querySelector(".panierbox").appendChild(fl);
    gl = document.createElement("li");
    gl.innerHTML = appleQuantity;
    document.querySelector(".panierbox").appendChild(gl);
  } else {
    gl.innerHTML = appleQuantity;
  }
  var total = document.querySelector("#totalPrice");
  applePrice = produitPrice * appleQuantity;
  totalPrice = bananaPrice + applePrice + peerPrice + orangePrice;

  total.innerHTML = totalPrice;
}

var peerQuantity = 0;
function addPeer(getProduit, getPrice) {
  peerQuantity++;
  var produit = document.querySelector(getProduit);
  var price = document.querySelector(getPrice);

  var produitName = produit.innerHTML;
  var produitPrice = price.innerHTML;
  if (peerQuantity <= 1) {
    hl = document.createElement("li");
    hl.innerHTML = produitName;
    document.querySelector(".panierbox").appendChild(hl);
    jl = document.createElement("li");
    jl.innerHTML = produitPrice;
    document.querySelector(".panierbox").appendChild(jl);
    kl = document.createElement("li");
    kl.innerHTML = peerQuantity;
    document.querySelector(".panierbox").appendChild(kl);
  } else {
    kl.innerHTML = peerQuantity;
  }

  var total = document.querySelector("#totalPrice");
  peerPrice = produitPrice * peerQuantity;
  totalPrice = bananaPrice + applePrice + peerPrice + orangePrice;

  total.innerHTML = totalPrice;
}

var orangeQuantity = 0;
function addOrange(getProduit, getPrice) {
  orangeQuantity++;
  var produit = document.querySelector(getProduit);
  var price = document.querySelector(getPrice);

  var produitName = produit.innerHTML;
  var produitPrice = price.innerHTML;
  if (orangeQuantity <= 1) {
    ll = document.createElement("li");
    ll.innerHTML = produitName;
    document.querySelector(".panierbox").appendChild(ll);
    ql = document.createElement("li");
    ql.innerHTML = produitPrice;
    document.querySelector(".panierbox").appendChild(ql);
    wl = document.createElement("li");
    wl.innerHTML = orangeQuantity;
    document.querySelector(".panierbox").appendChild(wl);
  } else {
    wl.innerHTML = orangeQuantity;
  }
  var total = document.querySelector("#totalPrice");
  orangePrice = produitPrice * orangeQuantity;
  totalPrice = bananaPrice + applePrice + peerPrice + orangePrice;

  total.innerHTML = totalPrice;
}
