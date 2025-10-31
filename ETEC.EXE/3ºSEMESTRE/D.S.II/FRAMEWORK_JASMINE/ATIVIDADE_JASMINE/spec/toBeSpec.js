describe('Teste de igualdade usando os RMs: 21521, 21340 e 21232', () => {
    it('RM 21521 = 21521', () => {
        expect(21521).toBe(21521);
    });

    it('RM 21521 ≠ 21340', () => {
        expect(21521).not.toBe(21340);
    });

    it('RM 21340 ≠ 21232', () => {
        expect(21340).not.toBe(21232);
    });

    it('RM 21521 ≠ 21232', () => {
        expect(21521).not.toBe(21232);
    });
});