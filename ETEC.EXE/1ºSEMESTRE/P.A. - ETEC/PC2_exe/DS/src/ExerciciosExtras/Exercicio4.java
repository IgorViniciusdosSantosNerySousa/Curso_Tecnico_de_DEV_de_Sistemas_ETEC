package ExerciciosExtras;

import java.util.Scanner;

public class Exercicio4 {

	public static void main(String[] args) {
		
		Scanner leia=new Scanner (System.in);
		int numContaCliente, saldo, debito, credito, saldoAtual;
		
		System.out.println("Digite o numero da conta do seu cliente: ");
		numContaCliente = leia.nextInt();
		
		System.out.println("Digite o saldo do seu cliente: ");
		saldo = leia.nextInt();
		
		System.out.println("Digite o debito do seu cliente: ");
		debito = leia.nextInt();
		
		System.out.println("Digite o credito do seu cliente: ");
		credito = leia.nextInt();
		
		saldoAtual = (saldo - debito + credito);
		
		System.out.println("Seu saldo atual é de: R$" + saldoAtual);
		
		if(saldoAtual>=0) {
			System.out.println("Saldo Positivo.");			
		}else {
			System.out.println("Saldo Negativo.");
		}

	}

}
