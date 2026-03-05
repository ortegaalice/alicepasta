//Matrizes

//Declaração de Matriz
let matriz = [
    [9,8,7]
    [6,5,4]
    [3,2,1]
];

let matrizMista = [
    ["João", 25, "19-999999"],
    ["Maria", 22, "11-77777"],
    ["Joana", 18, "12-9879879"]
]

// Busca de Item na Matriz

console.log(matrizMista[1][0]); //Maria

console.log(matrizMista[2][2]); //12-9879879

// Iterando sobre a matriz (for aninhado)

for(leti=0; i<matriz.length; i++){
    for(let j=0; j<matriz[i].length; j++){
        console.log(matriz[i][j]);
    }
}