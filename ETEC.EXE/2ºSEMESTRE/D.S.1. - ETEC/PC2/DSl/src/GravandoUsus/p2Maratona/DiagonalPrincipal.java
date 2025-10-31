import javax.swing.*; 

public class DiagonalPrincipal{ 

public static void main (String args[])
       		{ int mat[][], diag[],lin,col;

         		lin=Integer.parseInt(JOptionPane.showInputDialog("Quantas linhas tem a matriz"));

         		col=lin;
         		mat=new int[lin][col]; 
         		diag=new int[lin];

     		for (int linha=0; linha<mat.length; linha++)
       			{ for (int coluna=0; coluna< mat[linha].length; coluna++)
         				{ mat[linha][coluna]=(int)(Math.random()*10); }
       		} 
     
     		String resposta="Colunas\t0\t1\t2\t3"; 
     		resposta+="\nLinhas"; 

     		for (int linha=0; linha<mat.length; linha++)
        			{ resposta+="\n"+linha; 
          			for (int coluna=0; coluna<mat[linha].length; coluna++)
            			{ resposta+="\t"+mat[linha][coluna]; } 
         		}
 
     		resposta+="\n\nDIAGONAL PRINCIPAL";

     		for (int linha=0; linha<mat.length; linha++)
        			{diag[linha]=mat[linha][linha];
         			resposta+="\t"+diag[linha];}
          
     		JTextArea saida = new JTextArea(resposta); 
     		JOptionPane.showMessageDialog(null,saida); 
     		System.exit(0);
    	}
 }