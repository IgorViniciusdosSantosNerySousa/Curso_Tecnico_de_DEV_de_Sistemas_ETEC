// Calcula a soma dos elementos de um vetor
import javax.swing.*;

public class SomaVetor {
   public static void main( String args[] )
   {
      int a[] = { 1, 2, 4, 8, 6, 7, 15, 9, 10, 18 };
      int total = 0;
      String saida="Elementos do vetor\n";
      for ( int i = 0; i < a.length; i++ ) 
         { saida+=a[i]+" ";
           total += a[ i ];}
      JOptionPane.showMessageDialog( null, saida +"\nSoma do elementos do vetor " + total, "Soma os elementos do vetor", JOptionPane.INFORMATION_MESSAGE );
      System.exit( 0 );
   }
}