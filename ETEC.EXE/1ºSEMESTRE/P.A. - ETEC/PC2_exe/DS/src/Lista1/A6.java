package Lista1;

import java.util.Scanner;

public class A6 {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		int vh, ht, pd, sb, sl, td;
		
		System.out.println("Digite a quantidade de horas trabalhadas: ");
		ht = leia.nextInt();
		
		System.out.println("Digite o valor p/ hora: ");
		vh = leia.nextInt();
		
		System.out.println("Digite o percentual de desconto: ");
		pd = leia.nextInt();
		
		sb = (vh * ht);
		td = (pd/100*sb);
		sl = (sb - td);
		
		System.out.println("O valor do salário bruto é de: " + sb);
		System.out.println("O valor total do desconto é de: " + td);
		System.out.println("O valor do salário líquido é de: " + sl);
		
	}

}
