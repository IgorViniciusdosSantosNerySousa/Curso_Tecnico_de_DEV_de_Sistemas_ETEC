package Lista4;

import java.util.Scanner;

public class K3 {

	public static void main(String[] args) {
		
		Scanner sc= new Scanner(System.in);
		String resp = "SIM";
		int totVotos = 0;
		int opnEstudantes = 0; 
		double percentP = 0;
		double percentE = 0;
		String sexo;
		int opnS = 0;
		int opnN = 0;
		int homensC = 0;
		int homensA = 0;
		int homensM = 0;
		int homensP = 0;
		int mulherC = 0;
		int mulherA = 0;
		int mulherM = 0;
		int mulherP = 0;
		int totMedicina = 0;
		do {
			
			System.out.println("---------------");
			System.out.println("insira seu sexo");
			System.out.println(" M - Masculino");
			System.out.println(" F - Feminino");
			sexo = sc.next();
			System.out.println("---------------");
			
			System.out.println("---------------------------------");
			System.out.println("Qual curso você deseja ingressar?");
			System.out.println("1 - Engenharia da Computação");
			System.out.println("2 - Administração ");
			System.out.println("3 - Medicina");
			System.out.println("4 - Psicologia");
			System.out.println("---------------------------------");
			opnEstudantes = sc.nextInt();
			
			switch(opnEstudantes) {
			
			case 1 :
				
				if(sexo.equalsIgnoreCase("M")){
				homensC++;		
				}else if(sexo.equalsIgnoreCase("F")) {
			    mulherC++;
			}break;
			
	        case 2:
				
				if(sexo.equalsIgnoreCase("M")){
				homensA++;		
				}else if(sexo.equalsIgnoreCase("F")) {
			    mulherA++;
			}break;
			
            case 3:
				
				if(sexo.equalsIgnoreCase("M")){
				homensM++;		
				}else if(sexo.equalsIgnoreCase("F")) {
			    mulherM++;
			}break;
			
            case 4:
			
             if(sexo.equalsIgnoreCase("M")){
    		 homensP++;		
    	     }else if(sexo.equalsIgnoreCase("F")) {
    		 mulherP++;
    		}break;	
			
		}
	
			System.out.println("Deseja inserir um novo voto? (Sim/Não)"); 
			resp = sc.next();	
	
		}while(resp.equalsIgnoreCase("Sim"));

		totVotos = (homensP+mulherP+homensM+mulherM+homensA+mulherA+homensC+mulherC);
		  percentP =  (mulherP * 100) / (totVotos);
	      percentE =  (homensC * 100) / (totVotos);
		totMedicina = (homensM + mulherM);
		
		System.out.println("Percentual de homens que pretendem cursar Engenharia da Computação : " + percentE + "%");
		System.out.println("Percentual de mulheres que pretendem cursar Psicologia : " + percentP + "%");
		System.out.println("Total de pessoas que pretendem cursar Medicina : " + totMedicina);
		System.out.println("Total de mulheres que pretendem cursar Administção : " + mulherA);
		
		
		
}
}