<?php
// Substitua "caminho_da_pasta" pelo caminho real da pasta onde estão os arquivos
$pasta = "caminho_da_pasta";
$arquivos = scandir($pasta);

$listaArquivos = [];

foreach ($arquivos as $arquivo) {
    $extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
    if ($extensao === 'pdf') {
        $item = array(
            'nome' => $arquivo,
            'link' => $pasta . '/' . $arquivo
        );
        array_push($listaArquivos, $item);
    }
}

header('Content-Type: application/json');
echo json_encode($listaArquivos);
?>
