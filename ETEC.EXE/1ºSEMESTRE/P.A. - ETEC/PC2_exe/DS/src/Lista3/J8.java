package Lista3;

import java.util.Scanner;

public class J8 {

	public static void main(String[] args) {
		
		Scanner scanner = new Scanner(System.in);

        int votosFujiro = 0;
        int votosTakaro = 0;

        char resp;
        do {
            System.out.println("Escolha o candidato:");
            System.out.println("1 - Fujiro Nakombi");
            System.out.println("2 - Takaro Né");
            int escolha = scanner.nextInt();

            switch (escolha) {
                case 1:
                    votosFujiro++;
                    break;
                case 2:
                    votosTakaro++;
                    break;
                default:
                    System.out.println("Opção inválida.");
            }

            System.out.println("Deseja realizar outro voto? (S/N): ");
            resp = scanner.next().toUpperCase().charAt(0);
        } while (resp == 'S');

        int totalVotos = votosFujiro + votosTakaro;

        if (votosFujiro == votosTakaro) {
            System.out.println("Houve um empate!");
            System.out.println("Por favor, vote para desempatar:");
            System.out.println("1 - Fujiro Nakombi");
            System.out.println("2 - Takaro Né");
            int desempate = scanner.nextInt();
            if (desempate == 1) {
                votosFujiro++;
            } else if (desempate == 2) {
                votosTakaro++;
            } else {
                System.out.println("Opção inválida. Voto não contabilizado.");
            }
            totalVotos++;
        }

        double percentualFujiro = (double) votosFujiro / totalVotos * 100;
        double percentualTakaro = (double) votosTakaro / totalVotos * 100;

        System.out.println("RESULTADO DA ELEIÇÃO:");
        System.out.println("----------------------");
        System.out.println("Total de votos: " + totalVotos);
        System.out.println("----------------------");
        System.out.println("Fujiro Nakombi: " + votosFujiro + " votos - " + percentualFujiro + "%");
        System.out.println("Takaro Né: " + votosTakaro + " votos - " + percentualTakaro + "%");
        System.out.println("----------------------");
        if (votosFujiro > votosTakaro) {
            System.out.println("Fujiro Nakombi é o novo gerente da empresa!");
        } else if (votosTakaro > votosFujiro) {
            System.out.println("Takaro Né é o novo gerente da empresa!");
        } else {
            System.out.println("Apenas o desempate, não foi possível determinar o novo gerente.");
        }

        scanner.close();
    }

	}


