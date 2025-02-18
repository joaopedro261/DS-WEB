//Exemplo 1





//Exemplo 2

var contador = document.querySelector('.badge');

document.querySelector('input').addEventListener('click', function(){
  var numero = parseInt(contador.textContent) + 1;
  contador.textContent = numero;
});


//Exemplo 3
var contador = document.querySelector('.badge');

document.querySelector('button').addEventListener('click', function(){
  var numero = parseInt(contador.textContent) + 1;
  contador.textContent = numero;
});