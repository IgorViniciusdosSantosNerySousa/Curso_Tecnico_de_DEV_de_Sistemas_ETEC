package Lista2;

import java.util.Scanner;

public class i3 {

	public static void main(String[] args) {
		
		Scanner leia = new Scanner(System.in);
		int contador;
		int resultado;
		
		for (contador=0; contador<=10; contador++) {
			resultado=contador*5;
			System.out.println("5 x " + contador + " = " + resultado);
		}
	}

}
