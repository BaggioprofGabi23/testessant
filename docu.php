<?php
$file = 'counter.txt';

// Verifica se o arquivo existe, se não, cria-o com contagem 0
if (!file_exists($file)) {
    file_put_contents($file, '0');
}

// Lê a contagem atual do arquivo
$counter = file_get_contents($file);

// Incrementa o contador
$counter++;

// Escreve a nova contagem de volta no arquivo
file_put_contents($file, $counter);

// Retorna a contagem para exibição na página
echo $counter;

?>