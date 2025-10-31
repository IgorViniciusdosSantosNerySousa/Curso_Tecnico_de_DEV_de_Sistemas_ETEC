package Lista4;

import java.util.Scanner;

public class K5 {

	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);

        int totalHomensLesteCentral = 0;
        int totalMulheresOesteNorteSul = 0;
        int totalHomensMenoresNorte = 0;
        int totalMulheresMaioresOeste = 0;
        int totalMulheresCentral = 0;
        int totalPessoas = 0;

        while (true) {
            System.out.print("Digite a idade: ");
            int idade = scanner.nextInt();

            System.out.print("Digite a região (Centro, Leste, Norte, Oeste ou Sul): ");
            String regiao = scanner.next();

            System.out.print("Digite o sexo (M ou F): ");
            char sexo = scanner.next().charAt(0);

            totalPessoas++;

            if (sexo == 'M') {
                if (regiao.equalsIgnoreCase("Leste") || regiao.equalsIgnoreCase("Centro")) {
                    totalHomensLesteCentral++;
                }
                if (regiao.equalsIgnoreCase("Norte") && idade < 18) {
                    totalHomensMenoresNorte++;
                }
            } else {
                if (regiao.equalsIgnoreCase("Oeste") || regiao.equalsIgnoreCase("Norte") || regiao.equalsIgnoreCase("Sul")) {
                    totalMulheresOesteNorteSul++;
                }
                if (regiao.equalsIgnoreCase("Oeste") && idade >= 18) {
                    totalMulheresMaioresOeste++;
                }
                if (regiao.equalsIgnoreCase("Centro")) {
                    totalMulheresCentral++;
                }
            }

            System.out.print("Deseja continuar? (S/N): ");
            char resp = scanner.next().charAt(0);
            if (resp == 'N' || resp == 'n') {
                break;
            }
        }

        System.out.println("Total de homens que residem nas Zonas Leste e Central: " + totalHomensLesteCentral);
        System.out.println("Percentual de mulheres que residem nas Zonas Oeste, Norte e Sul: " + (totalMulheresOesteNorteSul * 100.0 / totalPessoas) + "%");
        System.out.println("Total de homens menores de idade que residem na Zona Norte da cidade: " + totalHomensMenoresNorte);
        System.out.println("Percentual de mulheres maiores de idade que residem na Zona Oeste da cidade: " + (totalMulheresMaioresOeste * 100.0 / totalPessoas) + "%");
        System.out.println("Percentual de mulheres que residem na Zona Central da cidade: " + (totalMulheresCentral * 100.0 / totalPessoas) + "%");
    

	}

}
