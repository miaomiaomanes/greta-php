function display() {
  var numKey = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    0,
    "+",
    "-",
    "*",
    "/",
    "(",
    ")",
    "c",
    "=",
  ];
  var numButton = document.querySelector(".numButton");

  var values = "";
  for (var value of numKey) {
    if (value == "=") {
      values += `
        <button onclick="result()" value="${value}">
            ${value}
        </button>
    `;
    } else if(value == "c") {
      values += `
        <button onclick="clearing()" value="${value}">
            ${value}
        </button>
    `;
    } else {
      values += `
        <button onclick="calculate('${value}')" value="${value}">
            ${value}
        </button>
    `;
    }
  }
  numButton.innerHTML = values;
}
display();

var screen = document.querySelector(".display");
function calculate(value) {
  screen.innerHTML += value;
}

var res= document.querySelector(".result");
function result() {
    console.log(screen.innerHTML);
 res.innerHTML = eval(screen.innerHTML);
}

function clearing() {
    console.log(screen.innerHTML);
 screen.innerHTML="";
 res.innerHTML='';
}



// numButton.addEventListener('onclick',(event)=>{
//     let display=document.querySelectorAll('.display');
//     display.innerHTML=event.target.value;

// });

// function display(){
//     var x= document.querySelector('button').value;
//     document.querySelector('.display')=x;

// }

// numButton.addEventListener('onclick',(event) => {
//     event.preventDefault();
//     const result = document.querySelector('.result');
//     const display = document.querySelector('.display');
//     display.innerHTML=event.target.value;

//})
