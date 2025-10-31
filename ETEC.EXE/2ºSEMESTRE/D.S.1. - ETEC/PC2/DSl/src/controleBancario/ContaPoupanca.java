package controleBancario;

import javax.swing.JOptionPane;

public class ContaPoupanca extends Conta{
	private double reajusteMensal;
	
	// construtor
	public ContaPoupanca() {
		super(0);
		this.reajusteMensal = 0;
	}
	
	public ContaPoupanca(double saldo, double reajusteMensal) {
		super(saldo);
		this.reajusteMensal = reajusteMensal;
	}
	
	// método atualizar
	public void atualizarSaldo(double reajuste) throws MovimentoNegativo, LimiteExcedido{

			if(reajuste<0) // se o valor for menor ou igual a 0
				throw new MovimentoNegativo();

			
			if(super.getSaldo()>0) {
				reajuste = reajuste/100;
				reajusteMensal = reajuste;
				
				
				super.setSaldo(super.getSaldo()+(super.getSaldo()*this.reajusteMensal));
			}
	}
	
	// método detalhes
	public String toString(){
		return "Saldo atual: "+ this.getSaldo()+"\nReajuste mensal: "+(this.getReajusteMensal())*100+"%";
	}
	
	// get e set
	public double getReajusteMensal() {
		return reajusteMensal;
	}

	public void setReajusteMensal(double reajusteMensal) {
		this.reajusteMensal = reajusteMensal;
	}
}
