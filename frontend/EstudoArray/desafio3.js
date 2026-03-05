
let matrizNotas = [];

for(let i = 0; i < 3; i++){
    
    matrizNotas[i] = [];
    
    for(let j = 0; j < 3; j++){
        matrizNotas[i][j] = parseFloat(prompt(`Digite a nota ${j+1} do aluno ${i+1}:`));
    }
}
 
console.log("=== TABELA DE NOTAS ===");

for(let i = 0; i < 3; i++){
    console.log(`Aluno ${i+1}: ${matrizNotas[i][0]} | ${matrizNotas[i][1]} | ${matrizNotas[i][2]}`);
}

console.log("=== RESULTADO FINAL ===");

for(let i = 0; i < 3; i++){
    
    let soma = 0;
    
    for(let j = 0; j < 3; j++){
        soma += matrizNotas[i][j];
    }
    
    let media = soma / 3;
    
    if(media >= 7){
        console.log(`Aluno ${i+1} - Média: ${media.toFixed(2)} - APROVADO`);
    } else {
        console.log(`Aluno ${i+1} - Média: ${media.toFixed(2)} - REPROVADO`);
    }
}