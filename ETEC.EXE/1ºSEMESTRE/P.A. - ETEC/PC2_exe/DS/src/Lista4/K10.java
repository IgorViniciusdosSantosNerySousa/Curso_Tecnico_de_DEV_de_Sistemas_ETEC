package Lista4;

public class K10 {

	public static void main(String[] args) {
		 int somaImpares = 0;
	        int multiplicacaoPares = 1;

	        for (int i = 0; i <= 20; i++) {
	            if (i % 2!= 0) { 
	                somaImpares += i;
	            } else {
	                multiplicacaoPares *= i;
	            }
	        }

	        System.out.println("Soma dos números ímpares de 0 à 20: " + somaImpares);
	        System.out.println("Multiplicação dos números pares de 0 à 20: " + multiplicacaoPares);

	}

}
