//Desafio

// Converta o Texto: " João, mariA, NicolaS, SocoRRo, zuLeiCa"
// em um Arrya no Seguinte Formato: [João,Maria,Nicolas,Socorro,Zuleica]

const texto = " João, mariA, NicolaS, SocoRRo, zuLeiCa";

//remover os espaços vazios (trim)
const textotrim = texto.trim();

//slice - separa em array 

const nomesSujos = textotrim.split(", ");
 console.log(nomesSujos);

 //vetor de 5 nomes 
 let nomeLimpo = [];

 for (let index = 0; index < nomesSujos.length; index++) { 
    nomeLimpo [i] = nomeSujos [1].charAt(0).toUpperCase+nomeSujos [1].slice(1).toLowerCase;
}

console.log(nomeLimpo);