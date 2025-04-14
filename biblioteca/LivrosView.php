<?php

function exibirLivros($listaDeLivros) {
    echo "<ul>";
    foreach ($listaDeLivros as $livro) {
        echo "<li>Título: {$livro['titulo']} | Autor: {$livro['autor']} | Ano: {$livro['ano']}</li>";
    }
    echo "</ul>";
}
?>
