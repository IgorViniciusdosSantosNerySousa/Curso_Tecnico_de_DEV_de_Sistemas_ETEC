package LoginAtv;

import java.awt.Container;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.*;
import java.util.HashMap;
import java.util.Map;

public class Cadastro extends JFrame implements ActionListener {

    JLabel lblUsu, lblConfUsu, lblPsw, lblConfPsw, lblPerfil;
    JButton btnCadastrar, btnLimpar, btnLogar, btnCancelar;
    JTextField txtUsu, txtUsuConfirm;
    JPasswordField txtPsw, txtPswConfirm;
    JComboBox<String> cbPerfil;
    private static final Map<String, String[]> usuarios = new HashMap<>();
    private static boolean Admin = false;

    public Cadastro() {
        Container c = getContentPane();
        
        // Labels
        lblUsu = new JLabel("USUÁRIO: ");
        txtUsu = new JTextField();
        lblConfUsu = new JLabel("CONFIRME O USUÁRIO: ");
        txtUsuConfirm = new JTextField();
        
        lblPsw = new JLabel("SENHA: ");
        txtPsw = new JPasswordField();
        lblConfPsw = new JLabel("CONFIRME A SENHA: ");
        txtPswConfirm = new JPasswordField();
        
        lblPerfil = new JLabel("PERFIL: ");
        cbPerfil = new JComboBox<>(new String[] {"ADM", "TÉCNICO", "COMUM"});
        
        btnCadastrar = new JButton("CADASTRAR");
        btnCadastrar.addActionListener(this);
        
        btnLimpar = new JButton("LIMPAR");
        btnLimpar.addActionListener(this);
        
        btnLogar = new JButton("LOGIN");
        btnLogar.addActionListener(this);
        
        btnCancelar = new JButton("CANCELAR");
        btnCancelar.addActionListener(this);

        // Layout da Tela de Cadastro
        c.setLayout(new GridLayout(7, 2, 5, 5));
        c.add(lblUsu);
        c.add(txtUsu);
        c.add(lblConfUsu);
        c.add(txtUsuConfirm);
        
        c.add(lblPsw);
        c.add(txtPsw);
        c.add(lblConfPsw);
        c.add(txtPswConfirm);
        
        c.add(lblPerfil);
        c.add(cbPerfil);
        
        c.add(btnCadastrar);
        c.add(btnLimpar);
        c.add(btnLogar);
        c.add(btnCancelar);

        setTitle("CADASTRO");
        setSize(800, 500);
        setVisible(true);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
    public static void main(String[] args) {
    	new Cadastro();
    }
    public void actionPerformed(ActionEvent e) {
        if (e.getSource() == btnCadastrar) {
            String usuario = txtUsu.getText().toLowerCase();
            String usuarioConfirm = txtUsuConfirm.getText().toLowerCase();
            String senha = new String(txtPsw.getPassword());
            String senhaConfirm = new String(txtPswConfirm.getPassword());
            String perfil = (String) cbPerfil.getSelectedItem(); //aqui ele vai armazenar a opcao escolhida

            if (usuario.isEmpty() || senha.isEmpty() || usuarioConfirm.isEmpty() || senhaConfirm.isEmpty()) {
                JOptionPane.showMessageDialog(null, "PREENCHA TODOS OS CAMPOS.", "ERRO", JOptionPane.ERROR_MESSAGE);
                limparCampos();
                return;
            }

            if (!usuario.equals(usuarioConfirm)) {
                JOptionPane.showMessageDialog(null, "NOMES DE USUÁRIO NÃO COINCIDEM.", "ERRO", JOptionPane.ERROR_MESSAGE);
                limparCampos();
                return;
            }

            if (!senha.equals(senhaConfirm)) {
                JOptionPane.showMessageDialog(null, "SENHAS NÃO COINCIDEM.", "ERRO", JOptionPane.ERROR_MESSAGE);
                limparCampos();
                return;
            }

            if (!usuarios.isEmpty() && perfil.equals("ADM") && Admin) {
                JOptionPane.showMessageDialog(null, "APENAS UM USUÁRIO ADM É PERMITIDO.", "ERRO", JOptionPane.ERROR_MESSAGE);
                limparCampos();
                return;
            }

            if (usuarios.containsKey(usuario)) {
                JOptionPane.showMessageDialog(null, "USUÁRIO JÁ EXISTE.", "ERRO", JOptionPane.ERROR_MESSAGE);
                limparCampos();
                return;
            }
            usuarios.put(usuario, new String[] {senha, perfil});
            Admin = perfil.equals("ADM") || Admin; //aqui ele armazena os usuarios e perfis

            JOptionPane.showMessageDialog(null, "CADASTRADO COM SUCESSO!", "SUCESSO", JOptionPane.INFORMATION_MESSAGE);
            limparCampos();

        } else if (e.getSource() == btnLimpar) {
            limparCampos();
        } else if (e.getSource() == btnLogar) {
            new Login();
            dispose();
        }else if (e.getSource() == btnCancelar) {
            dispose();
        }
    }

    private void limparCampos() {
        txtUsu.setText("");
        txtUsuConfirm.setText("");
        txtPsw.setText("");
        txtPswConfirm.setText("");
    }

    public static Map<String, String[]> getUsuarios() {
        return usuarios;
    }

    public static boolean Adm() {
        return Admin;
    }
}
