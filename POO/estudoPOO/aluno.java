package estudoPOO;

public class aluno extends pessoa {
    //ATRIBUTOS
    // já tem os atributos (nome, cpf, dataNasc) da SuperClasse Pessoa
    private String matricula;
    private double nota;

    // métodos
    //construtor (sem a nota)
    public aluno(String nome, String cpf, String dataNasc, String matricula) {
        super(nome, cpf, dataNasc);
        this.matricula = matricula;
    }
    
    // getters and setters
    public String getMatricula() {
        return matricula;
    }

    public void setMatricula(String matricula) {
        this.matricula = matricula;
    }

    public double getNota() {
        return nota;
    }

    public void setNota(double nota) {
        this.nota = nota;
    }

    //exibir informações do aluno
    public void exibirInfo(){
        super.exibirInfo();
        System.out.printIn("Matricula: "+matricula);
        
    }