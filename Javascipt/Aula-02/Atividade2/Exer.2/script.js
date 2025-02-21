

//Exemplo 2

function sauldar(str) {
  return str.replace(/[^a-zA-Z0-9]/g, ' ' )
}

let input = document.getElementById('um')
let input2 = document.getElementById('dois')

input.onkeyup = function(){
 input2.value = sauldar(input.value)
}



//Exemplo 3
var contador = document.querySelector('.badge');

document.querySelector('button').addEventListener('click', function(){
  var numero = parseInt(contador.textContent) + 1;
  contador.textContent = numero;
});



//Exemplo 4 
  document.addEventListener("DOMContentLoaded", DIV);
  
  function DIV(){

  var div = document.createElement("div")
  div.style.width = "1500px";
  div.style.height = "200px";
  div.style.backgroundColor = "pink";
  div.style.color = "green";
  div.style.display = "center";
  div.innerText = "Seja bem-vindo!!!";

  document.body.appendChild(div);
  
  }


//Exemplo 1
var a = window.document.getElementById('area')

a.addEventListener('mouseenter', entrar)
a.addEventListener('mouseout', sair)

function entrar(){
a.innerText = 'entrou!'
a.style.background = 'red'
a.style.width='200px'
}

function sair(){

a.innerText = 'Saiu!'
a.style.background = 'blue'
a.style.width='300px'
}

