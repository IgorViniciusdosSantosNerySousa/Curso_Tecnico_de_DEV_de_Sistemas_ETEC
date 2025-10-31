package Lista4;

public class K1 {

	public static void main(String[] args) {
		
		String resp = "SIM";
		int numero = 0;
		
		
		do {
			System.out.println("---------------");
			System.out.println("Ordem crescente");
			System.out.println(+numero);
			numero++;
		}while(numero<=100);
		
	do {	
	
			System.out.println("-----------------");
			System.out.println("Ordem Decrescente");
			System.out.println(numero -1);
			numero--;
		}	while(numero>0);
}
}