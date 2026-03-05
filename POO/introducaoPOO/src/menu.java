import java.util.Scanner;

public class menu {

    //atributos
    double num1, num2, resultado;
    String operacao;
    boolean continuar;

    // métodos

    /**
     * 
     */
    public void calculadora() {
        // para usar a calculadora - biblioteca de Scanner
        Scanner sc = new Scanner(System.in); // permite entrada de dados
        // usar um laço de repetição
        // do - while
        do {
            System.out.println("===Calculador Simples===");
            System.out.println("===Escolha a Operação");
            System.out.println("1. Soma");
            System.out.println("2. Subtração");
            System.out.println("3. Multiplicação");
            System.out.println("4. Divisão");
            System.out.println("5. Sair");
            System.out.println("=========================");
            // le o que o usuário digitou
            operacao = sc.next();
            // Escolhi a Operação -> Decisão
            menu cl = new menu();
            switch (operacao) {
                case "1":
                    digiteNumeros();
                    resultado = cl.soma(num1, num2);
                    System.out.println("O Resultado é " + resultado);
                    break;

                default:
                    break;
            }
            menu cl2 = new menu();
            switch (operacao) {
                case "2":
                    digiteNumeros();
                    resultado = cl2.subtracao(num1, num2);
                    System.out.println("O Resultado é " + resultado);
                    break;

                default:
                    break;
            
            menu cl3 = new menu();
            switch (operacao) 
            }

        } while (continuar);
    }

    private double subtracao(double num12, double num22) {
        // TODO Auto-generated method stub
        throw new UnsupportedOperationException("Unimplemented method 'subtracao'");
    }

    public void digiteNumeros() {
        Scanner sc = new Scanner(System.in);
        System.out.println("Informe o Nº 1");
        num1 = sc.nextDouble();// le o valor e converte em double
        System.out.println("Informe o Nº 2");
        num2 = sc.nextDouble();
    }
}
             
                    digiteNumeros();
                    resultado = cl3.multiplicacao(num1, num2);
                    System.out.println("O Resultado é " + resultado);
                    break;

                default:
                    break;
            }

            menu cl4 = new menu();
            switch (operacao) {
                case "4":
                    digiteNumeros();
                    resultado = cl4.div(num1, num2);
                    System.out.println("O Resultado é " + resultado);
                    break;

                default:
                    break;
        
public void digiteNumeros() {
        Scanner sc = new Scanner(System.in);
        System.out.println("Informe o Nº 1");
        num1 = sc.nextDouble();// le o valor e converte em double
        System.out.println("Informe o Nº 2");
        num2 = sc.nextDouble();
        System.out.println("Informe o Nº 3");
        num3 = sc.nextDouble();
        