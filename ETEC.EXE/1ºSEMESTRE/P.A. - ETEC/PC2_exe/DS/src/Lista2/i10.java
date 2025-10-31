package Lista2;

import java.util.Scanner;

public class i10 {
    public static void main(String[] args) {
        Scanner leia = new Scanner(System.in);

        System.out.println("Digite a quantidade de numeros desejada: ");
        int numero = leia.nextInt();

        int[] numeros = new int[numero];

        for (int qtd = 0; qtd < numero; qtd++) {
            System.out.println("Digite o número " + (qtd+1) + ":");
            numeros[qtd] = leia.nextInt();
        }

        int maior = numeros[0];
        int menor = numeros[0];

        for (int qtd = 1; qtd < numero; qtd++) {
            if (numeros[qtd] > maior) {
                maior = numeros[qtd];
            }
            if (numeros[qtd] < menor) {
                menor = numeros[qtd];
            }
        }

        System.out.println("O maior número é: " + maior);
        System.out.println("O menor número é: " + menor);
    }
}