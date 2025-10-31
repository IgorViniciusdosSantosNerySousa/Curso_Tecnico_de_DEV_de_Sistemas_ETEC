package Lista2;

import java.util.Scanner;

public class i5 {

	public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in);
		int n1, n2, n3, n4, aluno;
		int totAprovados=0;
		int totReprovados=0;
		double media, mediaEscolar;
		
		for(aluno=1; aluno<=10; aluno++) {
			System.out.println("Escreva a nota do 1ºB do aluno: ");
			n1=sc.nextInt();
			System.out.println("Escreva a nota do 2ºB do aluno: ");
			n2=sc.nextInt();
			System.out.println("Escreva a nota do 3ºB do aluno: ");
			n3=sc.nextInt();
			System.out.println("Escreva a nota do 4ºB do aluno: ");
			n4=sc.nextInt();
		
			media=(n1+n2+n3+n4)/4;
			
			System.out.println("A média deste aluno é de: " + media);

		}
	}

}
