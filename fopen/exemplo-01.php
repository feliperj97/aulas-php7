<?php

//Manipulando arquivos com fopen
// w+ : apaga o conteúdo do arquivo antes de executar
// a+ : mantém o conteúdo do arquivo e apenas adiciona nova informação
$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s") . "\r\n" );

fclose($file);

echo "Arquivo criado com sucesso!";

?>