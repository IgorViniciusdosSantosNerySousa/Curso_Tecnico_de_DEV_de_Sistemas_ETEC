package Lista4;

import java.util.Scanner;

public class K9 {

	public static void main(String[] args) {
		

		        Scanner sc = new Scanner(System.in);

		        String resp = "SIM";
		        int porsche = 0;
		        int ferrari = 0;
		        int mercedes = 0;
		        double percentP = 0;
		        double percentF = 0;
		        double percentM = 0;
		        int totVotos = 0;
		        int opnCarros = 0;

		        System.out.println("--Mercado sobre carros--");
		        
		        do {
		            System.out.println("Qual carro você prefere?");
		            System.out.println("1 - Ferrari");
		            System.out.println("2 - Porsche");
		            System.out.println("3 - Mercedes");
		            opnCarros = sc.nextInt();

		            switch (opnCarros) {
		                case 1:
		                    ferrari++;
		                    break;
		                case 2:
		                    porsche++;
		                    break;
		                case 3:
		                    mercedes++;
		                    break;
		                default:
		                    System.out.println("Opção inválida.");
		                    break;
		            }

		            System.out.println("Deseja inserir um novo voto? (Sim/Não)");
		            resp = sc.next();

		        } while (resp.equalsIgnoreCase("Sim"));

		       

		       
		        totVotos = ferrari + porsche + mercedes;

		       
		        if (totVotos > 0) {
		            percentF = (ferrari * 100.0) / totVotos;
		            percentP = (porsche * 100.0) / totVotos;
		            percentM = (mercedes * 100.0) / totVotos;
		        }

		        
		        System.out.println("----------------------------------------------");
		        System.out.println("Total de votos: " + totVotos);
		        System.out.println("Percentual de votos para Ferrari: " + percentF + "%");
		        System.out.println("Percentual de votos para Porsche: " + percentP + "%");
		        System.out.println("Percentual de votos para Mercedes: " + percentM + "%");
		        System.out.println("----------------------------------------------");

		      
		        if (ferrari == porsche && porsche == mercedes) {
		            System.out.println("Empate triplo.");
		        } else if (ferrari == porsche && ferrari > mercedes) {
		            System.out.println("Empate entre Ferrari e Porsche.");
		        } else if (ferrari == mercedes && ferrari > porsche) {
		            System.out.println("Empate entre Ferrari e Mercedes.");
		        } else if (porsche == mercedes && porsche > ferrari) {
		            System.out.println("Empate entre Porsche e Mercedes.");
		        } else {
		            if (ferrari > porsche && ferrari > mercedes) {
		                System.out.println("Ferrari é o mais votado.");
		                if (porsche > mercedes) {
		                    System.out.println("Porsche em segundo lugar.");
		                    System.out.println("Mercedes em terceiro lugar.");
		                } else if (mercedes > porsche) {
		                    System.out.println("Mercedes em segundo lugar.");
		                    System.out.println("Porsche em terceiro lugar.");
		                } else {
		                    System.out.println("Empate entre Porsche e Mercedes no segundo lugar.");
		                }
		            } else if (porsche > ferrari && porsche > mercedes) {
		                System.out.println("Porsche é o mais votado.");
		                if (ferrari > mercedes) {
		                    System.out.println("Ferrari em segundo lugar.");
		                    System.out.println("Mercedes em terceiro lugar.");
		                } else if (mercedes > ferrari) {
		                    System.out.println("Mercedes em segundo lugar.");
		                    System.out.println("Ferrari em terceiro lugar.");
		                } else {
		                    System.out.println("Empate entre Ferrari e Mercedes no segundo lugar.");
		                }
		            } else if (mercedes > ferrari && mercedes > porsche) {
		                System.out.println("Mercedes é o mais votado.");
		                if (ferrari > porsche) {
		                    System.out.println("Ferrari em segundo lugar.");
		                    System.out.println("Porsche em terceiro lugar.");
		                } else if (porsche > ferrari) {
		                    System.out.println("Porsche em segundo lugar.");
		                    System.out.println("Ferrari em terceiro lugar.");
		                } else {
		                    System.out.println("Empate entre Ferrari e Porsche no segundo lugar.");
		                }
		            }
		        }
		    }
		}
