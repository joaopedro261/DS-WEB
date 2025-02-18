
//Crie um programa com uma função que receba o nome da pessoa e de uma
//mensagem boas-vindas para o usuário quando clicar no botão. Utilize essa função
//para personalizar a experiência de cada usuário.
function sauldar(){
   var mensagem = document.getElementById("nome").value;


  document.getElementById("mensagem").innerHTML = "Seja bem-vindo"+ mensagem;
}


//Desenvolva um programa que contenha uma função que receba um número
//como parâmetro e ao clicar no botão ele valide se o valor é par ou ímpar

function Valor(){
    var mensagem = document.getElementById("numero").value;

    var numero = Number.parseInt(numero);
    var numero = prompt("Digite um numero");
    var total = numero  / 2;
    var resultado = total % 2 == 0 ? 'Par' : 'Impar';
    document.getElementById("mensagem").innerHTML =  resultado;
    
}


//Exemplo 3

function converterParaMaiusculo() {
  var palavra = document.getElementById("palavra").value;
  var palavraMaiuscula = palavra.toUpperCase();
  document.getElementById("modificaçao").innerHTML = "Convertendo: " + palavraMaiuscula;
}


//Exemplo 4

function numero1() {
  var valor = document.getElementById("numero2").value;
  var porcentagem = document.getElementById("porcentagem").value;
  var resultado = document.getElementById("resultado1");
  resultado.innerHTML = "valor em porcentagem: " +(valor*(porcentagem/100));
}


//Exemplo 5

const cores = ["#ffbc02", "#00ff15"];
let controle = true;

trocaCor.addEventListener('click', () => {
  cor.style.backgroundColor = cores[1];  // segundo valor do array
  controle = !controle;   // nega o valor - se verdadeiro vira falso e vice e versa
 
  if(controle) cor.style.backgroundColor = cores[0];  // se true, primeira cor
  else cor.style.backgroundColor = cores[1];
})


//Exemplo 6

function idade(){
  var valor = Number(document.getElementById("numero3").value);
  if (valor < 18) {
    greeting = "Menor de idade";
  }else {
    greeting = "Maior de idade";
  }
  document.getElementById("resultado2").innerHTML = greeting;
}

//Exemplo 7

function verificarNumero() {
  var numero = document.getElementById("numero4").value;
  if (numero < 0) {
      document.getElementById("resultado5").innerText = "O numero é negativo";
  } else {
      document.getElementById("resultado5").innerText = "O numero é positivo";
  }
}

//exemplo8

function validarLogin() {
  var nome = document.getElementById("nome8").value;
  var pass = document.getElementById("pass").value;
  if (nome === "admin" && pass === "12345") {
      document.getElementById("resultado8").innerText = "Login bem-sucedido!";
  } else {
      document.getElementById("resultado8").innerText = "erro login ou senha errado";
  }
}

//exemplo9
function calculadora() {
  var operação8 = parseFloat(document.getElementById("operacao8").value);
  var operação9 = parseFloat(document.getElementById("operacao9").value);
  var operação = document.getElementById("operacao").value;
  var resultado4;
  console.log(operação8, operação9)
  switch (operação) {
    case "+":
      resultado4 = operação8 + operação9;
      break;
    case "-":
      resultado4 = operação8 - operação9;
      break;
    case "*":
      resultado4 = operação9 * operação9;
      break;
    case "/":
      if (operação !== 0) {
        resultado4 = operação8 / operação9;
      } else {
        resultado4 = "Erro: divisão por zero.";
      }
      break;
    default:
      resultado4 = "Operação inválida.";
  }

  document.getElementById("resultado4").innerText = "Resultado: " + resultado4;
}



  


//exemplo10

function Valor1(){
  var mensagem = Number(window.document.getElementById("valorizando").value);
  console.log(mensagem);
  var numero = Number.parseInt(mensagem);
  var resultado = mensagem % 2 == 0 ? 'Par' : 'Impar';
  document.getElementById("mensagem3").innerHTML =  resultado;
}

//exemplo 11

function maiorNumero() {
  var numero01 = document.getElementById("numero01").value;
  var numero02 = document.getElementById("numero02").value;
  var numero03 = document.getElementById("numero03").value;
  var resultado01 = document.getElementById("resultado01").value;
  
  if (numero01 < numero02){
    resultado01 = "o segundo numero é o maior"
  }
  
else {
  resultado01="o primeiro numero é o maior"

}
if (numero01 < numero03){
  resultado01 = "o terceiro numero é o maior"
}

else {
resultado01="o primeiro numero é o maior"

}
if (numero02 < numero03){
  resultado01 = "o terceiro numero é o maior"
}

else {
resultado01="o segundo numero é o maior"

}

document.getElementById("resultado01").innerText = "Resultado: " + resultado01;

} 


//exemplo 12

function verificarTriangulo(){
  var lado1 = Number(window.document.getElementById("lado1").value);
 
  var lado2= Number(window.document.getElementById("lado2").value);

  var lado3= Number(window.document.getElementById("lado3").value);

  var resultado = document.getElementById("resultado50");



  if (lado1 + lado2 > lado3 && lado1 + lado3 > lado2 && lado2 + lado3 > lado1) {
      if (lado1 === lado2 && lado2 === lado3) {
          resultado = "É um triângulo equilátero (todos os lados iguais).";
      } else if (lado1 === lado2 || lado1 === lado3 || lado2 === lado3) {
          resultado = "É um triângulo isósceles (dois lados iguais).";
      } else {
          resultado = "É um triângulo escaleno (todos os lados diferentes).";
      }
  } else {
      resultado.textContent = "Os lados fornecidos não formam um triângulo válido.";
      resultado.style.color = "red";
  }
  document.getElementById("resultado50").innerHTML = resultado;
}
