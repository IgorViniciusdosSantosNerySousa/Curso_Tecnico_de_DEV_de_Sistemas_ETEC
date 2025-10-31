package Lista2;

import java.util.Scanner;

public class i4 {

	public static void main(String[] args) {
		
		Scanner leia = new Scanner(System.in);
		int contador;
		int nTabuada; 
		int resultado;
		
		System.out.println("Digite a tabuada desejada: ");
		nTabuada=leia.nextInt();
		
		for (contador=0; contador<=10; contador++) {
			resultado = nTabuada*contador;
			System.out.println(nTabuada + " x " + contador + " = " + resultado);
		}
	}

}
