package Lista1;

import java.util.Scanner;

public class A10 {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		int a, b, c; 
		
		System.out.println("Digite um valor para A: ");
		a = leia.nextInt();
		
		System.out.println("Digite um valor para B: ");
		b = leia.nextInt();
		
		c = b;
		b = a;
		a = c;
		
		System.out.println("O valor de A é de: " + a);
		System.out.println("O valor de B é de: " + b);
		
	}

}
