package Lista4;

import java.util.Scanner;

public class K8 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
	Scanner sc = new Scanner(System.in);
		
	 String resp;
     int curso;
     int votos[] = new int[4]; 
     int total = 0;
     double percentMedicina = 0;
     double percentPsicologia = 0;
     double percentEngenharia = 0;

     // Cursos: 1 = Medicina, 2 = Psicologia, 3 = Engenharia Elétrica

     do {
         System.out.println("------------------------------------------------------------------------------------------------");
         System.out.println("--------------------------------------------CURSOS----------------------------------------------");
         System.out.println("------------------------------------------------------------------------------------------------");
         System.out.println("1 - Medicina");
         System.out.println("2 - Psicologia");
         System.out.println("3 - Engenharia Elétrica");
         curso = sc.nextInt();

         if (curso >= 1 && curso <= 3) {
             votos[curso] = votos[curso] + 1;
         } else {
             System.out.println("Curso não reconhecido");
         }

         System.out.println("Deseja responder novamente? (S/N)");
         resp = sc.next();
     } while (resp.equalsIgnoreCase("S"));

     total = votos[1] + votos[2] + votos[3];

     if (total > 0) {
         percentMedicina = (votos[1] * 100.0) / total;
         percentPsicologia = (votos[2] * 100.0) / total;
         percentEngenharia = (votos[3] * 100.0) / total;

         System.out.println("RESULTADOS DA PESQUISA:");
         System.out.println("Medicina: " + votos[1] + " votos (" + percentMedicina + "%)");
         System.out.println("Psicologia: " + votos[2] + " votos (" + percentPsicologia + "%)");
         System.out.println("Engenharia Elétrica: " + votos[3] + " votos (" + percentEngenharia + "%)");
         System.out.println("Total de votos: " + total);
         System.out.println("-----------------------------");

         if (votos[1] > votos[2] && votos[1] > votos[3]) {
             System.out.println("1º Lugar: Medicina");
             if (votos[2] > votos[3]) {
                 System.out.println("2º Lugar: Psicologia");
                 System.out.println("3º Lugar: Engenharia Elétrica");
             } else if (votos[2] < votos[3]) {
                 System.out.println("2º Lugar: Engenharia Elétrica");
                 System.out.println("3º Lugar: Psicologia");
             } else {
                 System.out.println("2º Lugar: Psicologia e Engenharia Elétrica (Empate)");
             }
         } else if (votos[2] > votos[1] && votos[2] > votos[3]) {
             System.out.println("1º Lugar: Psicologia");
             if (votos[1] > votos[3]) {
                 System.out.println("2º Lugar: Medicina");
                 System.out.println("3º Lugar: Engenharia Elétrica");
             } else if (votos[1] < votos[3]) {
                 System.out.println("2º Lugar: Engenharia Elétrica");
                 System.out.println("3º Lugar: Medicina");
             } else {
                 System.out.println("2º Lugar: Medicina e Engenharia Elétrica (Empate)");
             }
         } else if (votos[3] > votos[1] && votos[3] > votos[2]) {
             System.out.println("1º Lugar: Engenharia Elétrica");
             if (votos[1] > votos[2]) {
                 System.out.println("2º Lugar: Medicina");
                 System.out.println("3º Lugar: Psicologia");
             } else if (votos[1] < votos[2]) {
                 System.out.println("2º Lugar: Psicologia");
                 System.out.println("3º Lugar: Medicina");
             } else {
                 System.out.println("2º Lugar: Medicina e Psicologia (Empate)");
             }
         } else if (votos[1] == votos[2] && votos[1] == votos[3]) {
             System.out.println("Empate Triplo: Medicina, Psicologia e Engenharia Elétrica");
         } else if (votos[1] == votos[2]) {
             System.out.println("Empate: Medicina e Psicologia");
             if (votos[3] > votos[1]) {
                 System.out.println("1º Lugar: Engenharia Elétrica");
                 System.out.println("2º Lugar: Medicina e Psicologia (Empate)");
             } else {
                 System.out.println("1º Lugar: Medicina e Psicologia (Empate)");
                 System.out.println("3º Lugar: Engenharia Elétrica");
             }
         } else if (votos[1] == votos[3]) {
             System.out.println("Empate: Medicina e Engenharia Elétrica");
             if (votos[2] > votos[1]) {
                 System.out.println("1º Lugar: Psicologia");
                 System.out.println("2º Lugar: Medicina e Engenharia Elétrica (Empate)");
             } else {
                 System.out.println("1º Lugar: Medicina e Engenharia Elétrica (Empate)");
                 System.out.println("3º Lugar: Psicologia");
             }
         } else if (votos[2] == votos[3]) {
             System.out.println("Empate: Psicologia e Engenharia Elétrica");
             if (votos[1] > votos[2]) {
                 System.out.println("1º Lugar: Medicina");
                 System.out.println("2º Lugar: Psicologia e Engenharia Elétrica (Empate)");
             } else {
                 System.out.println("1º Lugar: Psicologia e Engenharia Elétrica (Empate)");
                 System.out.println("3º Lugar: Medicina");
             }
         }
     } else {
         System.out.println("Nenhum voto registrado.");
     }


		
	}

}
