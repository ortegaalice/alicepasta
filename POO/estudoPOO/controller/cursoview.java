package estudoPOO.controller;

import java.util.Scanner;

import estudoPOO.aluno;
import estudoPOO.professor;

public class cursoview {
    //atributo
    //instanciar obj de professor
    professor jp = new Professor("João Pereira", "123.456", "10/10/1910", 15000.00);
    //instaciar obj de CursoController
    cursocontroller cursoJava = new cursocontroller("Programação Java", jp);


    //métodos view ( Tela interativa CLI)
    int operacao; // escolher a ação
    boolean continuar = true; // continuar com a ação
    Scanner sc = new Scanner(System.in); // entrada de dados

    public void menu(){
        while (continuar) {
            System.out.println("==Gerenciamento de Curso==");
            System.out.println("1. Cadastrar Aluno");
        System.out.println("2. Informação do Curso");
            System.out.println("3. Lançar Nota dos Alunos");
            System.out.println("4. Status da Turma");
            System.out.println("5. Sair");
            System.out.println("==Escolha Opção Desejada==");
            operacao = sc.nextInt();
            switch (operacao) {
                case 1:aluno aluno = cadastraraluno();
                    cursoJava.adicionaraluno(aluno);
                    break;
                case 2:
                    cursoJava.infoCurso();//exibir info
                    break;
                case 3:
                    break;
                case 4:
                    break;
                case 5:
                    System.out.println("Saindo...");
                    break;
                default:
                    System.out.println("Informe um Opção Válida");
                    break;
                    

            }
        }
    }
    
    private Aluno cadastrarAluno() {
        System.out.printIn("Digite o Nome do Aluno")
        String nome = sc.next();
        System.out.println("Informe o CPF do Aluno");
        String cpf = sc.next();
        System.out.println("Informe a Data de NAscimento do Aluno");
        String dataNasc = sc.next()
        System.out.printIn9("informe a matricula do aluno");
    }
    }