package LojaVirtual;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.Map;
import java.text.NumberFormat;
import java.util.Locale;

public class Carrinho extends JFrame implements ActionListener {

    JButton btnVoltar;
    JLabel lblPrecoTotal;
    JLabel lblContadorProdutos;
    private Map<String, Integer> produtosNoCarrinho; 
    private Map<String, Double> precosUnitarios;
    private NumberFormat nf; 

    public Carrinho() {
        Container c = getContentPane();
        c.setLayout(new GridBagLayout()); 
        GridBagConstraints gbc = new GridBagConstraints();
        
        produtosNoCarrinho = PaginaInicial.getCarrinho();
        precosUnitarios = PaginaInicial.getPrecosProdutos();
        nf = NumberFormat.getCurrencyInstance(new Locale("pt", "BR"));

        double precoTotalGeral = 0.0; 
        int totalItensSimples = 0; // Para contar o número de 'unidades' no carrinho (e não tipos de produto)

        // Título "Produtos no carrinho:"
        gbc.gridx = 0; 
        gbc.gridy = 0; 
        gbc.gridwidth = 3; 
        gbc.anchor = GridBagConstraints.WEST; 
        gbc.insets = new Insets(10, 10, 5, 10); 
        c.add(new JLabel("Produtos no carrinho:"), gbc);

        gbc.gridwidth = 1; 
        int currentGridY = 1; 

        if (produtosNoCarrinho.isEmpty()) {
            gbc.gridx = 0;
            gbc.gridy = currentGridY;
            gbc.gridwidth = 3; 
            gbc.insets = new Insets(0, 10, 0, 10);
            c.add(new JLabel("Seu carrinho está vazio."), gbc);
            currentGridY++;
        } else {
            for (Map.Entry<String, Integer> entry : produtosNoCarrinho.entrySet()) {
                String nomeProduto = entry.getKey();
                int quantidade = entry.getValue();
                totalItensSimples += quantidade; // Soma a quantidade para o contador total

                double precoUnitario = precosUnitarios.getOrDefault(nomeProduto, 0.0); 
                double precoTotalItem = quantidade * precoUnitario;

                precoTotalGeral += precoTotalItem;

                // Label do Produto e Quantidade
                gbc.gridx = 0; 
                gbc.gridy = currentGridY; 
                gbc.anchor = GridBagConstraints.WEST; 
                gbc.insets = new Insets(2, 10, 2, 5); 
                c.add(new JLabel("- " + nomeProduto + " x" + quantidade), gbc);
                
                // Label do Preço Total do Item
                gbc.gridx = 1; 
                gbc.gridy = currentGridY;
                gbc.anchor = GridBagConstraints.EAST; 
                gbc.insets = new Insets(2, 5, 2, 5);
                c.add(new JLabel(nf.format(precoTotalItem)), gbc); 
                
                // Botão "ALTERAR QUANTIDADE"
                gbc.gridx = 2; 
                gbc.gridy = currentGridY;
                gbc.anchor = GridBagConstraints.EAST; 
                gbc.insets = new Insets(2, 5, 2, 10);
                JButton btnAlterarQuantidade = new JButton("ALTERAR QUANTIDADE");
                btnAlterarQuantidade.setActionCommand("ALTERAR_" + nomeProduto); 
                btnAlterarQuantidade.addActionListener(this);
                c.add(btnAlterarQuantidade, gbc);

                currentGridY++; 
            }

            //INÍCIO DA NOVA SEÇÃO DE CONTADOR DE PRODUTOS E PREÇO TOTAL
            
            // Adiciona um espaço vertical
            gbc.gridx = 0;
            gbc.gridy = currentGridY;
            gbc.gridwidth = 3;
            gbc.weighty = 0.0; 
            gbc.fill = GridBagConstraints.NONE; 
            gbc.insets = new Insets(10, 10, 5, 10);
            c.add(new JLabel(""), gbc); 
            currentGridY++;

            // Contagem de produtos
            int limite = PaginaInicial.getLimiteProdutos(); // Pega o limite da PaginaInicial
            int produtosRestantes = limite - totalItensSimples;
            String msgContagem;
            Color corContagem;

            if (produtosRestantes <= 0) { // Carrinho cheio ou excedido
                msgContagem = "Carrinho cheio!";
                corContagem = Color.RED;
            } else {
                msgContagem = produtosRestantes + " produtos restantes";
                corContagem = UIManager.getColor("Label.foreground"); // Cor padrão
            }

            lblContadorProdutos = new JLabel(msgContagem);
            lblContadorProdutos.setForeground(corContagem);
            lblContadorProdutos.setFont(lblContadorProdutos.getFont().deriveFont(Font.PLAIN, 12f)); // Fonte menor
            
            gbc.gridx = 0; // Coluna 0
            gbc.gridy = currentGridY; // Linha atual
            gbc.gridwidth = 2; // Ocupa duas colunas (antes do Preço Total)
            gbc.anchor = GridBagConstraints.WEST; // Alinha à esquerda
            gbc.insets = new Insets(0, 10, 5, 5);
            c.add(lblContadorProdutos, gbc);

            // Exibe o preço total geral
            gbc.gridx = 2; // Coluna 2 (à direita)
            gbc.gridy = currentGridY;
            gbc.gridwidth = 1; // Ocupa uma coluna
            gbc.anchor = GridBagConstraints.EAST; 
            gbc.insets = new Insets(0, 5, 5, 10);
            lblPrecoTotal = new JLabel("PREÇO TOTAL: " + nf.format(precoTotalGeral));
            lblPrecoTotal.setFont(lblPrecoTotal.getFont().deriveFont(Font.BOLD, 14f));
            c.add(lblPrecoTotal, gbc);
            currentGridY++;
           
        } //FIM DA NOVA SEÇÃO
        
        // Adiciona um espaço flexível para empurrar o botão "Voltar" para baixo
        gbc.gridx = 0;
        gbc.gridy = currentGridY;
        gbc.gridwidth = 3;
        gbc.weighty = 1.0; 
        gbc.fill = GridBagConstraints.VERTICAL; 
        c.add(Box.createVerticalGlue(), gbc); 
        currentGridY++; // Incrementa para a posição do botão

        // Botão "Voltar"
        gbc.gridx = 0;
        gbc.gridy = currentGridY; 
        gbc.gridwidth = 3; 
        gbc.anchor = GridBagConstraints.CENTER; 
        gbc.insets = new Insets(10, 10, 10, 10); 
        gbc.weighty = 0.0; 
        btnVoltar = new JButton("VOLTAR"); // Inicializa aqui, caso não tenha sido inicializado antes
        btnVoltar.addActionListener(this);
        c.add(btnVoltar, gbc);

        setTitle("CARRINHO DE COMPRAS");
        setSize(600, 500); 
        setVisible(true);
        setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if (e.getSource() == btnVoltar) {
            new PaginaInicial();
            dispose();
        } else if (e.getActionCommand().startsWith("ALTERAR_")) {
            String nomeProduto = e.getActionCommand().substring("ALTERAR_".length());
            
            String[] options = {"Aumentar Quantidade", "Diminuir Quantidade"};
            int choice = JOptionPane.showOptionDialog(
                this,
                "O que você deseja fazer com " + nomeProduto + "?",
                "Alterar Quantidade",
                JOptionPane.YES_NO_OPTION,
                JOptionPane.QUESTION_MESSAGE,
                null,
                options,
                options[0]
            );

            int quantidadeAtual = produtosNoCarrinho.getOrDefault(nomeProduto, 0);
            
            if (choice == JOptionPane.YES_OPTION) { // Aumentar
                String input = JOptionPane.showInputDialog(this, "Quantas unidades deseja adicionar?");
                try {
                    int add = Integer.parseInt(input);
                    if (add > 0) {
                        int totalProdutosNoCarrinho = 0;
                        for (int qtd : produtosNoCarrinho.values()) {
                            totalProdutosNoCarrinho += qtd;
                        }
                        
                        final int LIMITE_PRODUTOS = PaginaInicial.getLimiteProdutos(); // Agora pega o limite da PaginaInicial

                        if (totalProdutosNoCarrinho + add <= LIMITE_PRODUTOS) { 
                             int novaQuantidade = quantidadeAtual + add;
                             produtosNoCarrinho.put(nomeProduto, novaQuantidade);
                             JOptionPane.showMessageDialog(this, add + " unidades de " + nomeProduto + " adicionadas.");
                        } else {
                            JOptionPane.showMessageDialog(this, "Não é possível adicionar " + add + " unidades. Limite de " + LIMITE_PRODUTOS + " produtos será excedido.", "Limite Atingido", JOptionPane.WARNING_MESSAGE);
                        }
                    } else {
                        JOptionPane.showMessageDialog(this, "Por favor, insira um número positivo para adicionar.");
                    }
                } catch (NumberFormatException ex) {
                    JOptionPane.showMessageDialog(this, "Entrada inválida. Por favor, insira um número.");
                }
            } else if (choice == JOptionPane.NO_OPTION) { // Diminuir
                String input = JOptionPane.showInputDialog(this, "Quantas unidades deseja remover?");
                 try {
                    int remove = Integer.parseInt(input);
                    if (remove > 0) {
                        if (quantidadeAtual - remove >= 0) { 
                            int novaQuantidade = quantidadeAtual - remove;
                            if (novaQuantidade == 0) {
                                produtosNoCarrinho.remove(nomeProduto); 
                            } else {
                                produtosNoCarrinho.put(nomeProduto, novaQuantidade);
                            }
                            JOptionPane.showMessageDialog(this, remove + " unidades de " + nomeProduto + " removidas.");
                        } else {
                            JOptionPane.showMessageDialog(this, "Não é possível remover essa quantidade. Você tem apenas " + quantidadeAtual + " unidades.");
                        }
                    } else {
                        JOptionPane.showMessageDialog(this, "Por favor, insira um número positivo para remover.");
                    }
                } catch (NumberFormatException ex) {
                    JOptionPane.showMessageDialog(this, "Entrada inválida. Por favor, insira um número.");
                }
            }
            
            // Após a alteração, recria e exibe o carrinho para atualizar a UI e os totais
            dispose(); 
            new Carrinho();
        }
    }
}