package exemploDecisao;

import java.util.Scanner;

public class exemploDecisao {

	public static void main(String[] args) {
		
		Scanner leia = new Scanner(System.in);
		int idade;
		String nome;
		
		System.out.println("Qual seu nome?");
		nome = leia.next();
		
		System.out.println("Qual sua idade?");
		idade = leia.nextInt();
		
		switch (idade) {
		//switch : usar para um valor específico para cada coisa
		case 10:
		case 11:
		case 12:
		System.out.println("Adolescente");
		break;
		case 25:
			System.out.println("Adulto");
			break;
		case 60:
		System.out.println("Idoso");
		break;
		}
		
	}

}
