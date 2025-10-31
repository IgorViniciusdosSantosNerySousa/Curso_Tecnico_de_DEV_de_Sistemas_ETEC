package Lista3;

import java.util.Scanner;

public class J6 {

	public static void main(String[] args) {
		
		  Scanner scanner = new Scanner(System.in);

	        int totalHomens = 0;
	        int totalMulheres = 0;
	        int[] totalHomensPorRegiao = new int[5];
	        int[] totalMulheresPorRegiao = new int[5];
	        int totalPessoas = 0;
	        int totalHomensMenoresLeste = 0;
	        int totalMulheresMaioresSul = 0;
	        int totalHomensCentral = 0;

	        char resp;
	        do {
	            System.out.println("Informe a idade da pessoa: ");
	            int idade = scanner.nextInt();
	            System.out.println("Informe a regiÃ£o de residÃªncia (Centro, Leste, Norte, Oeste ou Sul): ");
	            String regiao = scanner.next().toLowerCase();
	            System.out.println("Informe o sexo da pessoa (M para masculino, F para feminino): ");
	            char sexo = scanner.next().toUpperCase().charAt(0);

	            totalPessoas++;

	            if (sexo == 'M') {
	                totalHomens++;
	                switch (regiao) {
	                    case "centro":
	                        totalHomensPorRegiao[0]++;
	                        break;
	                    case "leste":
	                        totalHomensPorRegiao[1]++;
	                        break;
	                    case "norte":
	                        totalHomensPorRegiao[2]++;
	                        break;
	                    case "oeste":
	                        totalHomensPorRegiao[3]++;
	                        break;
	                    case "sul":
	                        totalHomensPorRegiao[4]++;
	                        break;
	                    default:
	                        System.out.println("Região inválida.");
	                }
	                if (regiao.equals("centro")) {
	                    totalHomensCentral++;
	                }
	                if (idade < 18 && regiao.equals("leste")) {
	                    totalHomensMenoresLeste++;
	                }
	            } else if (sexo == 'F') {
	                totalMulheres++;
	                switch (regiao) {
	                    case "centro":
	                        totalMulheresPorRegiao[0]++;
	                        break;
	                    case "leste":
	                        totalMulheresPorRegiao[1]++;
	                        break;
	                    case "norte":
	                        totalMulheresPorRegiao[2]++;
	                        break;
	                    case "oeste":
	                        totalMulheresPorRegiao[3]++;
	                        break;
	                    case "sul":
	                        totalMulheresPorRegiao[4]++;
	                        break;
	                    default:
	                        System.out.println("Região inválida.");
	                }
	                if (idade > 18 && regiao.equals("sul")) {
	                    totalMulheresMaioresSul++;
	                }
	            } else {
	                System.out.println("Sexo inválido.");
	            }

	            System.out.println("Deseja realizar outra pesquisa? (S/N): ");
	            resp = scanner.next().toUpperCase().charAt(0);
	        } while (resp == 'S');

	        double[] percentualHomensPorRegiao = new double[5];
	        double[] percentualMulheresPorRegiao = new double[5];
	        for (int i = 0; i < 5; i++) {
	            percentualHomensPorRegiao[i] = (double) totalHomensPorRegiao[i] / totalHomens * 100;
	            percentualMulheresPorRegiao[i] = (double) totalMulheresPorRegiao[i] / totalMulheres * 100;
	        }

	        System.out.println("RESULTADO DO CENSO:");
	        System.out.println("----------------------");
	        System.out.println("Total de pessoas em São Paulo: " + totalPessoas);
	        System.out.println("Total de homens: " + totalHomens);
	        System.out.println("Total de mulheres: " + totalMulheres);
	        System.out.println("----------------------");
	        for (int i = 0; i < 5; i++) {
	            System.out.println("Região " + (i + 1) + ":");
	            System.out.println("Total de homens: " + totalHomensPorRegiao[i] + " - Percentual: " + percentualHomensPorRegiao[i] + "%");
	            System.out.println("Total de mulheres: " + totalMulheresPorRegiao[i] + " - Percentual: " + percentualMulheresPorRegiao[i] + "%");
	        }
	        System.out.println("----------------------");
	        System.out.println("Total de homens menores de idade na Zona Leste: " + totalHomensMenoresLeste);
	        System.out.println("Percentual de mulheres maiores de idade na Zona Sul: " + (double) totalMulheresMaioresSul / totalMulheres * 100 + "%");
	        System.out.println("Percentual de homens na Zona Central: " + (double) totalHomensCentral / totalHomens * 100 + "%");

	        scanner.close();
	    }
	}