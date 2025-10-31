package Lista2;

import java.util.Scanner;

public class i1 {

	public static void main(String[] args) {
		
		
		Scanner leia = new Scanner(System.in);
		int contador, resultado;
		
		for (contador=1; contador<=100; contador++) {			
			System.out.println(" " + contador);
			
		}//fim FOR
		
		System.out.println("Ordem Crescente.");
		System.out.println("==================================");
		System.out.println("Ordem Decrescente.");
		
		for (contador=100; contador>=1; contador--) {
			System.out.println(" " + contador);
			
		}//fim FOR
		
	}

}