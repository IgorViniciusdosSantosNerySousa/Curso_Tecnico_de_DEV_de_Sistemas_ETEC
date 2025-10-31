package Lista2;

import java.util.Scanner;

public class i7 {

	public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in);
		int contador, menor18=0, maior18=0, idade=0;
		double media;
		
		
		
		for(contador=1; contador<=25; contador++) {
			
			System.out.println("Digite a idade do aluno: ");
			idade=sc.nextInt();
			
			if(idade<=17 ) {				
				menor18++;
			}else {
				maior18++;
			}
	
		}//fim for
		
		
		media=(menor18+maior18)/2;
		System.out.println("A média de alunos de maiores e menores de 18 anos é de: " + media);
		System.out.println("Total de Alunos menores que 18 anos: " + menor18);
		System.out.println("Total de ALunos maiores que 18 anos: " + maior18);

	}

}
