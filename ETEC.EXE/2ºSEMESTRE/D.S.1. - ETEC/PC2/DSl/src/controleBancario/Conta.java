package controleBancario;

import javax.swing.JOptionPane;

public class Conta {
	private double saldo;
	
	// construtor
	public Conta() {
		this(0);
	}
	
	public Conta(double saldo) {
		this.saldo = saldo;
	}
	
	// método depositar
	public void depositar(double valor) throws MovimentoNegativo{
		
		if(valor <= 0) {
			throw new MovimentoNegativo();
		}else {
			this.setSaldo(getSaldo()+valor);
		}
		
	}
	// método sacar
	public void sacar(double valor) throws MovimentoNegativo, LimiteExcedido {
		
			if(valor>this.saldo) {// se o valor a sacar for mais alto que o saldo
				throw new LimiteExcedido();
			}else if(valor<=0) {// se o valor a sacar for negativo ou 0
				throw new MovimentoNegativo();
			}else {
				this.setSaldo(this.saldo-valor);
			}
		
	}
	// método atualizar saldo
	public void atualizarSaldo() {
		if(this.saldo<=0) {
			this.saldo = this.saldo+(this.saldo*0.08);
		}
	}
	
	// getters e setters
	public double getSaldo() {
		return saldo;
	}
	public void setSaldo(double saldo) {
		this.saldo = saldo;
	}
	
	
	
}
