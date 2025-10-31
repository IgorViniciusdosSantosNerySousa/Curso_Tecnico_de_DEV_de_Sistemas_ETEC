package Lista1;

import java.util.Scanner;

public class A5 {

	public static void main(String[] args) {
		Scanner leia=new Scanner (System.in);
		double preco, desconto, preco_vista;
		//entrada do salario bruto
		System.out.println("Digite o preco bruto : ");
		preco=leia.nextDouble();
        //calculo do percentual de desconto
	    desconto = (preco/100)*10;
	    //calcular o preco do produto a vista
	    preco_vista = preco-desconto;
	    //apresentar o preco bruto
	    System.out.println ("O preco bruto = " + preco);
	    //preco a vista
	    System.out.println ("O preco a vista = " + preco_vista);
	    //preco do desconto
	    System.out.println ("O preco do desconto = " + desconto);
	    
	}

}
