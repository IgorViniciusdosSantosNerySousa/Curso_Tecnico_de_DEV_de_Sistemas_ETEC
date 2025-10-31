<?php
// apenas para fins de debug, gerado por IA
function arrayParaTabelaHtml(array $array, string $tableId = '', string $tableClass = ''): string
{
    // Verifica se o array é válido e não está vazio
    if (empty($array) || !is_array(current($array))) {
        return "<p>O array está vazio ou não tem o formato esperado (array de arrays).</p>";
    }

    // Atributos da tabela
    $tableAttributes = '';
    if (!empty($tableId)) {
        $tableAttributes .= ' id="' . htmlspecialchars($tableId) . '"';
    }
    if (!empty($tableClass)) {
        $tableAttributes .= ' class="' . htmlspecialchars($tableClass) . '"';
    }

    // Inicia a tabela HTML
    $html = "<table{$tableAttributes}>" . PHP_EOL; // PHP_EOL para nova linha no código fonte HTML

    // Cabeçalho da Tabela (thead)
    // Pega as chaves do *primeiro* array associativo para usar como cabeçalhos
    $primeiraLinha = current($array); // Pega o primeiro elemento
    $html .= "  <thead>" . PHP_EOL;
    $html .= "    <tr>" . PHP_EOL;
    foreach (array_keys($primeiraLinha) as $cabecalho) {
        // Escapa caracteres HTML para segurança
        $html .= "      <th>" . htmlspecialchars($cabecalho) . "</th>" . PHP_EOL;
    }
    $html .= "    </tr>" . PHP_EOL;
    $html .= "  </thead>" . PHP_EOL;

    // Corpo da Tabela (tbody)
    $html .= "  <tbody>" . PHP_EOL;
    foreach ($array as $linha) {
        // Verifica se a linha é realmente um array (para segurança extra)
        if (is_array($linha)) {
            $html .= "    <tr>" . PHP_EOL;
            // Itera sobre os valores da linha (células)
            foreach ($linha as $celula) {
                // Escapa caracteres HTML para segurança
                // Converte null para string vazia para exibição
                $valorCelula = is_null($celula) ? '' : $celula;
                $html .= "      <td>" . htmlspecialchars((string)$valorCelula) . "</td>" . PHP_EOL;
            }
            $html .= "    </tr>" . PHP_EOL;
        }
    }
    $html .= "  </tbody>" . PHP_EOL;

    // Fecha a tabela
    $html .= "</table><br><br>";

    return $html;
}
