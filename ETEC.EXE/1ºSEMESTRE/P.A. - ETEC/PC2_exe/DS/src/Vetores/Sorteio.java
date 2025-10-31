package Vetores;

import java.util.Arrays;
import java.util.Random;

public class Sorteio {

	public static void main(String[] args) {
	        int[] dezenas = gerarDezenasAleatorias(6);
	        System.out.println("Números Sortidos: " + Arrays.toString(dezenas));

	        Arrays.sort(dezenas);
	        System.out.println("Em Ordem Crescente: " + Arrays.toString(dezenas));
	    }

	public static int[] gerarDezenasAleatorias(int quantidade) {
	        int[] dezenas = new int[quantidade];
	        Random random = new Random();

	        for (int i = 0; i < quantidade; i++) {
	            int dezena;
	            do {
	                dezena = random.nextInt(60) + 1;
	            } while (contemDezena(dezenas, dezena));

	            dezenas[i] = dezena;
	        }

	        return dezenas;
	    }

	    public static boolean contemDezena(int[] dezenas, int dezena) {
	        for (int valor : dezenas) {
	            if (valor == dezena) {
	                return true;
	            }
	        }
	        return false;
	    }
}

