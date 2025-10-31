package LojaVirtual;

import java.awt.Container;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.*;
import java.util.HashMap;
import java.util.Map;

public class Login extends JFrame implements ActionListener {

    JLabel lblEmail, lblPsw;
    JButton btnLimpar, btnEntrar, btnCadastrar, btnSair;
    JTextField txtEmail;
    JPasswordField txtPsw;

    // Email do administrador pré-definido e sua senha (A SENHA DEVE SEGUIR SUAS REGRAS: 8 CARACTERES, MAIUSCULA, MINUSCULA, NUMERO)
    private static final String ADMIN_EMAIL = "admin@gmail.com";
    private static final String ADMIN_PASSWORD = "Admin123"; 

    public Login() {
        Container c = getContentPane();

        // Labels
        lblEmail = new JLabel("E-MAIL: ");
        txtEmail = new JTextField();

        lblPsw = new JLabel("SENHA: ");
        txtPsw = new JPasswordField();

        //BUTTONS
        btnEntrar = new JButton("ENTRAR");
        btnEntrar.addActionListener(this);

        btnCadastrar = new JButton("CADASTRAR-SE");
        btnCadastrar.addActionListener(this);

        btnLimpar = new JButton("LIMPAR");
        btnLimpar.addActionListener(this);

        btnSair = new JButton("SAIR");
        btnSair.addActionListener(this);

        // Layout da Tela de Cadastro
        c.setLayout(new GridLayout(4, 2, 5, 5));
        c.add(lblEmail);
        c.add(txtEmail);

        c.add(lblPsw);
        c.add(txtPsw);

        c.add(btnLimpar);
        c.add(btnEntrar);
        c.add(btnCadastrar);
        c.add(btnSair);

        setTitle("LOGIN");
        setSize(800, 500);
        setVisible(true);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }

    public void actionPerformed(ActionEvent e) {
        if (e.getSource() == btnEntrar) {
            String usuario = txtEmail.getText().toLowerCase();
            String senha = new String(txtPsw.getPassword());

            if (usuario.isEmpty() || senha.isEmpty()) {
                JOptionPane.showMessageDialog(null, "PREENCHA TODOS OS CAMPOS.", "ERRO", JOptionPane.ERROR_MESSAGE);
                limparCampos();
                return;
            }

            //Lógica de Login de Administrador
            if (usuario.equals(ADMIN_EMAIL) && senha.equals(ADMIN_PASSWORD)) {
                JOptionPane.showMessageDialog(null, "BEM-VINDO ADMINISTRADOR!", "SUCESSO", JOptionPane.INFORMATION_MESSAGE);
                limparCampos();
                new PaginaInicial(true); // Abre PaginaInicial no modo administrador
                dispose();
                return;
            }

            Map<String, String[]> usuariosCadastrados = Cadastro.getUsuarios(); //usuarios cadastrados

            if (usuariosCadastrados.containsKey(usuario)) {
                String[] dadosUsuario = usuariosCadastrados.get(usuario);
                String senhaArmazenada = dadosUsuario[0];
                String nomeUsuario = dadosUsuario.length > 1 ? dadosUsuario[1] : "";

                if (senha.equals(senhaArmazenada)) {
                    JOptionPane.showMessageDialog(null, "BEM-VINDO " + nomeUsuario.toUpperCase() + "!", "SUCESSO", JOptionPane.INFORMATION_MESSAGE);
                    limparCampos();
                    new PaginaInicial(false); // Abre PaginaInicial no modo usuário normal
                    dispose();
                } else {
                    JOptionPane.showMessageDialog(null, "SENHA INCORRETA.", "ERRO", JOptionPane.ERROR_MESSAGE);
                }
            } else {
                JOptionPane.showMessageDialog(null, "USUÁRIO NÃO ENCONTRADO.", "ERRO", JOptionPane.ERROR_MESSAGE);
                limparCampos();
            }

        } else if (e.getSource() == btnLimpar) {
            limparCampos();
        } else if (e.getSource() == btnCadastrar) {
            new Cadastro();
            dispose();
        } else if (e.getSource() == btnSair) {
            dispose();
        }
    }

    private void limparCampos() {
        txtEmail.setText("");
        txtPsw.setText("");
    }
}