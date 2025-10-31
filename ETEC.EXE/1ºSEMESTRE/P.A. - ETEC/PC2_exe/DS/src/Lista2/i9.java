package Lista2;

import java.util.Scanner;

public class i9 {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		int senhorAneis=0, matrix=0, votos=0, voto=0, empate=0;
		
		for (votos=1; votos<=20; votos++) {
		
		System.out.println("Em qual filme você vai votar? 1- Matrix| 2-Senhor dos Anéis: " + voto);
		voto=leia.nextInt();
		
		if (voto==1) {
			senhorAneis++;
			
		}else if (voto==2) {
			matrix++;
		
		}else {
			System.out.println("Número de votação inválida. Tente Novamente.");
		}
						
	}//fim for
		if (senhorAneis>matrix) {
			System.out.println("O Filme 'Senhor dos Anéis é o vencedor.");
		} else if (matrix>senhorAneis) {
			System.out.println("O Filme 'Matrix' é o vencedor.");
		} else {
			System.out.println("EMPATE...");
		}
		
		System.out.println("Número de votos para o filme Senhor dos anéis: " + senhorAneis);
		System.out.println("Número de votos para o filme Senhor dos anéis: " + matrix);
  }
}







