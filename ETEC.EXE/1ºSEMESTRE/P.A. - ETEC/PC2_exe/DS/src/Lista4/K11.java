package Lista4;

import java.util.Scanner;

public class K11 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		int contador=0;
		int numero=0;
		int fatorial = 1;
		
		System.out.println("Digite o número");
		numero = sc.nextInt();
		if(numero<0) {
			System.out.println("Valor inválido.");
		}
		if(numero==0) {
			fatorial = numero+1;
		}
		for(contador=1;contador<=numero;contador++) {
			System.out.println("contador" + contador);
			fatorial = fatorial * contador;
		}
	
	}
}
