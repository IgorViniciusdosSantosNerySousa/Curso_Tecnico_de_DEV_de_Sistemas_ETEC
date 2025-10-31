package controleBancario;

import javax.swing.JOptionPane;

public class Menu {
	private int opcao, respConta;
	private String mensagemMenu;
	
	// opções menu
	String[] opcMenu = {"Sair", "Conta Corrente", "Conta Poupança"};
	
	
	public void executar(){
		
	}
	protected void executarMenu() throws MovimentoNegativo, LimiteExcedido {
		setOpcao(JOptionPane.showOptionDialog(null, "Escolha uma opcão:", "MENU", 0, JOptionPane.QUESTION_MESSAGE, null, opcMenu, opcMenu[0]));
	}
	protected void avaliarOpcaoEscolhida() throws MovimentoNegativo, LimiteExcedido {
		
	}
	
	
	public int getOpcao() {
		return opcao;
	}
	public void setOpcao(int opcao) {
		this.opcao = opcao;
	}
	public String getMensagemMenu() {
		return mensagemMenu;
	}
	public void setMensagemMenu(String mensagemMenu) {
		this.mensagemMenu = mensagemMenu;
	}
	public int getRespConta() {
		return respConta;
	}
	public void setRespConta(int respConta) {
		this.respConta = respConta;
	}
	
	
	
}
