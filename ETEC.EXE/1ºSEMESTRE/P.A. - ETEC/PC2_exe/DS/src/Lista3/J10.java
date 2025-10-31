package Lista3;

import java.util.Scanner;

public class J10 {

	public static void main(String[] args) {

		Scanner scanner = new Scanner (System.in);

				        int votosCorsa = 0;
				        int votosPalio = 0;
				        int votosGol = 0;
				        String resp = "Sim";

				        do {
				            System.out.println("Vote no seu automóvel favorito:");
				            System.out.println("1 - CORSA");
				            System.out.println("2 - PALIO");
				            System.out.println("3 - GOL");
				            int voto = scanner.nextInt();

				            switch (voto) {
				                case 1:
				                    votosCorsa++;
				                    break;
				                case 2:
				                    votosPalio++;
				                    break;
				                case 3:
				                    votosGol++;
				                    break;
				                default:
				                    System.out.println("Voto inválido. Tente novamente.");
				                    continue;
				            }

				            System.out.println("Deseja inserir um novo voto? (sim/não)");
				            resp = scanner.next();
				        } while (resp.equalsIgnoreCase("Sim"));

				        int totalVotos = votosCorsa + votosPalio + votosGol;
				        if (totalVotos == 0) {
				            System.out.println("Nenhum voto foi registrado.");
				            return;
				        }

				        double percentualCorsa = (votosCorsa * 100.0) / totalVotos;
				        double percentualPalio = (votosPalio * 100.0) / totalVotos;
				        double percentualGol = (votosGol * 100.0) / totalVotos;

				        System.out.println("Resultado da pesquisa de mercado:");
				        System.out.printf("CORSA: %d votos (%.2f%%)%n", votosCorsa, percentualCorsa);
				        System.out.printf("PALIO: %d votos (%.2f%%)%n", votosPalio, percentualPalio);
				        System.out.printf("GOL: %d votos (%.2f%%)%n", votosGol, percentualGol);

				        if (votosCorsa == votosPalio && votosPalio == votosGol) {
				            System.out.println("Empate triplo.");
				        } else if (votosCorsa == votosPalio && votosCorsa > votosGol) {
				            System.out.println("Empate entre CORSA e PALIO.");
				        } else if (votosCorsa == votosGol && votosCorsa > votosPalio) {
				            System.out.println("Empate entre CORSA e GOL.");
				        } else if (votosPalio == votosGol && votosPalio > votosCorsa) {
				            System.out.println("Empate entre PALIO e GOL.");
				        } else {
				            if (votosCorsa > votosPalio && votosCorsa > votosGol) {
				                System.out.println("CORSA é o mais votado.");
				                if (votosPalio > votosGol) {
				                    System.out.println("PALIO em segundo lugar.");
				                    System.out.println("GOL em terceiro lugar.");
				                } else if (votosGol > votosPalio) {
				                    System.out.println("GOL em segundo lugar.");
				                    System.out.println("PALIO em terceiro lugar.");
				                } else {
				                    System.out.println("Empate entre PALIO e GOL no segundo lugar.");
				                }
				            } else if (votosPalio > votosCorsa && votosPalio > votosGol) {
				                System.out.println("PALIO é o mais votado.");
				                if (votosCorsa > votosGol) {
				                    System.out.println("CORSA em segundo lugar.");
				                    System.out.println("GOL em terceiro lugar.");
				                } else if (votosGol > votosCorsa) {
				                    System.out.println("GOL em segundo lugar.");
				                    System.out.println("CORSA em terceiro lugar.");
				                } else {
				                    System.out.println("Empate entre CORSA e GOL no segundo lugar.");
				                }
				            } else if (votosGol > votosCorsa && votosGol > votosPalio) {
				                System.out.println("GOL é o mais votado.");
				                if (votosCorsa > votosPalio) {
				                    System.out.println("CORSA em segundo lugar.");
				                    System.out.println("PALIO em terceiro lugar.");
				                } else if (votosPalio > votosCorsa) {
				                    System.out.println("PALIO em segundo lugar.");
				                    System.out.println("CORSA em terceiro lugar.");
				                } else {
				                    System.out.println("Empate entre CORSA e PALIO no segundo lugar.");
				                }
				            }
				        }

				        scanner.close();
				    }
				}
		
		
		

