package LacosDeRepeticao;

import java.util.Scanner;

public class exercicioIdadeFor {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		
		int idade, totalPessoas, maiorIdade=0, menorIdade=0; 
		double media;
		
		for (totalPessoas=1; totalPessoas<=12; totalPessoas++) {
			
			System.out.println("Digite sua idade: ");
			idade=leia.nextInt();
			
			if (idade>=0 && idade<12) {
				menorIdade++;
			} else if (idade>= 12 && idade<18) {
				menorIdade++;
			} else if (idade>= 18 && idade<60) {
				maiorIdade++;
			} else {
				maiorIdade++;
			}
			
			
			
				
		}
		
		System.out.println("Total de Pessoas Maiores de Idade: " + maiorIdade);
		System.out.println("Total de Pessoas Menores de Idade: " + menorIdade);
	}

}
