package Lista2;

import java.util.Scanner;

public class i13 {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		int  total, numPar, numImpar, total1;
		
		System.out.println("APerte 0, para iniciar o calculo. ");
		total=leia.nextInt();		
		for (numImpar=1; numImpar<=20; numImpar++) {
			
			if (numImpar % 2 != 0) {
				total += numImpar;
				System.out.println(total);
			}
			
		}
		
		total1=leia.nextInt();
		for (numPar=0; numPar<=20; numPar++) {
			
			if (numPar % 2 == 0)
			total1 *=numPar;
			System.out.println(total1);
		}
	
	
		
		
		
		
		
		
		
		
		
	}

}
