package Lista3;

import java.util.Scanner;

public class J4 {

	public static void main(String[] args) {
	
		 Scanner scanner = new Scanner(System.in);

	        int totalHomensEngComp = 0;
	        int totalMulheresPsicologia = 0;
	        int totalMedicina = 0;
	        int totalHomensAdmin = 0;
	        int totalMulheresMedicina = 0;

	        char resp;
	        do {
	            System.out.println("Informe o sexo do entrevistado (M para masculino, F para feminino): ");
	            char sexo = scanner.next().toUpperCase().charAt(0);
	            System.out.println("Informe o cÃ³digo do curso desejado (1 para Engenharia da Computação, 2 para Administração, 3 para Medicina, 4 para Psicologia): ");
	            int codigoCurso = scanner.nextInt();

	            switch (codigoCurso) {
	                case 1:
	                    if (sexo == 'M') {
	                        totalHomensEngComp++;
	                    }
	                    break;
	                case 4:
	                    if (sexo == 'F') {
	                        totalMulheresPsicologia++;
	                    }
	                    break;
	                case 3:
	                    totalMedicina++;
	                    if (sexo == 'M') {
	                        totalHomensAdmin++;
	                    } else if (sexo == 'F') {
	                        totalMulheresMedicina++;
	                    }
	                    break;
	                default:
	                    System.out.println("Código de curso inválido.");
	            }

	            System.out.println("Deseja realizar outra pesquisa? (S/N): ");
	            resp = scanner.next().toUpperCase().charAt(0);
	        } while (resp == 'S');

	        // Calculando percentuais
	        double percentualMedicina = (double) totalMedicina / (totalHomensEngComp + totalMulheresPsicologia + totalMedicina + totalHomensAdmin + totalMulheresMedicina) * 100;
	        double percentualHomensAdmin = (double) totalHomensAdmin / (totalHomensEngComp + totalMulheresPsicologia + totalMedicina + totalHomensAdmin + totalMulheresMedicina) * 100;
	        double percentualMulheresMedicina = (double) totalMulheresMedicina / (totalHomensEngComp + totalMulheresPsicologia + totalMedicina + totalHomensAdmin + totalMulheresMedicina) * 100;

	        // Apresentando resultados
	        System.out.println("Total de homens que pretendem cursar Engenharia da Computação: " + totalHomensEngComp);
	        System.out.println("Total de mulheres que pretendem cursar Psicologia: " + totalMulheresPsicologia);
	        System.out.println("Percentual de pessoas que pretendem cursar Medicina: " + percentualMedicina + "%");
	        System.out.println("Percentual de homens que pretendem cursar Administração: " + percentualHomensAdmin + "%");
	        System.out.println("Percentual de mulheres que pretendem cursar Medicina: " + percentualMulheresMedicina + "%");

	        scanner.close();
	    }
	}