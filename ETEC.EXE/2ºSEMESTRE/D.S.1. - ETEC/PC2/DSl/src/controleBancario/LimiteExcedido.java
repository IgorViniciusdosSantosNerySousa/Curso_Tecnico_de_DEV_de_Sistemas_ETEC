package controleBancario;

public class LimiteExcedido extends Exception{
	
	public String toString() {
		return "Seu limite foi excedido!";
	}
	
}
