package exemploDecisao;

import java.util.Scanner;

public class exercicioSwitchCaseG4 {

	public static void main(String[] args) {
		
		Scanner leia = new Scanner(System.in);
		int codSalario;
		double salarioAtual, reajusteSalario, salarioNovo;
		String funcao;
		
		
		System.out.println("Insira o c�digo do salario : ");
		codSalario = leia.nextInt();
		
		System.out.println("Informe o sal�rio atual : ");
		salarioAtual = leia.nextDouble();
		
		
		switch (codSalario) {
		case 1:
			reajusteSalario = ((salarioAtual/100)*5);
			salarioNovo = (salarioAtual + reajusteSalario);
			System.out.println("=============================");
			System.out.println("Sal�rio antigo : " + salarioAtual);
			System.out.println("=============================");
			System.out.println("Reajuste do sal�rio : " + reajusteSalario);
			System.out.println("=============================");
			System.out.println("Salario novo : " + salarioNovo);
			System.out.println("=============================");
			System.out.println("Fun��o : Operador");
			System.out.println("=============================");
			break;
		case 2:
			reajusteSalario = ((salarioAtual/100)*10);
			salarioNovo = (salarioAtual + reajusteSalario);
			System.out.println("=============================");
			System.out.println("Sal�rio antigo : " + salarioAtual);
			System.out.println("=============================");
			System.out.println("Reajuste do sal�rio : " + reajusteSalario);
			System.out.println("=============================");
			System.out.println("Salario novo : " + salarioNovo);
			System.out.println("=============================");
			System.out.println("Fun��o : Programador");
			System.out.println("=============================");
			break;
		case 3:
			reajusteSalario = ((salarioAtual/100)*15);
			salarioNovo = (salarioAtual + reajusteSalario);
			System.out.println("=============================");
			System.out.println("Sal�rio antigo : " + salarioAtual);
			System.out.println("=============================");
			System.out.println("Reajuste do sal�rio : " + reajusteSalario);
			System.out.println("=============================");
			System.out.println("Salario novo : " + salarioNovo);
			System.out.println("=============================");
			System.out.println("Fun��o : Analista");
			System.out.println("=============================");
			break;
		case 4:
			reajusteSalario = ((salarioAtual/100)*25);
			salarioNovo = (salarioAtual + reajusteSalario);
			System.out.println("=============================");
			System.out.println("Sal�rio antigo : " + salarioAtual);
			System.out.println("=============================");
			System.out.println("Reajuste do sal�rio : " + reajusteSalario);
			System.out.println("=============================");
			System.out.println("Salario novo : " + salarioNovo);
			System.out.println("=============================");
			System.out.println("Fun��o : Gerente");
			System.out.println("=============================");
			break;
			default:
				System.out.println("C�digo inv�lido");
		}
	}

}
