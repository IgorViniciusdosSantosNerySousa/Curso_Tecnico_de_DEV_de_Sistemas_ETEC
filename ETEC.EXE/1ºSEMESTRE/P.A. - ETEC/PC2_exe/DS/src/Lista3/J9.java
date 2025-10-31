package Lista3;

import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;

public class J9 {

	public static void main(String[] args) {
		
		Scanner read = new Scanner(System.in);
	
		  Scanner scanner = new Scanner(System.in);

	        Map<String, Integer> votosCursos = new HashMap<>();
	        votosCursos.put("Ciência da Computação", 0);
	        votosCursos.put("Direito", 0);
	        votosCursos.put("Letras", 0);

	        char resp;
	        do {
	            System.out.println("Por favor, vote em um dos cursos: ");
	            System.out.println("1 - Ciência da Computação");
	            System.out.println("2 - Direito");
	            System.out.println("3 - Letras");
	            int voto = scanner.nextInt();

	            switch (voto) {
	                case 1:
	                    votosCursos.put("Ciência da Computação", votosCursos.get("Ciência da Computação") + 1);
	                    break;
	                case 2:
	                    votosCursos.put("Direito", votosCursos.get("Direito") + 1);
	                    break;
	                case 3:
	                    votosCursos.put("Letras", votosCursos.get("Letras") + 1);
	                    break;
	                default:
	                    System.out.println("Opção invalida.");
	            }

	            System.out.println("Deseja realizar outra votação? (S/N): ");
	            resp = scanner.next().toUpperCase().charAt(0);
	        } while (resp == 'S');

	        int totalVotos = votosCursos.get("Ciência da Computação") + votosCursos.get("Direito") + votosCursos.get("Letras");

	        int maxVotos = Math.max(Math.max(votosCursos.get("Ciência da Computação"), votosCursos.get("Direito")), votosCursos.get("Letras"));
	        boolean empate = votosCursos.get("Ciência da Computação") == maxVotos || votosCursos.get("Direito") == maxVotos || votosCursos.get("Letras") == maxVotos;

	        System.out.println("RESULTADO DA PESQUISA:");
	        System.out.println("----------------------");
	        System.out.println("Total de votos: " + totalVotos);
	        System.out.println("----------------------");
	        for (String curso : votosCursos.keySet()) {
	            double percentual = (double) votosCursos.get(curso) / totalVotos * 100;
	            System.out.println(curso + ": " + votosCursos.get(curso) + " votos - " + percentual + "%");
	        }
	        System.out.println("----------------------");
	        if (empate) {
	            System.out.println("Houve empate entre os cursos!");
	        } else {
	            System.out.println("Não houve empate. Os cursos foram classificados.");
	        }

	        scanner.close();
	    }
}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	}	
}	