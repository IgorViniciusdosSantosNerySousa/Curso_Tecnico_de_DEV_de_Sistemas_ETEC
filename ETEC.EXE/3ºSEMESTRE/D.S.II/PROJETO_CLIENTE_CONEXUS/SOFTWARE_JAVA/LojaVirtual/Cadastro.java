package LojaVirtual;

import java.awt.Container;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.*;
import javax.swing.event.DocumentEvent;
import javax.swing.event.DocumentListener;
import java.util.HashMap;
import java.util.Map;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class Cadastro extends JFrame implements ActionListener {

    JLabel lblNome, lblEmail, lblConfEmail, lblPsw, lblConfPsw;
    JTextField txtNome;
    JLabel lblPswCharCount;
    JButton btnCadastrar, btnLimpar, btnLogar, btnSair; 
    JTextField txtEmail, txtEmailConfirm;
    JPasswordField txtPsw, txtPswConfirm;

    private static final Map<String, String[]> usuarios = new HashMap<>(); //armazena os usuarios cadastrados
    private static final int SENHA_TAMANHO_EXATO = 8; //variavel para a senha

    public Cadastro() {
        Container c = getContentPane();

        lblNome = new JLabel("NOME:");
        txtNome = new JTextField();

        lblEmail = new JLabel("E-MAIL ");
        txtEmail = new JTextField();
        lblConfEmail = new JLabel("CONFIRME O E-MAIL: ");
        txtEmailConfirm = new JTextField();

        lblPsw = new JLabel("DEFINA SUA SENHA: ");
        txtPsw = new JPasswordField();

        //Mostra quantos caracteres faltam (8 caracteres)
        lblPswCharCount = new JLabel("restam " + SENHA_TAMANHO_EXATO + " caracteres");
        lblPswCharCount.setHorizontalAlignment(SwingConstants.RIGHT);

        lblConfPsw = new JLabel("CONFIRME SUA SENHA: ");
        txtPswConfirm = new JPasswordField();

        // Adicionar o DocumentListener ao campo de senha para a contagem
        txtPsw.getDocument().addDocumentListener(new DocumentListener() {
            @Override
            public void insertUpdate(DocumentEvent e) {
                updateCharCount();
            }

            @Override
            public void removeUpdate(DocumentEvent e) {
                updateCharCount();
            }

            @Override
            public void changedUpdate(DocumentEvent e) {

            }

            private void updateCharCount() {
                int currentLength = txtPsw.getPassword().length;
                int remaining = SENHA_TAMANHO_EXATO - currentLength;

                if (remaining > 0) {
                    lblPswCharCount.setText("Faltam " + remaining + " caracteres");
                    lblPswCharCount.setForeground(UIManager.getColor("Label.foreground")); // Cor padrão
                } else if (remaining == 0) {
                    lblPswCharCount.setText("8 caracteres (OK!)");
                    lblPswCharCount.setForeground(new java.awt.Color(0, 128, 0)); // Verde
                } else { // Se passou de 8 caracteres
                    lblPswCharCount.setText("Limite excedido (" + (currentLength - SENHA_TAMANHO_EXATO) + " a mais)");
                    lblPswCharCount.setForeground(java.awt.Color.RED); // Vermelho
                }
            }


        });

        btnCadastrar = new JButton("CADASTRAR");
        btnCadastrar.addActionListener(this);

        btnLimpar = new JButton("LIMPAR");
        btnLimpar.addActionListener(this);

        btnLogar = new JButton("LOGIN");
        btnLogar.addActionListener(this);

        btnSair = new JButton("SAIR");
        btnSair.addActionListener(this);

        // Layout da Tela de Cadastro
        c.setLayout(new GridLayout(8, 2, 5, 5));

        c.add(lblNome);
        c.add(txtNome);

        c.add(lblEmail);
        c.add(txtEmail);
        c.add(lblConfEmail);
        c.add(txtEmailConfirm);

        c.add(lblPsw);
        c.add(txtPsw);
        c.add(lblPswCharCount); 
        c.add(new JLabel(""));

        c.add(lblConfPsw);
        c.add(txtPswConfirm);

        c.add(btnCadastrar);
        c.add(btnLimpar);
        c.add(btnLogar);
        c.add(btnSair);

        setTitle("CADASTRO");
        setSize(800, 550);
        setVisible(true);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }

    public void actionPerformed(ActionEvent e) {
        if (e.getSource() == btnCadastrar) {
            String nome = txtNome.getText().trim();
            String usuario = txtEmail.getText();
            String usuarioConfirm = txtEmailConfirm.getText();
            String senha = new String(txtPsw.getPassword());
            String senhaConfirm = new String(txtPswConfirm.getPassword());

            // Verificar se todos os campos, incluindo nome, estão preenchidos
            if (nome.isEmpty() || usuario.isEmpty() || senha.isEmpty() || usuarioConfirm.isEmpty() || senhaConfirm.isEmpty()) {
                JOptionPane.showMessageDialog(null, "PREENCHA TODOS OS CAMPOS!", "ERRO", JOptionPane.ERROR_MESSAGE);
                // Não chamar limparCampos() aqui o usuário pode querer corrigir o erro
                return;
            }

            // Validar o formato do e-mail
            boolean Gmail = usuario.endsWith("@gmail.com");
            boolean Hotmail = usuario.endsWith("@hotmail.com");
            boolean antesDoArroba = usuario.indexOf('@') > 0;

            if (!antesDoArroba || (!Gmail && !Hotmail)) {
                JOptionPane.showMessageDialog(null, "O E-MAIL DEVE TER PELO MENOS 1 CARACTER ANTES DO '@' E TERMINAR COM @gmail.com OU @hotmail.com.", "ERRO", JOptionPane.ERROR_MESSAGE);
                return;
            }

            // Usar SENHA_TAMANHO_EXATO aqui
            if (senha.length() != SENHA_TAMANHO_EXATO) {
                JOptionPane.showMessageDialog(null, "A SENHA DEVE CONTER EXATAMENTE " + SENHA_TAMANHO_EXATO + " CARACTERES.", "ERRO", JOptionPane.ERROR_MESSAGE);
                return;
            }

            // Resto das validações de senha (maiúscula, minúscula, número)
            Pattern pUpperCase = Pattern.compile("[A-Z]");
            Matcher mUpperCase = pUpperCase.matcher(senha);
            boolean temUpperCase = mUpperCase.find();

            Pattern pLowerCase = Pattern.compile("[a-z]");
            Matcher mLowerCase = pLowerCase.matcher(senha);
            boolean temLowerCase = mLowerCase.find();

            Pattern pNumero = Pattern.compile("[0-9]");
            Matcher mNumero = pNumero.matcher(senha);
            boolean temNumero = mNumero.find();

            if (!temUpperCase || !temLowerCase || !temNumero) {
                JOptionPane.showMessageDialog(null,
                        "A SENHA DEVE CONTER:\n" +
                                "- Pelo menos uma letra maiúscula\n" +
                                "- Pelo menos uma letra minúscula\n" +
                                "- Pelo menos um número\n",
                        "ERRO", JOptionPane.ERROR_MESSAGE);
                return;
            }

            // Validar confirmação de e-mail
            if (!usuario.equals(usuarioConfirm)) {
                JOptionPane.showMessageDialog(null, "O EMAIL NÃO COINCIDE.", "ERRO", JOptionPane.ERROR_MESSAGE);
                return;
            }

            // Validar confirmação de senha
            if (!senha.equals(senhaConfirm)) {
                JOptionPane.showMessageDialog(null, "A SENHA NÃO COINCIDE.", "ERRO", JOptionPane.ERROR_MESSAGE);
                return;
            }

            // Verificar se o usuário já existe
            if (Cadastro.getUsuarios().containsKey(usuario)) { // Usar Cadastro.getUsuarios()
                JOptionPane.showMessageDialog(null, "USUÁRIO JÁ EXISTE.", "ERRO", JOptionPane.ERROR_MESSAGE);
                return;
            }

            // Se todas as validações passarem vai cadastrar o usuário
            // Armazena senha e nome
            usuarios.put(usuario, new String[]{senha, nome});
            JOptionPane.showMessageDialog(null, "CADASTRADO COM SUCESSO!", "SUCESSO", JOptionPane.INFORMATION_MESSAGE);
            limparCampos();
            new Login();
            dispose();

        } else if (e.getSource() == btnLimpar) {
            limparCampos();
            // Ao limpar, reseta a contagem de caracteres.
            lblPswCharCount.setText("Faltam " + SENHA_TAMANHO_EXATO + " caracteres");
            lblPswCharCount.setForeground(UIManager.getColor("Label.foreground"));
        } else if (e.getSource() == btnLogar) {
            new Login();
            dispose();
        } else if (e.getSource() == btnSair) {
            dispose();
        }
    }

    //metodo pra limpar os campos
    private void limparCampos() {
        txtNome.setText("");
        txtEmail.setText("");
        txtEmailConfirm.setText("");
        txtPsw.setText("");
        txtPswConfirm.setText("");
    }

    //metodo para pegar os usuarios cadastrados
    public static Map<String, String[]> getUsuarios() {
        return usuarios;
    }
}