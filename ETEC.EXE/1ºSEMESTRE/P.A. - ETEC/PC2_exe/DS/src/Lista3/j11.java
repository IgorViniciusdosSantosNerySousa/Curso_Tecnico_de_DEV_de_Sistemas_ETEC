package Lista3;

import java.util.Scanner;

public class j11 {

	public static void main(String[] args) {
		
		 Scanner scanner = new Scanner(System.in);

	        System.out.println("Digite um número para calcular o fatorial:");
	        int numero = scanner.nextInt();

	        long fatorial = calcularFatorial(numero);

	        System.out.println("O fatorial de " + numero + " é: " + fatorial);

	        scanner.close();
	    }

	    private static long calcularFatorial(int numero) {
	        if (numero < 0) {
	            return -1;
	        } else if (numero == 0) {
	            return 1;
	        } else {
	            long resultado = 1;
	            for (int i = 1; i <= numero; i++) {
	                resultado *= i;
	            }
	            return resultado;
	        }
	    }
	
	}


