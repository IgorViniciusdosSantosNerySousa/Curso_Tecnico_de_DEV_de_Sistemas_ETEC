package LacosDeRepeticao;

import java.util.Scanner;

public class exWhile {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		double n1, n2, media;
		String resp="SIM";
		int aluno=1, qtdAprov=0, qtdReprov=0;
		
		/*while(contador<=10000000) {//enquanto a condição for verdadeira, ele irá executar.
			//bloco de comandos
			System.out.println("Mariana conta: " + contador);
			contador++;
		}
		
		System.out.println("Mariana conta fora: " + contador);*/
		
		
		
		while (resp.equalsIgnoreCase("SIM")) {
			System.out.println("Digite a 1º nota do " + aluno + "º Aluno: ");
			n1=leia.nextDouble();
			System.out.println("Digite a 2º nota do " + aluno + "º Aluno: ");
			n2=leia.nextDouble();
			media=((n1+n2)/2);
			
			if(media>=5) {
				System.out.println("|================================================|");
				System.out.println("|VAZA MLK, NINGUEM TI QUÉ MAIS AQUI MISERA...    |");
				qtdAprov++;
			} else {
				System.out.println("|================================================|");
				System.out.println("|VAI REFAZE OTARO KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK|");
				qtdReprov++;
			}
			System.out.println("|------------------------------------------------|");
			System.out.println("|"+ aluno + "º Aluno obteve a média de: " + media + "                |");
			System.out.println("|------------------------------------------------|");
			System.out.println("|Deseja continuar? | SIM ou NÃO:                 |");
			System.out.println("|================================================|");
			resp=leia.next();
			aluno++;
		}
		System.out.println("|================================================|");
		System.out.println("|Alunos Aprovados: " + qtdAprov + ".                            |");
		System.out.println("|------------------------------------------------|");
		System.out.println("|Alunos Reprovados: " + qtdReprov + ".                           |");
		System.out.println("|------------------------------------------------|");
		System.out.println("|Total Geral de Alunos: " + (aluno-1) + ".                       |");
		System.out.println("|================================================|");
	}

}
