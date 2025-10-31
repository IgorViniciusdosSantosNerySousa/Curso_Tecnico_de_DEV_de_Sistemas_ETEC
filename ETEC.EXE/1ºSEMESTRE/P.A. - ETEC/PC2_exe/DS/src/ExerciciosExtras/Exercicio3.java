package ExerciciosExtras;

import java.util.Scanner;

public class Exercicio3 {

	public static void main(String[] args) {
		

		Scanner leia=new Scanner (System.in);
		int hrTrab, slporhora, hrextra, sltotal, slmes
		;
		
		System.out.println("Digite a quantidade do salário por hora: ");
		slporhora = leia.nextInt();
		
		System.out.println("Digite a quantidade de horas trabalhadas: ");
		hrTrab = leia.nextInt();
		
		slmes = slporhora*40;
        
	    if(hrTrab>40) {
	    	hrTrab = (hrTrab - 40);
	    	sltotal = (int) ((slporhora*0.5)+slporhora+slmes); 
	    }else {
	    	sltotal = slmes;
	    	System.out.println(+ slmes);	    	
	    }
    
	    System.out.println("O salario total do funcionário é de: "+ sltotal);
 		
	}

}
