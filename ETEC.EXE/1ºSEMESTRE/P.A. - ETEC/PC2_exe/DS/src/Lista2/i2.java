package Lista2;

import java.util.Scanner;

public class i2 {

	public static void main(String[] args) {
		
		Scanner leia = new Scanner (System.in);
		char A = 'a';
		char Z = 'z';
		
		for (char letra=A; letra<=Z; letra++) {			
			System.out.println(letra + "");
			
		}//fim FOR
		
		System.out.println("Ordem Crescente.");
		System.out.println("==================================");
		System.out.println("Ordem Decrescente.");
		
		for (char letra=Z; letra>=A; letra--) {
			System.out.println(letra + "");
			
		}//fim FOR
		
	}

}
