package Lista4;

import java.util.Scanner;

public class K7 {

	public static void main(String[] args) {
		
		  Scanner scanner = new Scanner(System.in);

		    String[] candidatos = {"Ricardo Teixeira", "Paulo Falcão"};
		    int[] votos = new int[2];
		    boolean empate = false;
		    boolean fimDaEleicao = false;

		        while (!fimDaEleicao) {
		            System.out.println("Eleição para presidente da CBF:");
		            System.out.println("1. " + candidatos[0]);
		            System.out.println("2. " + candidatos[1]);
		            System.out.print("Digite o número do seu candidato (ou 'F' para finalizar a eleição): ");

		            String resp = scanner.next();

		            if (resp.equalsIgnoreCase("F")) {
		                fimDaEleicao = true;
		            } else if (resp.equals("1")) {
		                votos[0]++;
		            } else if (resp.equals("2")) {
		                votos[1]++;
		            } else {
		                System.out.println("Opção inválida. Tente novamente.");
		            }

		            if (fimDaEleicao) {
		                int totalVotos = votos[0] + votos[1];

		                if (votos[0] > votos[1]) {
		                    System.out.println("O novo presidente da CBF é " + candidatos[0]);
		                    System.out.println("Total de votos: " + totalVotos);
		                    System.out.println("Percentual de votos de " + candidatos[0] + ": " + (votos[0] * 100.0 / totalVotos) + "%");
		                    System.out.println("Percentual de votos de " + candidatos[1] + ": " + (votos[1] * 100.0 / totalVotos) + "%");
		                } else if (votos[1] > votos[0]) {
		                    System.out.println("O novo presidente da CBF é " + candidatos[1]);
		                    System.out.println("Total de votos: " + totalVotos);
		                    System.out.println("Percentual de votos de " + candidatos[0] + ": " + (votos[0] * 100.0 / totalVotos) + "%");
		                    System.out.println("Percentual de votos de " + candidatos[1] + ": " + (votos[1] * 100.0 / totalVotos) + "%");
		                } else {
		                    empate = true;
		                    System.out.println("Houve um empate! É necessário um voto de desempate.");
		                    System.out.print("Digite o número do seu candidato (ou 'F' para finalizar a eleição): ");
		                    resp = scanner.next();

		                    if (resp.equals("1")) {
		                        votos[0]++;
		                        System.out.println("O novo presidente da CBF é " + candidatos[0]);
		                    } else if (resp.equals("2")) {
		                        votos[1]++;
		                        System.out.println("O novo presidente da CBF é " + candidatos[1]);
		                    } else {
		                        System.out.println("Opção inválida. Tente novamente.");
		                    }
		                }
		            }
		        }

	}

}
