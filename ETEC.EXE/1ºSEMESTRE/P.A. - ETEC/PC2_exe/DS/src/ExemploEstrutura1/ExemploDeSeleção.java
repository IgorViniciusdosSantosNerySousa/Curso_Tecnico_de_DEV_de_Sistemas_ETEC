package ExemploEstrutura1;

import java.util.Scanner;

public class ExemploDeSeleção {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc=new Scanner (System.in);
		
		int idade;
		
		System.out.println("Escreva a idade do meliante : ");
		idade = sc.nextInt();
		
		if (idade>=18) {
			System.out.println("Di Maió");
			System.out.println("Ganha convite pra PlayBoy");
		}else {
			System.out.println("Di Menó");
			System.out.println("Ganha ingresso pra exposição do Mundo Bita");
		}
	}

}
