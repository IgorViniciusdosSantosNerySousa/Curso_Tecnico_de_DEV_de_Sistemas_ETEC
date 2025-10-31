package Lista1;

import java.util.Scanner;

public class A3 {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		int c, f, conv;
		
		System.out.println("Digite o valor do Centigrado :");
		c = leia.nextInt();
		
		conv = (f = (9*c+160)/5);
		
		System.out.println("A conversão em Fahrenheit é de: " + conv);		

	}

}
