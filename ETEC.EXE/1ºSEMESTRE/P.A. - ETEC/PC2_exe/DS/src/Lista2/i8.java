package Lista2;

import java.util.Scanner;

public class i8 {

	public static void main(String[] args) {
		
		Scanner leia = new Scanner(System.in);
		int codSalario;
		double salarioAtual, salarioNovo, reajusteSalario;
		
		System.out.println("Informe o código do salário : ");
		codSalario = leia.nextInt();
		
		System.out.println("Informe o salário atual : ");
		salarioAtual = leia.nextDouble();
		
		switch (codSalario) {
		case 1:
			reajusteSalario = ((salarioAtual/100)*5);
			salarioNovo = (salarioAtual + reajusteSalario);			
			System.out.println("Salário antigo : " + salarioAtual);
			System.out.println("Reajuste do salário : " + reajusteSalario);			
			System.out.println("Salario novo : " + salarioNovo);		
			break;
		case 2:
			reajusteSalario = ((salarioAtual/100)*15);
			salarioNovo = (salarioAtual + reajusteSalario);
			System.out.println("Salário antigo : " + salarioAtual);
			System.out.println("Reajuste do salário : " + reajusteSalario);
			System.out.println("Salario novo : " + salarioNovo);
			break;
		case 3:
			reajusteSalario = ((salarioAtual/100)*25);
			salarioNovo = (salarioAtual + reajusteSalario);
			System.out.println("Salário antigo : " + salarioAtual);
			System.out.println("Reajuste do salário : " + reajusteSalario);
			System.out.println("Salario novo : " + salarioNovo);
			break;
		case 4:
			reajusteSalario = ((salarioAtual/100)*30);
			salarioNovo = (salarioAtual + reajusteSalario);
			System.out.println("Salário antigo : " + salarioAtual);
			System.out.println("Reajuste do salário : " + reajusteSalario);
			System.out.println("Salario novo : " + salarioNovo);
			break;
		
			default:
			 System.out.println("Código do salário inválido. Tente Novamente.");
		}

	}

}
