/*Cria e permite o preenchimento  pelo usuário de um vetor com 
 *10 elementos do tipo int e ao final mostra seus elementos 
 *e permite a consulta dos valores pela posição */
 
import javax.swing.*; 
public class ExemploVetorConsulta{ 
  public static void main (String args[])
    { int v[]=new int[10]; 

      for (int i=0; i<v.length; i++)
        { v[i]=Integer.parseInt( JOptionPane.showInputDialog( "Digite o valor do "+(i+1)+ "º elemento (posição "+i+")"));  } 

      String resposta="Posição\tValor"; 
      for (int i=0; i<v.length; i++)
        { resposta+="\nv["+i+"]\t"+v[i]; } 
      
      JTextArea saida = new JTextArea(11,10); 
      saida.setText(resposta); 

      JOptionPane.showMessageDialog(null,saida); 

      int consulta = Integer.parseInt( JOptionPane.showInputDialog( "Digite uma posição válida para consulta (0-9)")); 
  
      while ((consulta>=0) && (consulta<=9))
       { JOptionPane.showMessageDialog( null,"Posição: "+consulta+" ---> Valor: "+v[consulta]); 
         JOptionPane.showMessageDialog(null,saida); 
         consulta = Integer.parseInt( JOptionPane.showInputDialog( "Digite uma posição válida para consulta (0-9)")); 
       } 
     System.exit(0); 
}
 }