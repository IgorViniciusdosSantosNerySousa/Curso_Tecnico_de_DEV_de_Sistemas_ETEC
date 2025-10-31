package Lista1;

import java.util.Scanner;

public class A2 {

	public static void main(String[] args) {
//faça um programa para receber a entrada
//de dois valores (lado1, lado2) e calcular
//a area (area=lado1*lado2)
		
		//instanciar o objeto do tipo scanner
		Scanner leia=new Scanner (System.in);
		
		double lado1, lado2,area;
		
		//entrada dos dados
		System.out.println("Digite o valor do lado 1 :");
		lado1 = leia.nextDouble();
		
		System.out.println("Digite o valor do lado 2 :");
		lado2 = leia.nextDouble();
		
		//processamento
		area = lado1*lado2;
        
		//saida dos dados
		System.out.println("O valor da area = " + area);
		

	}

}
