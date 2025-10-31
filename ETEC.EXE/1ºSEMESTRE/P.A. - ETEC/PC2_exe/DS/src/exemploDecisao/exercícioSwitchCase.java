package exemploDecisao;

import java.util.Scanner;

public class exercícioSwitchCase {

	public static void main(String[] args) {
		
		Scanner leia = new Scanner(System.in);
		int erro;
		
		System.out.println("Digite o código do erro : ");
		erro = leia.nextInt();
		
		switch (erro) {
		case 1:
			System.out.println("Seu erro é : Identificador Inválido");
			break;
		case 2:
			System.out.println("Seu erro é : Esperando Número Inteiro");
			break;
		case 3: 
			System.out.println("Seu erro é : Tipo de Dado Indefinido");
			break;
		case 4:
			System.out.println("Seu erro é : Parâmetro Incorreto");
			break;
		case 5:
			System.out.println("Seu erro é : Memória Insuficiente");
			break;
		default:
			System.out.println("Código de erro inexistente...");
		}
	}

}
