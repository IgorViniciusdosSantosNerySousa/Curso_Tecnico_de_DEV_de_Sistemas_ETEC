package controleBancario;

import javax.swing.JOptionPane;

public class Principal {

	public static void main(String[] args) throws MovimentoNegativo, LimiteExcedido {
		Menu menu = new MenuConta();
		
		
		do {
			try {
				
				do {
					menu.executarMenu();
				}while(menu.getRespConta()!=0);
				menu.setOpcao(menu.getOpcao()-1);
				
				
			}catch (MovimentoNegativo erro) {
				JOptionPane.showMessageDialog(null, erro, "DADO INVÁLIDO", 0);
			}catch (LimiteExcedido erro) {
				JOptionPane.showMessageDialog(null, erro, "DADO INVÁLIDO", 0);
			}catch (IllegalArgumentException e) {
				JOptionPane.showMessageDialog(null, "Digite apenas números!", "DADO INVÁLIDO", 0);
			}
			
		}while(menu.getOpcao()!=0);


	}

}
