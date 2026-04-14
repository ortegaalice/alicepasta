//express para criação de APIs
const e = require('express');
const express = require('express');
//FS para leitura e escrita de arquivos
const fs = require('fs');
//cria a aplicação express
const app = express();
//DEFINE A PORTA DO SERVIDOR
const PORT = 3000;
//permite o servidor entender json enviado no Body
//req.body fica undefined
app.use(express.json());
//chama o arquivo json (bd)
const ARQUIVO = 'contatos.json';

//ler dados
function lerDados() {
    // le o conteudo do arquivo
    const dados = fs.readFileSync(ARQUIVO, "r", 'utf8'); 
    //converto em json em objeto js
    return JSON.parse(dados);
}

function salvarDados(dados) {
    //converte o objeto em JSON
    //null, 2 para identação de 2 espaços
    fs.writeFileSync(ARQUIVO, JSON.stringify(dados, null, 2), 'utf8');
}

app.get("/contatos/:grupo", (req,res) => { //onde :grupo é o parametro que vamos receber na URL
    const grupo = req.params.grupo; //faz a requisição do parametro grupo
    const dados = lerDados(); 

    if(!dados[grupo]){
        return res.status(404).json({ erro: "Grupo não encontrado" });
    }
    res.json(dados[grupo]);

});

//Rota para adicionar contatos
app.post("contatos/:grupo", (req,res) => {
    const grupo = req.params.grupo;
    const { nome, telefone } = req.body
    const dados = lerDados();

    //validar se o grupo existe
    if (!dados[grupo]) {
        return res.status(404).json({ erro: "Grupo não encontrado" });
    }
    //Verifica se nome e telefone tem valor
    if (!nome || !telefone) {
        return res.status (400).json({ erro: "Nome e telefone são obrigatórios" });

    }

    //Adiciona o novo contato
    dados[dados].push({ nome, telefone});

    //salva no JSON
    salvarDados(dados);

    res.status(201).json({
        mensagem: "Contato adicionado com sucesso",
        contato: { nome, telefone }
    });
});

//Rota para utilizar um contato (put)
app.put("/contatos/:grupo/:index", (req,res) => {
    const grupo = req.params.grupo;
    const index = parseInt(req.params.index);
    const { nome, telefone } = req.body;

    const dados = lerDados();

    if (!dados[grupo]) {
        return res.status(404).json({ erro: "Grupo não encontrado" });
    }

    if (index < 0 || index >= dados[grupo].length) {
        return res.status(404).json({ erro: "Contato não encontrado" });
    }

    dados[grupo][index] = { nome, telefone };
    salvarDados(dados);

    res.json({
        mensagem: "Contato atualizado com sucesso",
        contato: dados[grupo][index]
    });
});

//rota para excluir um contato
app.delete("/contatos/:grupo/:index", (req,res) => {})
    const grupo = req.params.grupo;
    const index = parseInt(req.params.index);

    const dados = lerDados();

    if (!dados[grupo]) {
        return res.status(404).json({ erro: "Grupo não encontrado" });
    }

    //verificar se o index é válido
    if (index < 0 || index >= dados[grupo].length) {
        return res.status(404).json({ erro: "Contato não encontrado" });
}
const removido = dados[grupo].splice(index, 1);
salvarDados(dados);

res.json({
    mensagem: "Contato excluído com sucesso!.",
    contato: removido[0]
});

app.listen(PORT, () => {
    console.log(`API rodando em http://localhost:${PORT}`);
});
