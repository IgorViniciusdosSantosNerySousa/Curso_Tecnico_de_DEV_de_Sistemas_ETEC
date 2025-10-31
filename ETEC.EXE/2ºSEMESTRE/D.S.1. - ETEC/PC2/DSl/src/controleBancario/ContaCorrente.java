package controleBancario;

import javax.swing.JOptionPane;

public class ContaCorrente extends Conta{
	private double limiteEspecial;
	
	// construtor
		public ContaCorrente() {
			super(0);
			this.limiteEspecial = 0;
		}
		
		public ContaCorrente(double saldo, double limiteEspecial) {
			super(saldo);
			this.limiteEspecial = limiteEspecial;
		}
	
	// método sacar
	public void sacar(double valor) throws MovimentoNegativo, LimiteExcedido {
		
			if(valor<=0) throw new MovimentoNegativo();
		
			if(valor<=this.limiteEspecial+super.getSaldo() || limiteEspecial > valor || super.getSaldo() > valor) {
				
				
				if(super.getSaldo() > 0) {
					super.setSaldo(super.getSaldo()-valor);
					
					if(super.getSaldo()<0) {
						this.limiteEspecial = limiteEspecial + super.getSaldo();
					}
				}
			}else if(super.getSaldo()<0) {
				this.limiteEspecial = limiteEspecial - valor;
				super.setSaldo(getSaldo()-valor);
			}else {
				throw new LimiteExcedido();
			}
			
			if(limiteEspecial < 0) {
				throw new LimiteExcedido();
			}
			
					
	}
	// método toString - detalhes da classe
	public String toString() {
		return "Saldo atual: "+this.getSaldo()+"\nLimite especial: "+this.getLimiteEspecial();
	}

	public double getLimiteEspecial() {
		return limiteEspecial;
	}

	public void setLimiteEspecial(double limiteEspecial) {
		this.limiteEspecial = limiteEspecial;
	}
	
	
	
}
