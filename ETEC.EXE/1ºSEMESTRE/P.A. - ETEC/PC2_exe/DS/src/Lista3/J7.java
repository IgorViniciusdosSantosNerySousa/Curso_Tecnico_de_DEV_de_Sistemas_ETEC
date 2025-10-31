package Lista3;

import java.util.Scanner;

public class J7 {

	public static void main(String[] args) {
		
		 Scanner scanner = new Scanner(System.in);

	        int votosMatrix = 0;
	        int votosSenhorDosAneis = 0;

	        char resp;
	        do {
	            System.out.println("Escolha a melhor saga de filme:");
	            System.out.println("1 - Matrix");
	            System.out.println("2 - Senhor dos Anéis");
	            int escolha = scanner.nextInt();

	            switch (escolha) {
	                case 1:
	                    votosMatrix++;
	                    break;
	                case 2:
	                    votosSenhorDosAneis++;
	                    break;
	                default:
	                    System.out.println("Opção inválida.");
	            }

	            System.out.println("Deseja realizar outra votação? (S/N): ");
	            resp = scanner.next().toUpperCase().charAt(0);
	        } while (resp == 'S');

	        String vencedora;
	        if (votosMatrix > votosSenhorDosAneis) {
	            vencedora = "Matrix";
	        } else if (votosSenhorDosAneis > votosMatrix) {
	            vencedora = "Senhor dos Anéis";
	        } else {
	            vencedora = "Empate";
	        }

	        System.out.println("RESULTADO DA PESQUISA:");
	        System.out.println("----------------------");
	        System.out.println("Total de votos para Matrix: " + votosMatrix);
	        System.out.println("Total de votos para Senhor dos Anéi: " + votosSenhorDosAneis);
	        System.out.println("----------------------");
	        if (!vencedora.equals("Empate")) {
	            System.out.println("A saga vencedora é: " + vencedora);
	        } else {
	            System.out.println("Houve um empate entre Matrix e Senhor dos Anéis.");
	        }

	        scanner.close();
	    }
	
	}


