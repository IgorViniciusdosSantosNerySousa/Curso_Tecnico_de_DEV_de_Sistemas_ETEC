package LojaVirtual; 

import java.awt.Container;
import java.awt.GridLayout; 
import java.awt.event.ActionEvent; 
import java.awt.event.ActionListener; 
import javax.swing.*; 
import java.util.HashMap; 
import java.util.Map; 
import java.text.NumberFormat; 
import java.util.Locale; 
import java.util.LinkedHashMap;

public class PaginaInicial extends JFrame implements ActionListener {
    // Componentes da interface: labels e botões.
    JLabel lblProdutos, lblProd1, lblProd2, lblProd3, lblProd4,
           lblProd5, lblProd6, lblProd7, lblProd8, lblEspaco, lblEspaco2;
    JButton btnAddCar1, btnAddCar2, btnAddCar3, btnAddCar4,
            btnAddCar5, btnAddCar6, btnAddCar7, btnAddCar8, btnVerCarrinho;
    JButton btnSair;
    JButton btnAdicionarProduto, btnExcluirProduto, btnSairAdmin;

    // Carrinho de compras: nome do produto e quantidade. É 'static' pra ser único.
    private static Map<String, Integer> carrinho = new HashMap<>();
    private static int LIMITE_PRODUTOS = 15; // Quantos itens o carrinho aguenta.
    // Produtos e seus preços. 'LinkedHashMap' pra manter a ordem que nós colococamos.
    private static Map<String, Double> precosProdutos = new LinkedHashMap<>();
    private boolean isAdminMode = false; // Verifica se está no modo administrador.

    // Produtos Pré-Setados
    static {
        precosProdutos.put("CESTA BÁSICA", 49.00);
        precosProdutos.put("PRODUTOS DE LIMPEZA", 16.99);
        precosProdutos.put("CARNES E FRIOS", 59.90);
        precosProdutos.put("SOBREMESAS", 26.99);
        precosProdutos.put("SALGADINHOS E DOCES", 9.99);
        precosProdutos.put("SUCOS", 8.50);
        precosProdutos.put("BISCOITOS E BOLACHAS", 3.00);
        precosProdutos.put("FARDOS DE REFRIGERANTES", 21.13);
    }

    // Construtor padrão, que chama o outro construtor como usuário normal.
    public PaginaInicial() {
        this(false);
    }

