package exemploDecisao;

import java.util.Scanner;

public class exercicioSwitchCaseG5 {

	public static void main(String[] args) {
		  
	    Scanner leia = new Scanner(System.in);
	    int idade;
	    
	    System.out.println("Digite a idade da criança : ");
	    idade = leia.nextInt();
	    
	    switch (idade) {
	        case 6:
	        System.out.println("Categoria: Dente de Leite");
	        break;
	        case 7:
	        System.out.println("Categoria: Dente de Leite");
	        break;
	        case 8:
	        System.out.println("Categoria: Dente de Leite");
	        break;
	        case 9:
	        System.out.println("Categoria: Pré-Mirim");
	        break;
	        case 10:
	        System.out.println("Categoria: Pré-Mirim");
	        break;
	        case 11:
	        System.out.println("Categoria: Pré-Mirim");
	        break;
	        case 12:
	        System.out.println("Categoria: Mirim");
	        break;
	        case 13:
	        System.out.println("Categoria: Mirim");
	        break;
	        case 14:
	        System.out.println("Categoria: Infantil");
	        break;
	        case 15:
	        System.out.println("Categoria: Infantil");
	        break;
	        case 16:
	        System.out.println("Categoria: Juvenil");
	        break;
	        case 17:
	        System.out.println("Categoria: Juvenil");
	        break;
	        case 18:
	        System.out.println("Categoria: Juniores");
	        break;
	        case 19:
	        System.out.println("Categoria: Juniores");
	        break;
	        case 20:
	        System.out.println("Categoria: Juniores");
	        break;
	        default:
	        System.out.println("Categoria não encontrada...");
	    }

	}

}
