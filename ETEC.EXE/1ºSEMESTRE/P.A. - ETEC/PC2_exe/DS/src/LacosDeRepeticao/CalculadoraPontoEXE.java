package LacosDeRepeticao;

import java.util.Scanner;

public class CalculadoraPontoEXE {

	public static void main(String[] args) {
		
		Scanner sc=new Scanner (System.in);
		int contador;
		int resultado;
			
		for (contador=0; contador<=10; contador++) {
			resultado = 2 * contador;
			System.out.println("2 x " + contador + "=" + resultado);
			
		}
	}

}