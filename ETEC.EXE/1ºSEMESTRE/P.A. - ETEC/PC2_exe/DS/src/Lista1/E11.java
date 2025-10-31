package Lista1;

import java.util.Scanner;

public class E11 {

	public static void main(String[] args) {
		Scanner leia=new Scanner (System.in);
		double salarioFixo, valorVendas, valorRecebidoCarroVendido, calcPercentual;
		int totCarros;
		double totRecebidosVeiculosVendidos, salarioFinalDoVendedor;
		//entrada de dados
		System.out.println("Digite o salario fixo do vendedor : ");
		salarioFixo = leia.nextDouble();
		System.out.println("Digite o valor total das vendas : ");
		valorVendas =leia.nextDouble();
		//calcular 5% do valor das vendas
		calcPercentual = valorVendas*0.05;
		System.out.println("Informe o total de carros vendidos : ");
		totCarros = leia.nextInt();
		System.out.println("Digite o valor recebido por carro vendido :");
		valorRecebidoCarroVendido = leia.nextDouble();
		totRecebidosVeiculosVendidos = totCarros * valorRecebidoCarroVendido;
		salarioFinalDoVendedor = totRecebidosVeiculosVendidos + calcPercentual + salarioFixo;
        System.out.println ("O salario final do vendedor = " + salarioFinalDoVendedor);		
	}

}
