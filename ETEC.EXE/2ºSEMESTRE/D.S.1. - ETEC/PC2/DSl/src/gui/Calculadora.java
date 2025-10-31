package gui;

import java.awt.BorderLayout;
import java.awt.EventQueue;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import net.miginfocom.swing.MigLayout;
import javax.swing.JButton;
import java.awt.GridLayout;
import javax.swing.JLabel;
import javax.swing.JTextField;
import java.awt.Font;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;

public class Calculadora extends JFrame {
	private JTextField txtResultado;
	double n1, n2;
	String operador;
	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Calculadora frame = new Calculadora();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public Calculadora() {
		setSize(600, 800);
		getContentPane().setLayout(new MigLayout("", "[145px][145px][145px][145px]", "[125px][125px][125px][125px][125px][125px]"));
		
		txtResultado = new JTextField();
		txtResultado.setFont(new Font("DialogInput", Font.BOLD, 30));
		getContentPane().add(txtResultado, "cell 0 0 4 1,grow");
		txtResultado.setColumns(5);
		
		JButton btn7 = new JButton("7");
		btn7.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				txtResultado.setText(txtResultado.getText() + "7");
			}
		});
		btn7.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btn7, "cell 0 1,grow");
		
		JButton btn8 = new JButton("8");
		btn8.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				txtResultado.setText(txtResultado.getText() + "8");
			}
		});
		btn8.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btn8, "cell 1 1,grow");
		
		JButton btn9 = new JButton("9");
		btn9.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				txtResultado.setText(txtResultado.getText() + "9");
			}
		});
		btn9.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btn9, "cell 2 1,grow");
		
		JButton btnDiv = new JButton("/");
		btnDiv.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				n1 = Double.parseDouble(txtResultado.getText());
		        txtResultado.setText("");
		        operador = "Dividir";
			}
		});
		btnDiv.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btnDiv, "cell 3 1,grow");
		
		JButton btn4 = new JButton("4");
		btn4.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				txtResultado.setText(txtResultado.getText() + "4");
			}
		});
		btn4.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btn4, "cell 0 2,grow");
		
		JButton btn5 = new JButton("5");
		btn5.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				txtResultado.setText(txtResultado.getText() + "5");
			}
		});
		btn5.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btn5, "cell 1 2,grow");
		
		JButton btn6 = new JButton("6");
		btn6.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				txtResultado.setText(txtResultado.getText() + "6");
			}
		});
		btn6.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btn6, "cell 2 2,grow");
		
		JButton btnVezes = new JButton("x");
		btnVezes.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				n1 = Double.parseDouble(txtResultado.getText());
		        txtResultado.setText("");
		        operador = "Vezes";
			}
		});
		btnVezes.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btnVezes, "cell 3 2,grow");
		
		JButton btn1 = new JButton("1");
		btn1.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				txtResultado.setText(txtResultado.getText() + "1");
			}
		});
		btn1.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btn1, "cell 0 3,grow");
		
		JButton btn2 = new JButton("2");
		btn2.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				txtResultado.setText(txtResultado.getText() + "2");
			}
		});
		btn2.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btn2, "cell 1 3,grow");
		
		JButton btn3 = new JButton("3");
		btn3.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				txtResultado.setText(txtResultado.getText() + "3");
			}
		});
		btn3.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btn3, "cell 2 3,grow");
		
		JButton btnMenos = new JButton("-");
		btnMenos.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				n1 = Double.parseDouble(txtResultado.getText());
		        txtResultado.setText("");
		        operador = "Menos";
			}
		});
		btnMenos.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btnMenos, "cell 3 3,grow");
		
		JButton btn0 = new JButton("0");
		btn0.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				txtResultado.setText(txtResultado.getText() + "0");
			}
		});
		btn0.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btn0, "cell 0 4 2 1,grow");
		
		JButton btnPonto = new JButton(".");
		btnPonto.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				if (!txtResultado.getText().contains("."))
		        {
		            txtResultado.setText(txtResultado.getText() + ".");
		        }
			}
		});
		btnPonto.setFont(new Font("Arial Black", Font.BOLD, 30));
		getContentPane().add(btnPonto, "cell 2 4,grow");
		
		 JButton btnMais = new JButton("+");
	        btnMais.addActionListener(new ActionListener() {
	            public void actionPerformed(ActionEvent arg0) {
	                try {
	                    n1 = Double.parseDouble(txtResultado.getText());
	                    txtResultado.setText("");
	                    operador = "Mais";
	                } catch (NumberFormatException e) {
	                    txtResultado.setText("Erro");
	                }
	            }
	        });
	        btnMais.setFont(new Font("Arial Black", Font.BOLD, 30));
	        getContentPane().add(btnMais, "cell 3 4,grow");
		
		 JButton btnIgual = new JButton("=");
	        btnIgual.addActionListener(new ActionListener() {
	            public void actionPerformed(ActionEvent e) {
	                try {
	                    n2 = Double.parseDouble(txtResultado.getText());
	                    switch (operador) {
	                        case "Mais":
	                            txtResultado.setText(String.valueOf(n1 + n2));
	                            break;
	                        case "Menos":
	                            txtResultado.setText(String.valueOf(n1 - n2));
	                            break;
	                        case "Vezes":
	                            txtResultado.setText(String.valueOf(n1 * n2));
	                            break;
	                        case "Dividir":
	                            if (n2 == 0) {
	                                txtResultado.setText("Erro");
	                            } else {
	                                txtResultado.setText(String.valueOf(n1 / n2));
	                            }
	                            break;
	                        default:
	                            txtResultado.setText("Erro");
	                            break;
	                    }
	                } catch (NumberFormatException ex) {
	                    txtResultado.setText("Erro");
	                }
	            }
	        });
		
		  JButton btnClean = new JButton("AC");
	        btnClean.addActionListener(new ActionListener() {
	            public void actionPerformed(ActionEvent arg0) {
	                txtResultado.setText("");
	            }
	        });
	        btnClean.setFont(new Font("Arial Black", Font.BOLD, 30));
	        getContentPane().add(btnClean, "cell 0 5 2 1,grow");
	        
	        btnIgual.setFont(new Font("Arial Black", Font.BOLD, 30));
	        getContentPane().add(btnIgual, "cell 2 5 2 1,grow");
	    }
		
	    
	}
