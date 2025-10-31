package ExerciciosExtras;

import java.util.Scanner;

public class Exercicio5 {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		int qtd_atual, qtd_max, qtd_min, qtd_media;
		
		System.out.println("Digite a quantidade atual em estoque: ");
		qtd_atual = leia.nextInt();
		
		System.out.println("Digite a quantidade máxima em estoque: ");
		qtd_max = leia.nextInt();
		
		System.out.println("Digite a quantidade mínima em estoque: ");
		qtd_min = leia.nextInt();
		
		qtd_media = ((qtd_max + qtd_min)/2);
		
		if(qtd_atual>=qtd_media) {	
			System.out.println("Não efetuar a compra.");
		}else {
			System.out.println("Efetuar a Compra.");
		}

   }
}