package AtividadeLayout;

import java.awt.BorderLayout;
import java.awt.FlowLayout;
import java.awt.GridLayout;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JPanel;

public class Janela extends JFrame{
	JButton btnLike, btnOut, btnComp, btnHelp, btnOK, btnConf;
	JPanel Left, Right;
	
	public Janela() {
		btnLike = new JButton("Curtir");
		btnOut = new JButton("Sair");
		btnHelp = new JButton("Ajuda");
		btnComp = new JButton("Compartilhar");
		btnConf = new JButton("Config");
		btnOK = new JButton("OK");
		
		Left = new JPanel();
		Left.setLayout(new GridLayout(2,1,5,0));
		Left.add(btnLike);
		Left.add(btnComp);
		
		Right = new JPanel();
		Right.setLayout(new GridLayout(4,1,5,0));
		Right.add(btnOut);
		Right.add(btnHelp);
		Right.add(btnConf);
		Right.add(btnOK);
				
		setLayout(new BorderLayout());
		add(Left, BorderLayout.CENTER);
		add(Right, BorderLayout.EAST);
				
		setTitle("Atividade Janela");
		setVisible(true);
		setSize(300, 400);
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
	}

}
