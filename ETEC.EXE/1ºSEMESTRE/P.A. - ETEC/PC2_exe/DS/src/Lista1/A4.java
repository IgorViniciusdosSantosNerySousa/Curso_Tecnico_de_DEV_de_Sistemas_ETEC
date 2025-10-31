package Lista1;

import java.util.Scanner;

public class A4 {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		int r, a, v;
		
		System.out.println("Digite o raio da lata:");
		r = leia.nextInt();
		
		System.out.println("Digite a altura da lata:");
		a = leia.nextInt();	
		
		v = (int)(3.14159 * r * a);
		
		System.out.println("O valor do volume da lata é de: " + v);
	
	}

}
