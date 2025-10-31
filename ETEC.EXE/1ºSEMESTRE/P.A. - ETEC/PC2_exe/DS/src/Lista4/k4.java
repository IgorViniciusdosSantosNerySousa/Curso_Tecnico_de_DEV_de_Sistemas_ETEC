package Lista4;

import java.util.Scanner;

public class k4 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner (System.in);
		
		  String sexo;
	        String resp;
	        String respPesquisa;
	        int mascNao = 0;
	        int femNao = 0;
	        int mascSim = 0;
	        int femSim = 0;
	        int totalFem = 0;
	        int totalMasc = 0;
	        double percentMasc = 0;
	        double percentFem = 0;

	        System.out.println("------------------------------------------------------------------------------------------------");
	        System.out.println("--------------------------------------PRODUTO EMPRESA-------------------------------------------");
	        System.out.println("------------------------------------------------------------------------------------------------");
	        do {
	            System.out.println("Qual o seu sexo? (F/M)");
	            sexo = sc.next().trim().toUpperCase();

	            if (sexo.equals("F")) {
	                totalFem++;
	                System.out.println("Você gostou do produto? (S/N)");
	                respPesquisa = sc.next().trim().toUpperCase();

	                if (respPesquisa.equals("S")) {
	                    femSim++;
	                } else if (respPesquisa.equals("N")) {
	                    femNao++;
	                } else {
	                    System.out.println("Resposta Inválida!!!");
	                }
	            } else if (sexo.equals("M")) {
	                totalMasc++;
	                System.out.println("Você gostou do produto? (S/N)");
	                respPesquisa = sc.next().trim().toUpperCase();

	                if (respPesquisa.equals("S")) {
	                    mascSim++;
	                } else if (respPesquisa.equals("N")) {
	                    mascNao++;
	                } else {
	                    System.out.println("Resposta Inválida!!!");
	                }
	            } else {
	                System.out.println("Sexo Inválido!!!");
	            }

	            System.out.println("Deseja fazer outra avaliação? (S/N)");
	            resp = sc.next().trim().toUpperCase();

	        } while (resp.equals("S"));

	        if (totalFem > 0) {
	            percentFem = ((double) femNao / totalFem) * 100;
	        }
	        if (totalMasc > 0) {
	            percentMasc = ((double) mascSim / totalMasc) * 100;
	        }

	        System.out.println("\nRESULTADOS DA PESQUISA");
	        System.out.println("Total de pessoas do sexo FEMININO que gostaram do produto: " + femSim);
	        System.out.println("Total de pessoas do sexo MASCULINO que NÃO gostaram do produto: " + mascNao);
	        System.out.println("Percentual de pessoas do sexo FEMININO que NÃO gostaram: "+ percentFem);
	        System.out.println("Percentual de pessoas do sexo MASCULINO que gostaram: "+ percentMasc);

	}

}
