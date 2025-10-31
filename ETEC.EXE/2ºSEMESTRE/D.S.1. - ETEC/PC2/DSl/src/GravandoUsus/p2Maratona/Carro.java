public class Carro implements Comparable<Carro>{

	String marca;
	int ano;

	//... o restante do c�digo anterior ficaria aqui
	
	public int compareTo(Carro outrocarro){
		if(this.ano < outrocarro.ano){
			return -1;
		}
		if(this.ano > outrocarro.ano){
			return 1;
		}
		return 0;
	}
} 