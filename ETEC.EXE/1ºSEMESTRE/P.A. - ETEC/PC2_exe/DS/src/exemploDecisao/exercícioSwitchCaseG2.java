package exemploDecisao;

import java.util.Scanner;

public class exercícioSwitchCaseG2 {

	public static void main(String[] args) {
		
		Scanner leia = new Scanner(System.in);
		int erro;
		
		System.out.println("Digite o código do departamento : ");
		erro = leia.nextInt();
		
		switch (erro) {
		case 10:
			System.out.println("Seu departamento será : Expedição");
			break;
		case 20:
			System.out.println("Seu departamento será : Recursos Humanos");
			break;
		case 30: 
			System.out.println("Seu departamento será : Logística");
			break;
		case 40:
			System.out.println("Seu departamento será : Contabilidade");
			break;
		case 50:
			System.out.println("Seu departamento será : Departamento Pessoal");
			break;
		case 60:
			System.out.println("Seu departamento será : Informática");
			break;
			default:
			System.out.println("Departamento não encontrado...");
		}
	}

}
