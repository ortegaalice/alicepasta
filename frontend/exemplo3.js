//Estrutura de Dados

//Condicionais (If else // switch Case)

//IF - ELSE

var precoProduto = 150;
// se preço do produto >= 100 - desconto 10%
if (precoProduto >= 100) {
  console.log("Valor a Pagar: " + precoProduto * 0.9);
} else {
  console.log("Valor a Pagar: " + precoProduto);
}

// condicional Intermediária (else if)
// preco > 200 15% desc// preço >100 10% desc //

if (precoProduto >= 200) {
  console.log("Valor do produto: " + precoProduto * 0.85);
} else if (precoProduto >= 100) {
  console.log("Valor do produto: " + precoProduto * 0.9);
} else {
  console.log("Valor do produto: " + precoProduto);
}

//Switch Case
var mes = 4;
switch (mes) {
  case 1:
    console.log("Janeiro");
    break;
  case 2:
    console.log("Fevereiro");
    break;
  case 3:
    console.log("Março");
    break;
  case 4:
    console.log("Abril");
    break;
  default:
    console.log("outro Mês");
    break;
}

//Estrutura de Repetição (For While)

//For ()
for (let i = 0; i <= 100; i++) {
  console.log(i);
}

//while (Incontáveis)
var continuar = true;
var numEscolhido = 3;
var contador = 0;
while (continuar) contador++;
let numeroSorteado = Math.round(Math.random() * 10);
if (numeroSorteado == numEscolhido) {
  continuar = false;
  console.log("Acertou Miseravi");
  console.log("Tentativas = " + contador);
}

//funções (function)
//ações específicas - podem ser chamadas a qualquer momento dentro do código

function ola(nome) {
  return "Olá " + nome + "!";
}
function hello(nome) {
  //fucntion void
  console.log("Hello, " + nome);
}

//chamando as function
console.log(ola("Alice"));

hello("Alice");