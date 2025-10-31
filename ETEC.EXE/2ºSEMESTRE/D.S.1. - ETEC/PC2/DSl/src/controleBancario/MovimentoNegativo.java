package controleBancario;

public class MovimentoNegativo extends Exception{
	
	public String toString() {
		return "O valor não pode ser menor ou igual zero!";
	}
}
