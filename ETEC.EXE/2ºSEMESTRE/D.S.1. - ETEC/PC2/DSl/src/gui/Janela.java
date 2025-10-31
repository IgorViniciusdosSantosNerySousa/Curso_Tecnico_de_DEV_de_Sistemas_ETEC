package gui;

import java.awt.BorderLayout;
import java.awt.Container;
import java.awt.FlowLayout;
import java.awt.GridLayout;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPasswordField;
import javax.swing.JTextField;

public class Janela extends JFrame{
	
	JButton btnOK;
	JButton btnCancel;
	JTextField txtUser;
	JPasswordField pswPass;
	JLabel lblUser;
	JLabel lblPass;
	
	
	public Janela(){
		
		Container c = getContentPane();
		btnOK = new JButton();
		btnOK.setText("OK");
		btnCancel = new JButton("Cancel");
		txtUser = new JTextField();
		pswPass = new JPasswordField();
		lblUser = new JLabel("User");
		lblPass = new JLabel("Password");
		/*c.setLayout(new FlowLayout());
		c.setLayout(new BorderLayout());
		c.add(btnOK, BorderLayout.EAST);
		c.add(btnCancel, BorderLayout.WEST);*/
		c.setLayout(new GridLayout(3,2,5,5));
		c.add(lblUser);
		c.add(txtUser);
		c.add(lblPass);
		c.add(pswPass);
		c.add(btnOK);
		c.add(btnCancel);
			
		setTitle("Exemplo Janela");
		setVisible(true);
		setSize(600, 400);
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
	}
	
	
	
}