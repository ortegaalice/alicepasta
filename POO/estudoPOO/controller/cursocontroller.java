Package Controller;

import java.util.ArrayList;
import java.util.List;

import Model.aluno;
import Model.professor;

public class cursocontroller {
    // classe que vai realizar a interação entre os modelos
    // e a interface view
    //atributos
    private String nomeCurso;
    private professor professor; //instanciar um obj da classe professor
    private List<aluno> alunosList;
    
    //métodos
    //ctor
    //na criação do curso, deve-se passar o nome do curso
    // e o professor do curso
    public cursocontroller(String nomeCurso, professor professor){
        this.nomeCurso = nomeCurso;
        this.professor = professor;
        this.alunosList = new ArrayList<>();//vetor de objetos Alunos
    }

    //crud
    //adicionar um aluno (Create)
    public void adicionarAluno (Aluno aluno){
        alunosList.add(aluno);
    }

    //exibirCurso(read)
    public void infoCurso(){
        System.out.println("Nome Curso: "+nomeCurso);
        System.out.println("Professor: "+professor.getNome());
        System.out.println("============================");
        //imprimir a lista de alunos
        for (Aluno aluno : alunosList) {
            System.out.println(aluno.getNome());
        }
        System.out.println("============================");
    }

    //update

    //delete

}
