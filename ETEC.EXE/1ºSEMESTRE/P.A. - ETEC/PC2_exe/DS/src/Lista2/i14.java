package Lista2;

import java.util.Scanner;

public class i14 {
    public static void main(String[] args) {
        Scanner leia = new Scanner(System.in);
        int num, x;
        long fatorial = 1;
        
        
        System.out.println("Digite um número: ");
        num=leia.nextInt();
        

        for(x=1; x <=num; x++) {
            fatorial *= x;
        }

        System.out.printf("O fatorial desse número é de: "+ fatorial);
    }
}
