package INSS;

import java.util.Scanner;

public class IR {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		int salario, imposto;
		
		System.out.println("Digite o seu salário: ");
		salario = leia.nextInt();
		
		if(salario>=2.259) {
			System.out.println("Não paga imposto.");
		} else if (salario>=2559 && salario<=2826) {
			imposto = (int) (salario*(7.5/100));
			System.out.println("A dedução de IR é de: " + imposto);
		} else if (salario>2826 && salario<=3751) {
			imposto = (int) (salario*(15/100));
			System.out.println("A dedução de IR é de: " + imposto);
		} else if (salario>3751 && salario<=4664) {
			imposto = (int) (salario*(22/100));
			System.out.println("A dedução de IR é de: " + imposto);
		} else {
			imposto = (int) (salario*(27/100));
			System.out.println("A dedução de IR é de: " + imposto);
		}
	}

}
	