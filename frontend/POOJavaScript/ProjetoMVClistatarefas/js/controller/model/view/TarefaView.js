//classe para organização da interface da aplicação]
//

export class TarefaView {
  constructor() {
    this.tarefaInput = document.getElementById("tarefaInput"); //entrada de dados da nova tarefa
    this.addTarefaBtn = document.getElementById("addTarefaBtn"); //botão para enviar tarefa
    this.listaTarefas = document.getElementById("listaTarefas"); //ul lista de tarefas
    this.mensagem = document.getElementById("mensagem"); //p para mensagem
  }

  //métodos
  //pegar a tarefa do input
  getTarefaInputValue(){
    return this.tarefaInput.ariaValueMax.trim();
  }

  //limpar o valor do input
  clearInput(){
    this.tarefaInput.value = "";
  }

  //mandar uma mensagem para o usuario no paragrafo
  showMensagem(texto){
    this.mensagem.textContent = texto;
  }

  clearMensage(){
    this.mensagem.textContent = "";
  }

  //renderizar a lista de tarefas
  renderTarefa(tarefas, atualizar, remover){
     //limpar a lista existente
     this.listaTarefas.innerHTML = ""; // remover todo html do ul

    //reconstruir a lista
    tarefas.foreach(tarefa =>{
         //lógica do laço de repetição
         const li = document.createElement("li"); // criando item da lista
         if(tarefa.completed){
          li.classList.add("completed"); //adicionando a classe completed ao elemento
         }

         const span = document.createElement("span");
         span.textContent = tarefa.titulo;

         const action = document.createElement("div");
         action.classList.add("action");
// botão para atualizar a tarefa
         const atualizarBTN = document.createElement("Button");
         atualizarBTN.textContent = tarefa.completed ? "Desfazer" : "Concluir"; //operador ternario
         atualizarBTN.addEventListener("click", () => atualizar(tarefa.id)); //função estara no controller
        
         //botão para remover a tarefa
         const removerBTN = documentElement("button");
         removerBTN.textContent = "remover";
         removerBTN.addEventListener("click", ()=>remover(tarefa.id));

         //adicionar os elementos ao html
         action.appendChild(atualizarBTN);
         action.appendChild(removerBTN);

         li.appendChild(span);
         li.appendChild(action);

         this.listarTarefas.appendChild(li);

    });
}
  }

//pega os elementos do HTML 
// le um valor do input
// limpa o imput
// mostra mensagem
// limpa a mensagem
// renderiza a lista de tarefas na UL