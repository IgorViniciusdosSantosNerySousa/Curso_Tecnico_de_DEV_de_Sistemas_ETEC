package Lista2;

import java.util.Scanner;

public class i15 {

public static void main(String[] args) {
        
		Scanner scanner = new Scanner(System.in);
		
        int base, expoente;
        double resultado;
        
        
		System.out.println("Digite a base:");
        base = scanner.nextInt();
        
        System.out.println("Digite o expoente:");
        expoente = scanner.nextInt();

        resultado = Math.pow(base , expoente);

        System.out.printf("O resultado da base elevado ao expoente é de: " + resultado);
    }
}
