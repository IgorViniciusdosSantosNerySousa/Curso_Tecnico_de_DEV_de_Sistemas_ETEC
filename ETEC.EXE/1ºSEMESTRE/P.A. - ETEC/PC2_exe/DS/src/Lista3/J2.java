package Lista3;

import java.util.Scanner;

public class J2 {

	public static void main(String[] args) {

		int limite=0;
		int numb =0;
		
		
	
		
		Scanner read=new Scanner (System.in);

		System.out.println("Insira o numero desejado : ");
		limite = read.nextInt();
		
		while(numb <=limite) {
			
		System.out.println(numb);
		numb++;
	
		
		if((numb % 2)== 0){
			System.out.println("numeros impar");
			}else {
			System.out.println("numeros par");
			}
}
		}
	}