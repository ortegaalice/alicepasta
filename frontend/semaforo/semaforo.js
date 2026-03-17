
// Espera o HTML carregar antes de executar o código
document.addEventListener("DOMContentLoaded", () => {

    // Pegando os elementos do semáforo
    const vermelho = document.getElementById("vermelho");
    const amarelo = document.getElementById("amarelo");
    const verde = document.getElementById("verde");
    const botao = document.getElementById("botaoPedestre");

    // Estado atual do semáforo
    let estado = 0;

    // Função que controla a troca das luzes
    function trocarLuz() {

        // Apaga todas as luzes primeiro
        vermelho.classList.remove("ativo");
        amarelo.classList.remove("ativo");
        verde.classList.remove("ativo");

        // Liga a luz correspondente ao estado
        if (estado === 0) {
            vermelho.classList.add("ativo");
        }

        else if (estado === 1) {
            verde.classList.add("ativo");
        }

        else {
            amarelo.classList.add("ativo");
        }

        // Avança para o próximo estado
        estado++;

        // Reinicia o ciclo
        if (estado > 2) {
            estado = 0;
        }
    }

    // Troca automática das luzes a cada 3 segundos
    setInterval(trocarLuz, 3000);

    // Interação: botão de pedestre força o vermelho
    botao.addEventListener("click", () => {

        vermelho.classList.add("ativo");
        amarelo.classList.remove("ativo");
        verde.classList.remove("ativo");

        estado = 1; // volta depois para o verde no ciclo
    });

});

