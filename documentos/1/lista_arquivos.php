<?php
// Substitua "caminho_da_pasta" pelo caminho real da pasta onde estão os arquivos
$pasta = "caminho_da_pasta";
$arquivos = scandir($pasta);

echo '<!DOCTYPE html>';
echo '<html lang="pt-br">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Lista de Arquivos</title>';
echo '<style>';
echo 'body { font-family: Arial, sans-serif; margin: 20px; }';
echo 'h1 { color: #007BFF; }';
echo 'ul { list-style-type: none; padding: 0; }';
echo 'li { margin-bottom: 10px; }';
echo 'a { color: #007BFF; text-decoration: none; }';
echo 'a:hover { text-decoration: underline; }';
echo '</style>';
echo '</head>';
echo '<body>';
echo '<h1>Lista de Arquivos</h1>';
echo '<ul>';

foreach ($arquivos as $arquivo) {
    $extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
    if ($extensao === 'pdf') {
        echo '<li><a href="' . $pasta . '/' . $arquivo . '">' . $arquivo . '</a></li>';
    }
}

echo '</ul>';
echo '</body>';
echo '</html>';
?>
