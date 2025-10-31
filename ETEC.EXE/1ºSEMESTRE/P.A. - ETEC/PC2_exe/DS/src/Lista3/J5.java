package Lista3;

import java.util.Scanner;

public class J5 {

	public static void main(String[] args) {
		  Scanner scanner = new Scanner(System.in);

	      
	        int sim = 0;
	        int nao = 0;
	        int totalFeminino = 0;
	        int simFeminino = 0;
	        int totalMasculino = 0;
	        int naoMasculino = 0;

	        char resp = 0;
	        do {
	            System.out.println("Informe o sexo do entrevistado (M para masculino, F para feminino): ");
	            char sexo = scanner.next().toUpperCase().charAt(0);
	            System.out.println("Gostou do novo produto? (Sim ou Não): ");
	            String resposta = scanner.next().toUpperCase();

	            if (resposta.equals("SIM")) {
	                sim++;
	                if (sexo == 'F') {
	                    simFeminino++;
	                }
	            } else if (resposta.equals("NÃO")) {
	                nao++;
	                if (sexo == 'M') {
	                    naoMasculino++;
	                }
	            } else {
	                System.out.println("Resposta inválida. Por favor, responda com 'Sim' ou 'Não'.");
	                continue;
	            }

	          
	            if (sexo == 'F') {
	                totalFeminino++;
	            } else if (sexo == 'M') {
	                totalMasculino++;
	            }

	            System.out.println("Deseja realizar outra pesquisa? (S/N): ");
	            resp = scanner.next().toUpperCase().charAt(0);
	        } while (resp == 'S');

	      
	        double percentualSimFeminino = (double) simFeminino / totalFeminino * 100;
	        double percentualNaoMasculino = (double) naoMasculino / totalMasculino * 100;

	      
	        System.out.println("Número de pessoas que responderam sim: " + sim);
	        System.out.println("Número de pessoas que responderam não: " + nao);
	        System.out.println("Porcentagem de pessoas do sexo feminino que responderam sim: " + percentualSimFeminino + "%");
	        System.out.println("Porcentagem de pessoas do sexo masculino que responderam não: " + percentualNaoMasculino + "%");

	        scanner.close();
	    }
	
}
