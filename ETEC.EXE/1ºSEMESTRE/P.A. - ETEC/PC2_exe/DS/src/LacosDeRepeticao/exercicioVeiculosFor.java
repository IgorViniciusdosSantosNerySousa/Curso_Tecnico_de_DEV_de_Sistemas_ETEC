package LacosDeRepeticao;

import java.util.Scanner;

public class exercicioVeiculosFor {

	public static void main(String[] args) {

		Scanner leia=new Scanner (System.in);
		
		int opMontadora=0, contador=0, ferrari=0, lamborghini=0, pagani=0, porshe=0, koenigsegg=0, bugatti=0, mclaren=0, astonMartin=0;
		int escolha=0, tot1=0, tot2=0, tot3=0, tot4=0, tot5=0, tot6=0, tot7=0, tot8=0, carroNaoIdentificado=0, modeloCarroNaoIdentificado=0;
		int fAzul=0, fVerde=0, fVerm=0, lAzul=0,lVerde=0, lVerm=0, paAzul=0, paVerde=0, paVerm=0, poAzul=0, poVerde=0, poVerm=0;
		int kAzul=0, kVerde=0, kVerm=0, bAzul=0, bVerde=0, bVerm=0, mAzul=0, mVerde=0, mVerm=0, aAzul=0, aVerde=0, aVerm=0;
		int lucroEmpresa;
		
		System.out.println("|===================================|");
		System.out.println("|Bem-Vindo(a) a Concessonária do Zé.|");
		System.out.println("|===================================|");
		
		for (contador=1; contador<=10; contador++) {
		
		System.out.println("");
		System.out.println("Marcas de Carro Dispóniveis na nossa loja!.");
		System.out.println("");
		System.out.println("|==========================|");
		System.out.println("|1 - Ferrari.              |");
		System.out.println("|==========================|");
		System.out.println("|2 - Lamborghini.          |");
		System.out.println("|==========================|");;
		System.out.println("|3 - Pagani.               |");
		System.out.println("|==========================|");
		System.out.println("|4 - Porshe.               |");
		System.out.println("|==========================|");
		System.out.println("|5 - Koenigsegg.           |");
		System.out.println("|==========================|");
		System.out.println("|6 - Bugatti.              |");
		System.out.println("|==========================|");
		System.out.println("|7 - McLaren.              |");
		System.out.println("|==========================|");
		System.out.println("|8 - Aston Martin.         |");
		System.out.println("|==========================|");
		System.out.println("");
		System.out.println("|==========================|");
		System.out.println("|Qual você vai escolher?: ");
		System.out.println("|==========================|");
		opMontadora=leia.nextInt();	
		
		
		
		if (opMontadora==1) {
			System.out.println("|Montadora - Ferrari");
			System.out.println("|=========================================================|");
			System.out.println("|1- Ferrari FXX K EVO - COR AZUL - Preço: U$3.000.000     |");
			System.out.println("|2- Ferrari 458 ITALIA - COR VERDE - Preço: U$570.000     |");
			System.out.println("|3- Ferrari Laferrari - COR VERMELHA - Preço: U$7.100.000 |");
			System.out.println("|=========================================================|");
			System.out.println("|Qual Carro deseja escolher?: "+"                         |");
			System.out.println("|=========================================================|");
			escolha=leia.nextInt();
			System.out.println("|=========================================================|");
			if (escolha==1) {
				System.out.println("|Ferrari FXX K EVO - COR AZUL - Preço: U$3.000.000    |");
				System.out.println("|=====================================================|");
			} else if (escolha==2) {
				System.out.println("|Ferrari 458 ITALIA - COR VERDE - Preço: U$570.000    |");
				System.out.println("|=====================================================|");
			} else if (escolha==3) {
				System.out.println("|Ferrari Laferrari - COR VERMELHA - Preço: U$7.100.000|");
				System.out.println("|=====================================================|");
			} 
			
			if (escolha==1) {
				tot1=tot1+3000000;
				fAzul++;
			} else if (escolha==2) {
				tot1=tot1+570000;
				fVerde++;
			} else if (escolha==3) {
				tot1=tot1+7100000;
				fVerm++;
			}
			if (escolha>3) {
				System.out.println("|================================================|");
				System.out.println("|Modelo de Carro não encontrado. Tente novamente.|");
				System.out.println("|================================================|");
				modeloCarroNaoIdentificado++;
			}
			ferrari++;			
		}
	
		
		
		if (opMontadora==2) {
			System.out.println("|Montadora - Lamborghini                                         |");
			System.out.println("|================================================================|");
			System.out.println("|1- Lamborghini STO - COR AZUL - Preço: U$1.000.000              |");
			System.out.println("|2- Lamborghini Huracan - COR VERDE - Preço: U$860.000           |");
			System.out.println("|3- Lamborghini Aventador SVJ - COR VERMELHA - Preço: U$1.570.000|");
			System.out.println("|================================================================|");
			System.out.println("|Qual Carro deseja escolher?: "+"                                |");
			System.out.println("|================================================================|");
			escolha=leia.nextInt();
			System.out.println("|================================================================|");
			if (escolha==1) {
				System.out.println("|Lamborghini STO - COR AZUL - Preço: U$1.000.000             |");
				System.out.println("|============================================================|");
			} else if (escolha==2) {
				System.out.println("|Lamborghini Huracan - COR VERDE - Preço: U$860.000          |");
				System.out.println("|============================================================|");
			} else if (escolha==3) {
				System.out.println("|Lamborghni Aventador SVJ - COR VERMELHA - Preço: U$1.570.000");
				System.out.println("|============================================================|");
			}
			
			if (escolha==1) {
				tot2=tot2+1000000;
				lAzul++;
			} else if (escolha==2) {
				tot2=tot2+860000;
				lVerde++;
			} else if (escolha==3) {
				tot2=tot2+1570000;
				lVerm++;
			}
			if (escolha>3) {
				System.out.println("|================================================|");
				System.out.println("|Modelo de Carro não encontrado. Tente novamente.|");
				System.out.println("|================================================|");
				modeloCarroNaoIdentificado++;
			}
			lamborghini++;
		}
		
		if (opMontadora==3) {
			System.out.println("|Montadora - Pagani                                         |");
			System.out.println("|===========================================================|");
			System.out.println("|1- Pagani Huayra - COR AZUL - Preço: U$2.700.000           |");
			System.out.println("|2- Pagani Zonda - COR VERDE - Preço: U$18.000.000          |");
			System.out.println("|3- Pagani Huayra R EVO - COR VERMELHA - Preço: U$2.500.000 |");
			System.out.println("|===========================================================|");
			System.out.println("|Qual Carro deseja escolher?: "+"                           |");
			System.out.println("|===========================================================|");
			escolha=leia.nextInt();
			System.out.println("|===========================================================|");
			if (escolha==1) {
				System.out.println("|Pagani Huayra - COR AZUL - Preço: U$2.700.000          |");
				System.out.println("|=======================================================|");
			} else if (escolha==2) {
				System.out.println("|Pagani Zonda - COR VERDE - Preço: U$18.000.000         |");
				System.out.println("|=======================================================|");
			} else if (escolha==3) {
				System.out.println("|Pagani Huayra R EVO - COR VERMELHA - Preço: U$2.500.000");
				System.out.println("|=======================================================|");
			}
			
			if (escolha==1) {
				tot3=tot3+2700000;
				paAzul++;
			} else if (escolha==2) {
				tot3=tot3+18000000;
				paVerde++;
			} else if (escolha==3) {
				tot3=tot3+2500000;
				paVerm++;
			}
			if (escolha>3) {
				System.out.println("|================================================|");
				System.out.println("|Modelo de Carro não encontrado. Tente novamente.|");
				System.out.println("|================================================|");
				modeloCarroNaoIdentificado++;
			}
			pagani++;
		}
		
		if (opMontadora==4) {
			System.out.println("|Montadora - Porshe                                       |");
			System.out.println("|=========================================================|");
			System.out.println("|1- Porshe Panamera - COR AZUL - Preço: U$135.000         |");
			System.out.println("|2- Porshe 992 Turbo S - COR VERDE - Preço: U$400.000     |");
			System.out.println("|3- Porshe 911 GT3 RS  - COR VERMELHA - Preço: U$380.000  |");
			System.out.println("|=========================================================|");
			System.out.println("|Qual Carro deseja escolher?: "+"                         |");
			System.out.println("|=========================================================|");
			escolha=leia.nextInt();
			System.out.println("|=========================================================|");
			if (escolha==1) {
				System.out.println("|Porshe Panamera - COR AZUL - Preço: U$135.000        |");
				System.out.println("|=====================================================|");
			} else if (escolha==2) {
				System.out.println("|Porshe 992 Turbo S - COR VERDE - Preço: U$400.000    |");
				System.out.println("|=====================================================|");
			} else if (escolha==3) {
				System.out.println("|Porshe 911 GT3 RS  - COR VERMELHA - Preço: U$380.000 |");
				System.out.println("|=====================================================|");
			}
			
			if (escolha==1) {
				tot4=tot4+135000;
				poAzul++;
			} else if (escolha==2) {
				tot4=tot4+400000;
				poVerde++;
			} else if (escolha==3) {
				tot4=tot4+380000;
				poVerm++;
			}
			if (escolha>3) {
				System.out.println("|================================================|");
				System.out.println("|Modelo de Carro não encontrado. Tente novamente.|");
				System.out.println("|================================================|");
				modeloCarroNaoIdentificado++;
			}
			porshe++;
		}
		
		if (opMontadora==5) {
			System.out.println("|Montadora - Koenigsegg                                     |");
			System.out.println("|===========================================================|");
			System.out.println("|1- Koenigsegg Regera - COR AZUL - Preço: U$3.500.000       |");
			System.out.println("|2- Koenigsegg Jesko - COR VERDE - Preço: U$3.000.000       |");
			System.out.println("|3- Koenigsegg Agera RS - COR VERMELHA - Preço: U$2.500.000 |");
			System.out.println("|===========================================================|");
			System.out.println("|Qual Carro deseja escolher?: "+"                           |");
			System.out.println("|===========================================================|");
			escolha=leia.nextInt();
			System.out.println("|===========================================================|");
			if (escolha==1) {
				System.out.println("|Koenigsegg Regera - COR AZUL - Preço: U$3.500.000      |");
				System.out.println("|=======================================================|");
			} else if (escolha==2) {
				System.out.println("|Koenigsegg Jesko - COR VERDE - Preço: U$3.000.000      |");
				System.out.println("|=======================================================|");
			} else if (escolha==3) {
				System.out.println("|Koenigsegg Agera RS - COR VERMELHA - Preço: U$2.500.000|");
				System.out.println("|=======================================================|");
			}
			
			if (escolha==1) {
				tot5=tot5+3500000;
				kAzul++;
			} else if (escolha==2) {
				tot5=tot5+3000000;
				kVerde++;
			} else if (escolha==3) {
				tot5=tot5+2500000;
				kVerm++;
			}
			if (escolha>3) {
				System.out.println("|================================================|");
				System.out.println("|Modelo de Carro não encontrado. Tente novamente.|");
				System.out.println("|================================================|");
				modeloCarroNaoIdentificado++;
			}
			koenigsegg++;
		}
		
		if (opMontadora==6) {
			System.out.println("|Montadora - Bugatti                                      |");
			System.out.println("|=========================================================|");
			System.out.println("|1- Bugatti Chiron  - COR AZUL - Preço: U$2.500.000       |");
			System.out.println("|2- Bugatti Veyron - COR VERDE - Preço: U$1.280.000       |");
			System.out.println("|3- Bugatti Bolide - COR VERMELHA - Preço: U$4.430.000    |");
			System.out.println("|=========================================================|");
			System.out.println("|Qual Carro deseja escolher?: "+"                         |");
			System.out.println("|=========================================================|");
			escolha=leia.nextInt();
			System.out.println("|=========================================================|");
			if (escolha==1) {
				System.out.println("|Bugatti Chiron  - COR AZUL - Preço: U$2.500.000      |");
				System.out.println("|=====================================================|");
			} else if (escolha==2) {
				System.out.println("|Bugatti Veyron - COR VERDE - Preço: U$1.280.000      |");
				System.out.println("|=====================================================|");
			} else if (escolha==3) {
				System.out.println("|Bugatti Bolide - COR VERMELHA - Preço: U$4.430.000   |");
				System.out.println("|=====================================================|");
			} 
			
			if (escolha==1) {
				tot6=tot6+2500000;
				bAzul++;
			} else if (escolha==2) {
				tot6=tot6+1280000;
				bVerde++;
			} else if (escolha==3) {
				tot6=tot6+4430000;
				bVerm++;
			}
			if (escolha>3) {
				System.out.println("|================================================|");
				System.out.println("|Modelo de Carro não encontrado. Tente novamente.|");
				System.out.println("|================================================|");
				modeloCarroNaoIdentificado++;
			}
			bugatti++;
		}
		
		if (opMontadora==7) {
			System.out.println("|Montadora - McLaren                                 |");
			System.out.println("|====================================================|");
			System.out.println("|1- McLaren Senna GTR - COR AZUL - Preço: U$3.000.000|");
			System.out.println("|2- McLaren 720s - COR VERDE - Preço: U$820.000      |");
			System.out.println("|3- McLaren F1 - COR VERMELHA - Preço: U$15.600.000  |");
			System.out.println("|====================================================|");
			System.out.println("|Qual Carro deseja escolher?: "+"                    |");
			System.out.println("|====================================================|");
			escolha=leia.nextInt();
			System.out.println("|=====================================================|");
			if (escolha==1) {
				System.out.println("|McLaren Senna GTR - COR AZUL - Preço: U$3.000.000|");
				System.out.println("|=================================================|");
			} else if (escolha==2) {
				System.out.println("|McLaren 720s - COR VERDE - Preço: U$820.000      |");
				System.out.println("|=================================================|");
			} else if (escolha==3) {
				System.out.println("|McLaren F1 - COR VERMELHA - Preço: U$15.600.000  |");
				System.out.println("|=================================================|");
			} 
			
			if (escolha==1) {
				tot7=tot7+3000000;
				mAzul++;
			} else if (escolha==2) {
				tot7=tot7+820000;
				mVerde++;
			} else if (escolha==3) {
				tot7=tot7+15600000;
				mVerm++;
			}
			
			if (escolha>3) {
				System.out.println("|================================================|");
				System.out.println("|Modelo de Carro não encontrado. Tente novamente.|");
				System.out.println("|================================================|");
				modeloCarroNaoIdentificado++;
			}
			mclaren++;
		}
		
		if (opMontadora==8) {
			System.out.println("|Montadora - Aston Matin                                   |");
			System.out.println("|==========================================================|");
			System.out.println("|1- Aston Martin Bond - COR AZUL - Preço: U$2.400.000      |");
			System.out.println("|2- Aston Martin Vulcan - COR VERDE - Preço: U$3.000.000   |");
			System.out.println("|3- Aston Martin Vantage - COR VERMELHA - Preço: U$200.000 |");
			System.out.println("|==========================================================|");
			System.out.println("|Qual Carro deseja escolher?: "+"                          |");
			System.out.println("|==========================================================|");
			escolha=leia.nextInt();
			System.out.println("|==========================================================|");
			if (escolha==1) {
				System.out.println("|Aston Martin Bond - COR AZUL - Preço: U$2.400.000     |");
				System.out.println("|======================================================|");
			} else if (escolha==2) {
				System.out.println("|Aston Martin Vulcan - COR VERDE - Preço: U$3.000.000  |");
				System.out.println("|======================================================|");
			} else if (escolha==3) {
				System.out.println("|Aston Martin Vantage - COR VERMELHA - Preço: U$200.000|");
				System.out.println("|======================================================|");
			} 
			
			if (escolha==1) {
				tot8=tot8+2400000;
				aAzul++;
			} else if (escolha==2) {
				tot8=tot8+3000000;
				aVerde++;
			} else if (escolha==3) {
				tot8=tot8+200000;
				aVerm++;
			}
			
			if (escolha>3) {
				System.out.println("|================================================|");
				System.out.println("|Modelo de Carro não encontrado. Tente novamente.|");
				System.out.println("|================================================|");
				modeloCarroNaoIdentificado++;
			}
			astonMartin++;
			
		  } else {
			System.out.println("|Marca de Carro não identificada. Tente novamente.|");
			System.out.println("|=================================================|");
			carroNaoIdentificado++;
		}
		
	}//FIM FOR
		lucroEmpresa=(tot1+tot2+tot3+tot4+tot5+tot6+tot7+tot8);
		System.out.println("|=========================================================|");
		System.out.println("|Lucro total da Concessonária do Zé: U$"+lucroEmpresa+",00|");
		System.out.println("|=========================================================|");
		System.out.println("|Total de carros da Ferrari vendidos: " + ferrari);
		System.out.println("|Lucro Da Ferrari: U$" + tot1+",00");
		System.out.println("|Total de carros Azuis vendidos: " + fAzul);
		System.out.println("|Total de carros Verdes vendidos: " + fVerde);
		System.out.println("|Total de carros Vermelhos vendidos: " + fVerm);
		System.out.println("|=====================================================|");
		System.out.println("|Total de carros da Lamboorghini vendidos: " + lamborghini);
		System.out.println("|Lucro Da Lamborghini: U$" + tot2+",00");
		System.out.println("|Total de carros Azuis vendidos: " + lAzul);
		System.out.println("|Total de carros Verdes vendidos: " + lVerde);
		System.out.println("|Total de carros Vermelhos vendidos: " + lVerm);
		System.out.println("|=====================================================|");
		System.out.println("|Total de carros da Pagani vendidos: " + pagani);
		System.out.println("|Lucro Da Pagani: U$" + tot3+",00");
		System.out.println("|Total de carros Azuis vendidos: " + paAzul);
		System.out.println("|Total de carros Verdes vendidos: " + paVerde);
		System.out.println("|Total de carros Vermelhos vendidos: " + paVerm);
		System.out.println("|=====================================================|");
		System.out.println("|Total de carros da Porshe vendidos: " + porshe);
		System.out.println("|Lucro Da Porshe: U$" + tot4+",00");
		System.out.println("|Total de carros Azuis vendidos: " + poAzul);
		System.out.println("|Total de carros Verdes vendidos: " + poVerde);
		System.out.println("|Total de carros Vermelhos vendidos: " + poVerm);
		System.out.println("|=====================================================|");
		System.out.println("|Total de carros da Koenigsegg vendidos: " + koenigsegg);
		System.out.println("|Lucro Da Koenigsegg: U$" + tot5+",00");
		System.out.println("|Total de carros Azuis vendidos: " + kAzul);
		System.out.println("|Total de carros Verdes vendidos: " + kVerde);
		System.out.println("|Total de carros Vermelhos vendidos: " + kVerm);
		System.out.println("|=====================================================|");
		System.out.println("|Total de carros da Bugatti vendidos: " + bugatti);
		System.out.println("|Lucro Da Bugatti: U$" + tot6+",00");
		System.out.println("|Total de carros Azuis vendidos: " + bAzul);
		System.out.println("|Total de carros Verdes vendidos: " + bVerde);
		System.out.println("|Total de carros Vermelhos vendidos: " + bVerm);
		System.out.println("|=====================================================|");
		System.out.println("|Total de carros da McLaren vendidos: " + mclaren);
		System.out.println("|Lucro Da Mclaren: U$" + tot7+",00");
		System.out.println("|Total de carros Azuis vendidos: " + mAzul);
		System.out.println("|Total de carros Verdes vendidos: " + mVerde);
		System.out.println("|Total de carros Vermelhos vendidos: " + mVerm);
		System.out.println("|=====================================================|");
		System.out.println("|Total de carros da Aston Martin vendidos: " + astonMartin);
		System.out.println("|Lucro Da Aston Martin: U$" + tot8+",00");
		System.out.println("|Total de carros Azuis vendidos: " + aAzul);
		System.out.println("|Total de carros Verdes vendidos: " + aVerde);
		System.out.println("|Total de carros Vermelhos vendidos: " + aVerm);
		System.out.println("|=====================================================|");
		System.out.println("|Total de Marcas de Carros não identificados: " + carroNaoIdentificado);
		System.out.println("|Total de Modelos de Carros não identificados: " + modeloCarroNaoIdentificado);
		System.out.println("|=====================================================|");
		
		
	}//FIM MÉTODO

}//FIM CLASSE
