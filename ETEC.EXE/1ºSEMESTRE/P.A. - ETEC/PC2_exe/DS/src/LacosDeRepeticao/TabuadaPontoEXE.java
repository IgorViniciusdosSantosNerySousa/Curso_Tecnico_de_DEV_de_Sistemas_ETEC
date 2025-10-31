package LacosDeRepeticao;

import java.util.Scanner;

public class TabuadaPontoEXE {

	public static void main(String[] args) {
		
		Scanner leia = new Scanner(System.in);
		int contador;
		int nTabuada; //qual tabuada o usuario quer calcular
		int resultado;
		
		System.out.println("Digite a tabuada desejada: ");
		nTabuada=leia.nextInt();
		
		for (contador=0; contador<=1000000000; contador++) {
			resultado = nTabuada*contador;
			System.out.println(nTabuada + " x " + contador + " = " + resultado);
		}
	}

}
