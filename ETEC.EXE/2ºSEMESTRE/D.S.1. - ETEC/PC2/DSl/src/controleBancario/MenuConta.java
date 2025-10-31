package controleBancario;

import javax.swing.JOptionPane;

public class MenuConta extends Menu{
	private ContaCorrente contaCC;
	private ContaPoupanca contaCP;
	
	int respConta, valor;
	double reajuste;
	
	String[] opcConta = {"Voltar", "Consultar Saldo", "Depositar", "Sacar", "Atualizar Saldo"};
	
	// construtor
	public MenuConta() {
		this.contaCC = new ContaCorrente(500, 1000);
		this.contaCP = new ContaPoupanca(5000, 0.01);
	}

		protected void executarMenu() throws MovimentoNegativo, LimiteExcedido{
				
			super.executarMenu();
			this.avaliarOpcaoEscolhida();
		}
		
		protected void avaliarOpcaoEscolhida() throws MovimentoNegativo, LimiteExcedido {
			do {
				switch(super.getOpcao()) {
				case 1: operarContaCC();
				break;
				case 2: operarContaCP();
				break;
				case 0: super.setOpcao(-1);
				break;
				}
			}while(super.getRespConta()!=0);
			
		}
		
		private void operarContaCC() throws MovimentoNegativo, LimiteExcedido {
			super.setRespConta(JOptionPane.showOptionDialog(null, "Escolha uma opção: ", "CONTA CORRENTE", 0, JOptionPane.QUESTION_MESSAGE, null, opcConta, opcConta[0]));
			switch(super.getRespConta()) {
			case 1: JOptionPane.showMessageDialog(null, contaCC.toString());;
			break;
			case 2:
				valor = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira o valor de depósito", "DEPÓSITO", JOptionPane.QUESTION_MESSAGE));
				contaCC.depositar(valor);
			break;
			case 3: 
				valor = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira o valor de saque", "SAQUE", JOptionPane.QUESTION_MESSAGE));
				contaCC.sacar(valor);
			break;
			case 4: contaCC.atualizarSaldo();
			break;
			case 0: super.setOpcao(-1);
			break;
			}
		}
		
		private void operarContaCP() throws MovimentoNegativo, LimiteExcedido {
			super.setRespConta(JOptionPane.showOptionDialog(null, "Escolha uma opção: ", "CONTA POUPANÇA", 0, JOptionPane.QUESTION_MESSAGE, null, opcConta, opcConta[0]));
			switch(super.getRespConta()) {
			case 0: super.setOpcao(-1);
			break;
			case 1: JOptionPane.showMessageDialog(null, contaCP.toString());;
			break;
			case 2: 
				valor = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira o valor de depósito", "DEPÓSITO", JOptionPane.QUESTION_MESSAGE));
				contaCP.depositar(valor);
			break;
			case 3:
				valor = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira o valor de saque", "SAQUE", JOptionPane.QUESTION_MESSAGE));
				contaCP.sacar(valor);
			break;
			case 4:
				reajuste = Integer.parseInt(JOptionPane.showInputDialog(null, "Insira o valor do reajuste", "REAJUSTE", JOptionPane.QUESTION_MESSAGE));
				contaCP.atualizarSaldo(reajuste);
			break;
			};
		}
	
}


