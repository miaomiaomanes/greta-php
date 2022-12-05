var bananaQuantity =0;
function addBanana(getProduit,getPrice){
    
    bananaQuantity+=1;
    var produit= document.querySelector(getProduit);
    var price = document.querySelector(getPrice);

    var produitName = produit.innerHTML;
    console.log (produitName);
    var produitPrice = price.innerHTML;
    if(bananaQuantity<=1){
        el = document.createElement('li');
        el.innerHTML = produitName;
        document.querySelector('.panierbox').appendChild(el);
        al = document.createElement('li');
        al.innerHTML = produitPrice;
        document.querySelector('.panierbox').appendChild(al);
        bl = document.createElement('li');
        bl.innerHTML = bananaQuantity;
        document.querySelector('.panierbox').appendChild(bl);

    }else{
        bl.innerHTML = bananaQuantity;
    }
    var total= document.querySelector('#totalPrice')
    var  totalPrice =produitPrice*bananaQuantity;

    total.innerHTML = totalPrice;

}

var appleQuantity =0;
function addApple(getProduit,getPrice){
    
    appleQuantity+=1;
    var produit= document.querySelector(getProduit);
    var price = document.querySelector(getPrice);

    var produitName = produit.innerHTML;
    var produitPrice = price.innerHTML;
    if(appleQuantity<=1){
        el = document.createElement('li');
        el.innerHTML = produitName;
        document.querySelector('.panierbox').appendChild(el);
        al = document.createElement('li');
        al.innerHTML = produitPrice;
        document.querySelector('.panierbox').appendChild(al);
        bl = document.createElement('li');
        bl.innerHTML = appleQuantity;
        document.querySelector('.panierbox').appendChild(bl);

    }else{
        bl.innerHTML = appleQuantity;
    }
    var total= document.querySelector('#totalPrice')
    var  totalPrice =produitPrice*appleQuantity;

    total.innerHTML = totalPrice;

}

var peerQuantity =0;
function addPeer(getProduit,getPrice){
    
    peerQuantity+=1;
    var produit= document.querySelector(getProduit);
    var price = document.querySelector(getPrice);

    var produitName = produit.innerHTML;
    var produitPrice = price.innerHTML;
    if(peerQuantity<=1){
        el = document.createElement('li');
        el.innerHTML = produitName;
        document.querySelector('.panierbox').appendChild(el);
        al = document.createElement('li');
        al.innerHTML = produitPrice;
        document.querySelector('.panierbox').appendChild(al);
        bl = document.createElement('li');
        bl.innerHTML = peerQuantity;
        document.querySelector('.panierbox').appendChild(bl);

    }else{
        bl.innerHTML = peerQuantity;
    }
    var total= document.querySelector('#totalPrice')
    var  totalPrice =produitPrice*peerQuantity;

    total.innerHTML = totalPrice;

}