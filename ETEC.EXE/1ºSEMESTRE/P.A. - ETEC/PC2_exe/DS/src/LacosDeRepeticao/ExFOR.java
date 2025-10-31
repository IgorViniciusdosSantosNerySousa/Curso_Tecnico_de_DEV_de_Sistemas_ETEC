package LacosDeRepeticao;

import java.util.Scanner;

public class ExFOR {

	public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in);
		int contador;
		double mediaEscolar;
		int totAprovados=0;
		int totReprovados=0;
		
		for(contador=1; contador<=10; contador++) {
			
			System.out.println("Digite a média escolar do aluno: ");
			mediaEscolar=sc.nextDouble();
			
			if(mediaEscolar>=7 ) {				
				totAprovados=totAprovados+1;
			}else {
				totReprovados=totReprovados+1;
			}
			
			
		}//fim for
		
		System.out.println("Total de Aprovados: " + totAprovados);
		System.out.println("Total de Reprovados: " + totReprovados);
		
	}//fim metodo

}//fim classe
