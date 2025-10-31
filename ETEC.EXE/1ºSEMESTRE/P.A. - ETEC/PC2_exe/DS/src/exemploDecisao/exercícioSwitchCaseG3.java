package exemploDecisao;

import java.util.Scanner;

public class exercícioSwitchCaseG3 {

	public static void main(String[] args) {
		
		Scanner leia = new Scanner(System.in);
		int codSalario;
		double salarioAtual, salarioNovo, reajusteSalario;
		
		System.out.println("Informe o código do salário : ");
		codSalario = leia.nextInt();
		
		System.out.println("Informe o salário atual : ");
		salarioAtual = leia.nextDouble();
		
		switch (codSalario) {
		case 5:
			reajusteSalario = ((salarioAtual/100)*5);
			salarioNovo = (salarioAtual + reajusteSalario);
			System.out.println("=============================");
			System.out.println("Salário antigo : " + salarioAtual);
			System.out.println("=============================");
			System.out.println("Reajuste do salário : " + reajusteSalario);
			System.out.println("=============================");
			System.out.println("Salario novo : " + salarioNovo);
			System.out.println("=============================");
			break;
		case 15:
			reajusteSalario = ((salarioAtual/100)*10);
			salarioNovo = (salarioAtual + reajusteSalario);
			System.out.println("Salário antigo : " + salarioAtual);
			System.out.println("Reajuste do salário : " + reajusteSalario);
			System.out.println("Salario novo : " + salarioNovo);
			break;
		case 20:
			reajusteSalario = ((salarioAtual/100)*15);
			salarioNovo = (salarioAtual + reajusteSalario);
			System.out.println("Salário antigo : " + salarioAtual);
			System.out.println("Reajuste do salário : " + reajusteSalario);
			System.out.println("Salario novo : " + salarioNovo);
			break;
		case 25:
			reajusteSalario = ((salarioAtual/100)*20);
			salarioNovo = (salarioAtual + reajusteSalario);
			System.out.println("Salário antigo : " + salarioAtual);
			System.out.println("Reajuste do salário : " + reajusteSalario);
			System.out.println("Salario novo : " + salarioNovo);
			break;
		case 30:
			reajusteSalario = ((salarioAtual/100)*25);
			salarioNovo = (salarioAtual + reajusteSalario);
			System.out.println("Salário antigo : " + salarioAtual);
			System.out.println("Reajuste do salário : " + reajusteSalario);
			System.out.println("Salario novo : " + salarioNovo);
			break;
		case 35:
			reajusteSalario = ((salarioAtual/100)*30);
			salarioNovo = (salarioAtual + reajusteSalario);
			System.out.println("Salário antigo : " + salarioAtual);
			System.out.println("Reajuste do salário : " + reajusteSalario);
			System.out.println("Salario novo : " + salarioNovo);
			break;
			default:
			 System.out.println("Código do salário inserido inválido");
		}

	}

}
