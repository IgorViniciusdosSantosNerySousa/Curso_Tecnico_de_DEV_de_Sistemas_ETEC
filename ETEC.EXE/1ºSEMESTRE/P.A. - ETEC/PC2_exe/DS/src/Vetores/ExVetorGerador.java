package Vetores;

import java.util.Random;
import java.util.Scanner;

public class ExVetorGerador {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		Random gerador = new Random();
		int sorteio[] = new int[6];
		
		
		int nota1, nota2, nota3, nota4;
		int notas[] = new int[4];
		for (int i = 0; i < notas.length; i++) {
			System.out.println("Digite a " + (i+1) + "ª nota:");
			notas[i] = sc.nextInt();
		}
		for (int i = 0; i < notas.length; i++) {
			System.out.print(notas[i] + " ");
		}
		
		for (int i = 0; i < sorteio.length; i++) {
			sorteio[i] = gerador.nextInt(61);
		}
		
		for (int i = 0; i < sorteio.length; i++) {
			System.out.print(sorteio[i] + " ");
		}
		
		
		
		
		
		
		
		
		
	}

}