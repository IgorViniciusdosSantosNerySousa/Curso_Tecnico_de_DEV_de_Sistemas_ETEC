package Lista4;

import java.util.Scanner;

public class K6 {

	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);

        int matrixVotos = 0;
        int SdAVotos = 0;

        while (true) {
            System.out.println("Qual é a melhor saga de filme?");
            System.out.println("1 - Matrix");
            System.out.println("2 - Senhor dos Anéis");
            System.out.println("3 - Finalizar pesquisa");

            int opcoes = scanner.nextInt();

            if (opcoes == 1) {
                matrixVotos++;
            } else if (opcoes == 2) {
                SdAVotos++;
            } else if (opcoes == 3) {
                break;
            } else {
                System.out.println("Opção inválida. Tente novamente.");
            }
        }

        

        System.out.println("Resultado da pesquisa:");
        System.out.println("Matrix: " + matrixVotos + " votos");
        System.out.println("Senhor dos Anéis: " + SdAVotos + " votos");

        if (matrixVotos > SdAVotos) {
            System.out.println("A saga vencedora é Matrix!");
        } else if (SdAVotos > matrixVotos) {
            System.out.println("A saga vencedora é Senhor dos Anéis!");
        } else {
            System.out.println("Empate!");

        }
	}
}