    // Construtor que monta a tela, aceita um 'isAdmin' pra saber o modo.
    public PaginaInicial(boolean isAdmin) {
        this.isAdminMode = isAdmin; // Define o modo.
        Container c = getContentPane(); // Pega o painel principal da janela.
        c.removeAll(); // Limpa o painel pra construir a tela nova.

        lblProdutos = new JLabel("PRODUTOS"); 
        btnVerCarrinho = new JButton("CARRINHO"); 
        btnVerCarrinho.addActionListener(this);

        btnSair = new JButton("SAIR"); 
        btnSair.addActionListener(this); 

        // Se estiver no modo administrador...
        if (isAdminMode) {
            setTitle("PÁGINA DO ADMINISTRADOR"); 

            // Botões de admin.
            btnAdicionarProduto = new JButton("ADICIONAR PRODUTO");
            btnAdicionarProduto.addActionListener(this);
            btnExcluirProduto = new JButton("EXCLUIR PRODUTO");
            btnExcluirProduto.addActionListener(this);
            btnSairAdmin = new JButton("SAIR DO ADMIN");
            btnSairAdmin.addActionListener(this);

            // Layout da grade para o admin.
            c.setLayout(new GridLayout(precosProdutos.size() + 3, 2, 5, 5));

            c.add(lblProdutos); 
            c.add(new JLabel("")); 

            updateProductLabelsAndButtons(c); // Atualiza e exibe os produtos e botões.

            // Adiciona os botões de admin.
            c.add(btnAdicionarProduto);
            c.add(btnExcluirProduto);
            c.add(new JLabel(""));
            c.add(btnSairAdmin);

        } else { // Se não for admin (modo usuário normal)...
            setTitle("PÁGINA INICIAL"); 

            lblEspaco = new JLabel(""); 
            lblEspaco2 = new JLabel("");

            // Layout da grade para o usuário.
            c.setLayout(new GridLayout(precosProdutos.size() + 8, 2, 5, 5));

            c.add(lblProdutos); 
            c.add(btnVerCarrinho); 

            c.add(lblEspaco); 
            c.add(lblEspaco2);

            updateProductLabelsAndButtons(c); // Atualiza e exibe os produtos e botões.

            // Painel pra centralizar o botão de sair.
            JPanel panelBotaoSair = new JPanel(new java.awt.FlowLayout(java.awt.FlowLayout.CENTER));
            panelBotaoSair.add(btnSair);
            c.add(new JLabel(""));
            c.add(panelBotaoSair);
        }

        setSize(800, 550); 
        setVisible(true); 
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); 
        c.revalidate(); // Recalcula o layout.
        c.repaint(); // Redesenha a tela.
    }

    // Método pra mostrar os produtos e seus botões (ou espaços no modo admin).
    private void updateProductLabelsAndButtons(Container c) {
        // Formata os valores como moeda brasileira.
        NumberFormat nf = NumberFormat.getCurrencyInstance(new Locale("pt", "BR"));

        // Percorre a lista de produtos.
        for (Map.Entry<String, Double> entry : precosProdutos.entrySet()) {
            String nomeProduto = entry.getKey();
            double preco = entry.getValue();

            // Cria um label pro produto e preço.
            JLabel lblProd = new JLabel(nomeProduto + " - " + nf.format(preco));
            c.add(lblProd); // Adiciona o label na tela.

            // Se não for admin, adiciona o botão de "Adicionar ao Carrinho".
            if (!isAdminMode) {
                JButton btnAddCar = new JButton("ADICIONAR AO CARRINHO");
                btnAddCar.setActionCommand("ADD_CAR_" + nomeProduto); // Comando pro listener.
                btnAddCar.addActionListener(this); // Liga o botão ao "ouvinte".
                c.add(btnAddCar); 
            } else {
                c.add(new JLabel(""));
            }
        }
    }

    // Métodos pra pegar o carrinho, os preços e o limite de produtos de fora da classe.
    public static Map<String, Integer> getCarrinho() {
        return carrinho;
    }

    public static Map<String, Double> getPrecosProdutos() {
        return precosProdutos;
    }

    public static int getLimiteProdutos() {
        return LIMITE_PRODUTOS;
    }

    // Adiciona um produto novo na lista de produtos.
    public static void adicionarProduto(String nome, double preco) {
        if (!precosProdutos.containsKey(nome)) { // Vê se o produto já existe.
            precosProdutos.put(nome, preco); // Adiciona se não existir.
        } else {
            JOptionPane.showMessageDialog(null, "O produto '" + nome + "' já existe.", "Produto Existente", JOptionPane.WARNING_MESSAGE);
        }
    }

    // Exclui um produto da lista.
    public static void excluirProduto(String nome) {
        if (precosProdutos.containsKey(nome)) { // Vê se o produto existe.
            precosProdutos.remove(nome); // Remove da lista de produtos.
            carrinho.remove(nome); // Se estiver no carrinho, remove de lá também.
        } else {
            JOptionPane.showMessageDialog(null, "O produto '" + nome + "' não foi encontrado.", "Produto Não Encontrado", JOptionPane.WARNING_MESSAGE);
        }
    }

    @Override
    // Método que é chamado quando um botão é clicado 
    public void actionPerformed(ActionEvent e) {
        String command = e.getActionCommand(); // Pega o comando da ação.
        
        if (e.getSource() == btnVerCarrinho) {
            new Carrinho(); // Abre a tela do carrinho.
            dispose(); // Fecha a tela atual.
        } else if (e.getSource() == btnSair) {
            dispose(); // Fecha a tela atual.
            new Login().setVisible(true); // Abre a tela de login.
        } else if (e.getSource() == btnAdicionarProduto) {
            String nome = JOptionPane.showInputDialog(this, "Nome do novo produto:"); // Pede o nome do produto.
            if (nome != null && !nome.trim().isEmpty()) { // Se o nome não for vazio...
                try {
                    String precoStr = JOptionPane.showInputDialog(this, "Preço do " + nome + " (ex: 19.99):"); // Pede o preço.
                    if (precoStr != null && !precoStr.trim().isEmpty()) { // Se o preço não for vazio...
                        double preco = Double.parseDouble(precoStr.replace(",", ".")); // Converte o preço pra número.

                        if (preco < 0) { // Se o preço for negativo, avisa.
                            JOptionPane.showMessageDialog(this, "O preço do produto não pode ser negativo.", "Erro de Preço", JOptionPane.ERROR_MESSAGE);
                            return;
                        }

                        adicionarProduto(nome.trim().toUpperCase(), preco); // Adiciona o produto.
                        dispose(); // Fecha a tela atual.
                        new PaginaInicial(true); // Reabre a página inicial no modo admin (pra atualizar).
                    } else {
                        JOptionPane.showMessageDialog(this, "Preço inválido. Não pode ser vazio.");
                    }
                } catch (NumberFormatException ex) {
                    JOptionPane.showMessageDialog(this, "Preço inválido. Por favor, insira um número (ex: 19.99).");
                }
            } else if (nome != null) {
                JOptionPane.showMessageDialog(this, "Nome do produto não pode ser vazio.");
            }
        } else if (e.getSource() == btnExcluirProduto) {
            if (precosProdutos.isEmpty()) { // Se não tiver produto, avisa.
                JOptionPane.showMessageDialog(this, "Não há produtos para excluir.", "Nenhum Produto", JOptionPane.INFORMATION_MESSAGE);
                return;
            }
            // Pega os nomes dos produtos pra mostrar numa lista de seleção.
            String[] produtosArray = precosProdutos.keySet().toArray(new String[0]);
            String produtoParaExcluir = (String) JOptionPane.showInputDialog(
                    this,
                    "Selecione o produto para excluir:",
                    "Excluir Produto",
                    JOptionPane.QUESTION_MESSAGE,
                    null,
                    produtosArray,
                    produtosArray.length > 0 ? produtosArray[0] : null
            );

            if (produtoParaExcluir != null) { // Se um produto foi selecionado...
                // Confirma se o usuário quer mesmo excluir.
                int confirm = JOptionPane.showConfirmDialog(this,
                        "Tem certeza que deseja excluir '" + produtoParaExcluir + "'?",
                        "Confirmar Exclusão", JOptionPane.YES_NO_OPTION);
                if (confirm == JOptionPane.YES_OPTION) { // Se confirmou...
                    excluirProduto(produtoParaExcluir); // Exclui.
                    dispose(); // Fecha a tela.
                    new PaginaInicial(true); // Reabre a página inicial no modo admin.
                }
            }
        } else if (e.getSource() == btnSairAdmin) {
            dispose(); // Fecha a tela.
            new Login().setVisible(true); // Volta pra tela de login.
        } else if (command.startsWith("ADD_CAR_")) { // Se o comando começar com "ADD_CAR_", é um botão de adicionar ao carrinho.
            String produto = command.substring("ADD_CAR_".length()); // Pega o nome do produto.

            int totalProdutosNoCarrinho = 0; // Conta quantos produtos já tem no carrinho.
            for (int quantidade : carrinho.values()) {
                totalProdutosNoCarrinho += quantidade;
            }

            if (totalProdutosNoCarrinho < LIMITE_PRODUTOS) { // Se o carrinho não estiver cheio...
                // Adiciona ou aumenta a quantidade do produto no carrinho.
                carrinho.put(produto, carrinho.getOrDefault(produto, 0) + 1);
                JOptionPane.showMessageDialog(this, produto + " adicionado ao carrinho!");
            } else {
                JOptionPane.showMessageDialog(this, "O carrinho está cheio (máximo " + LIMITE_PRODUTOS +
                        " produtos).", "Limite Atingido", JOptionPane.WARNING_MESSAGE);
            }
        }
    }
}