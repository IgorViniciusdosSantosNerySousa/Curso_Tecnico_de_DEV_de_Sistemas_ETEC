describe('RM', () => {
    it('RM E NOME (CONFIRMAÇÃO DE QUE RM E NOME SÃO EQUIVALENTES)', () => {
        const rm = [21521, 21340, 21232];
        const nome = [
            'IGOR VINICIUS DOS SANTOS NERY SOUSA',
            'Graziela da Silva Dantas',
            'MARIA EDUARDA ZINEVICIUS DE SOUZA'
        ];
        expect(rm).toEqual(nome);
    });
});