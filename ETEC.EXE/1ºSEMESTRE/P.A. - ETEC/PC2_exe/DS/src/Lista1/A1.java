package Lista1;

import java.util.Scanner;

public class A1 {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		int n1,n2,n3,n4,media;
		
		System.out.println("Digite o 1º valor : ");
		n1 = leia.nextInt();
		
		System.out.println("Digite o 2º valor : ");
		n2 = leia.nextInt();
		
		System.out.println("Digite o 3º valor : ");
		n3 = leia.nextInt();
		
		System.out.println("Digite o 4º valor : ");
		n4 = leia.nextInt();
		
		media = (n1 + n2 + n3 + n4)/4;
		
		System.out.println("A média desses valores é de :" + media);
		
		
	}

}
