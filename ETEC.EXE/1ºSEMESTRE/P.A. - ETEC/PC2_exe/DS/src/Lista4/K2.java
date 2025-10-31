package Lista4;

import java.util.Scanner;

public class K2 {

	public static void main(String[] args) {
		
		        Scanner read = new Scanner(System.in);

		        String sexo;
		        String resp = "Sim";
		        int opnCliente;
		        int opnS = 0;
		        int opnN = 0;
		        int homenS = 0;
		        int homenN = 0;
		        int mulherS = 0;
		        int mulherN = 0;
		        double porcentF;
		        double porcentM;

		        do {
		            System.out.println("Informe seu sexo: ");
		            System.out.println("M - Masculino");
		            System.out.println("F - Feminino");
		            sexo = read.next();

		            System.out.println("Você gostou do novo produto ?");
		            System.out.println("1 - Sim");
		            System.out.println("2 - Não");
		            opnCliente = read.nextInt();

		            switch (opnCliente) {
		                case 1:
		                    opnS++;
		                    if (sexo.equalsIgnoreCase("M")) {
		                        homenS++;
		                    } else if (sexo.equalsIgnoreCase("F")) {
		                        mulherS++;
		                    }
		                    break;

		                case 2:
		                    opnN++;
		                    if (sexo.equalsIgnoreCase("M")) {
		                        homenN++;
		                    } else if (sexo.equalsIgnoreCase("F")) {
		                        mulherN++;
		                    }
		                    break;

		                default:
		                    System.out.println("Opção inválida.");
		                    break;
		            }

		            System.out.println("Deseja inserir um novo voto? (Sim/Não)");
		            resp = read.next();

		        } while (resp.equalsIgnoreCase("Sim"));

		       
		        if (mulherS + mulherN > 0) {
		            porcentF = (mulherS * 100.0) / (mulherS + mulherN);
		        } else {
		            porcentF = 0.0;
		        }

		        if (homenS + homenN > 0) {
		            porcentM = (homenN * 100.0) / (homenS + homenN);
		        } else {
		            porcentM = 0.0;
		        }

		      
		        System.out.println("----------------------------------------------");
		        System.out.println("Clientes que gostaram do produto: " + opnS);
		        System.out.println("Clientes que não gostaram do produto: " + opnN);
		        System.out.println("----------------------------------------------");
		        System.out.println("Porcentagem de votos por sexo:");
		        System.out.println("Porcentagem de mulheres que gostaram do produto: " + porcentF + "%");
		        System.out.println("Porcentagem de homens que não gostaram do produto: " + porcentM + "%");

		        
		    }
		}
