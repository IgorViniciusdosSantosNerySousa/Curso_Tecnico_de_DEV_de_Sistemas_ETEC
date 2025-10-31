package Lista1;

import java.util.Scanner;

public class A7 {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		int t, d, v, lts;
		
		System.out.println("Digite o tempo da viagem: ");
		t = leia.nextInt();
		
		System.out.println("Digite a velocidade do carro: ");
		v = leia.nextInt();
		
		System.out.println("Digite a distancia percorrida: ");
		d = leia.nextInt();
		
		lts = (d/12);
		
		System.out.println("A distancia percorrida foi de: " + d);
		System.out.println("O tempo gasto foi de: " + t);
		System.out.println("A velocidade do carro é de: " + v);
		System.out.println("A qauntidade de litros usada foi de: " + lts);
	}

}
