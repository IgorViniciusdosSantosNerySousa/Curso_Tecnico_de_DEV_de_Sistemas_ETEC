package ExerciciosExtras;

import java.util.Scanner;

public class Exercicio2 {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		int n1, n2, n3, n4, media;
		
		System.out.println("Digite a 1º nota do aluno: ");
		n1 = leia.nextInt();
		
		System.out.println("Digite a 2º nota do aluno: ");
		n2 = leia.nextInt();
		
		System.out.println("Digite a 3º nota do aluno: ");
		n3 = leia.nextInt();
		
		System.out.println("Digite a 4º nota do aluno: ");
		n4= leia.nextInt();
		
		media = (n1+n2+n3+n4)/4;
		
		System.out.println("A media do aluno é de: " + media);
		
	    if(media>=7) {
	       System.out.println("Aprovado");
	    }else {
	    	System.out.println("Reprovado");
	    	
	    }
	}

}
