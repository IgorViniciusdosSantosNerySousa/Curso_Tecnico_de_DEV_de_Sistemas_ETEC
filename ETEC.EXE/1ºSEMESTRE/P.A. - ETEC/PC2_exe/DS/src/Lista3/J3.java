package Lista3;

import java.util.Scanner;

public class J3 {

    public static void main(String[] args) {
        Scanner read = new Scanner(System.in);

        String sexo;
        String resp = "Sim";
        int opnCliente;
        int opnS = 0;
        int opnN = 0;
        int homenS = 0;
        int homenN = 0;
        int mulherS = 0;
        int mulherN = 0;
        double porcentF;
        double porcentM;

        while (resp.equalsIgnoreCase("Sim")) {
            System.out.println("Informe seu sexo: ");
            System.out.println("M - Masculino");
            System.out.println("F - Feminino");
            sexo = read.next();
            System.out.println("VocÍ gostou do novo produto ?");
            System.out.println("1 - Sim");
            System.out.println("2 - N„o");
            opnCliente = read.nextInt();

            switch (opnCliente) {
                case 1:
                    opnS++;
                    if (sexo.equalsIgnoreCase("M")) {
                        homenS++;
                    } else if (sexo.equalsIgnoreCase("F")) {
                        mulherS++;
                    }
                    break;

                case 2:
                    opnN++;
                    if (sexo.equalsIgnoreCase("M")) {
                        homenN++;
                    } else if (sexo.equalsIgnoreCase("F")) {
                        mulherN++;
                    }
                    break;

                default:
                    System.out.println("Op√ß√£o inv·lida.");
                    break;
            }

            System.out.println("Deseja inserir um novo voto? (Sim/N„o)");
            resp = read.next();
        }

        porcentF = (double) (mulherS * 100) / (mulherS + mulherN);
        porcentM = (double) (homenN * 100) / (homenS + homenN);

        System.out.println("----------------------------------------------");
        System.out.println("Clientes que gostaram do produto: " + opnS);
        System.out.println("Clientes que n„o gostaram do produto: " + opnN);
        System.out.println("----------------------------------------------");
        System.out.println("Porcentagem de votos por sexo:");
        System.out.println("Porcentagem de mulheres que gostaram do produto: " + porcentF + "%");
        System.out.println("Porcentagem de homens que n√£o gostaram do produto: " + porcentM + "%");

        read.close();
    }
}